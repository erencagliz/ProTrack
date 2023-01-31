<?php

namespace App\Http\Controllers\Targets;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Project;
use App\Models\Sale;
use App\Models\Target;
use App\Models\User;
use Illuminate\Http\Request;

class Listing extends Controller
{
    public function index ()
    {
        tr_check_target_target_status();

        error_reporting(0);
        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $status = request()->status;
        $office_id = request()->office_id;
        $project_id = request()->project_id;
        $user_id = request()->user_id;
        $target_status = request()->target_status;
        $type = request()->type;
        $target_type = \request()->target_type;

        $projects = Project::query()->where(['status' => 'active', 'type' => 'sale'])->get();
        $offices = Office::query()->where(['status' => 'active'])->get();
        $users = User::query()->select('users.id', 'users.name', 'users.surname')->join('user_details', 'user_details.user_id', '=', 'users.id')->join('projects', 'user_details.project_id', '=', 'projects.id')->where(['users.status' => 'active', 'projects.type' => 'sale'])->get();
        $targets = Target::query()->where(function ($query) use ($start_date, $end_date, $status, $office_id, $project_id, $user_id, $target_status, $type, $target_type) {
            if ($start_date) {
                $query->where('created_at', '>=', $start_date.' 00:00:00');
            }
            if ($end_date) {
                $query->where('created_at', '<=', $end_date.' 23:59:59');
            }
            if ($status) {
                $query->where('status', $status);
            }
            if ($office_id) {
                $query->where('office_id', $office_id);
            }
            if ($project_id) {
                $query->where('project_id', $project_id);
            }
            if ($user_id) {
                $query->where('user_id', $user_id);
            }
            if ($target_status) {
                $query->where('target_status', $target_status);
            }
            if ($target_type) {
                $query->where('target_type', $target_type);
            }
            if ($type) {
                $query->where('type', $type);
            }
        })->orderBy('created_at', 'desc')->get();

        return view('pages.targets.listing', [
            'projects' => $projects,
            'offices' => $offices,
            'users' => $users,
            'targets' => $targets,
        ]);
    }

    public function add (Request $request)
    {
        $validate = $request->validate(['type' => 'required']);
        if ($validate) {
            if ($request->type == "user") {
                $validate = $request->validate([
                    'user_id' => 'required',
                    'target_type' => 'required',
                    'target' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required',
                ]);
                $target = new Target();
                $target->type = $request->type;
                $target->user_id = $request->user_id;
                $target->target_type = $request->target_type;
                $target->target = $request->target;
                $target->start_date = $request->start_date;
                $target->end_date = $request->end_date;
                $target->status = 'active';
                if (date('Y-m-d H:i:s') < date('Y-m-d 00:00:00', strtotime($request->start_date))) {
                    $target->target_status = 'not_started';
                } else {
                    if (date('Y-m-d H:i:s') > date('Y-m-d 23:59:59', strtotime($request->end_date))) {
                        if ($request->type == "team" || $request->type == "user" || $request->type == "project") {
                            $target_sales = Sale::query()
                                ->where(function ($query) use ($request) {
                                    if ($request->type == "team") {
                                        $query->where('office_id', $request->office_id);
                                        $query->where('project_id', $request->project_id);
                                    } else if ($request->type == "user") {
                                        $query->where('user_id', $request->user_id);
                                    } else if ($request->type == "project") {
                                        $query->where('project_id', $request->project_id);
                                    }
                                })
                                ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($request->start_date)),date('Y-m-d 23:59:59', strtotime($request->end_date))])
                                ->sum($request->target_type);
                            if ($target_sales >= $request->target) {
                                $target->target_status = 'completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            } else {
                                $target->target_status = 'not_completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            }
                        }
                    } else {
                        $target_sales = Sale::query()
                            ->where(function ($query) use ($request) {
                                if ($request->type == "team") {
                                    $query->where('office_id', $request->office_id);
                                    $query->where('project_id', $request->project_id);
                                } else if ($request->type == "user") {
                                    $query->where('user_id', $request->user_id);
                                } else if ($request->type == "project") {
                                    $query->where('project_id', $request->project_id);
                                }
                            })
                            ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($request->start_date)),date('Y-m-d 23:59:59', strtotime($request->end_date))])
                            ->sum($request->target_type);
                        if ($target_sales >= $request->target) {
                            $target->target_status = 'completed';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        } else {
                            $target->target_status = 'continues';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        }

                    }
                }
                $target->save();
                if ($target) {
                    return redirect()->back()->withErrors(['success,Hedef başarıyla eklendi.']);
                }
            } else if ($request->type == "team") {
                $validate = $request->validate([
                    'project_id' => 'required',
                    'office_id' => 'required',
                    'target_type' => 'required',
                    'target' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required',
                ]);
                $target = new Target();
                $target->type = $request->type;
                $target->project_id = $request->project_id;
                $target->office_id = $request->office_id;
                $target->target_type = $request->target_type;
                $target->target = $request->target;
                $target->start_date = $request->start_date;
                $target->end_date = $request->end_date;
                $target->status = 'active';
                if (date('Y-m-d H:i:s') < date('Y-m-d 00:00:00', strtotime($request->start_date))) {
                    $target->target_status = 'not_started';
                } else {
                    if (date('Y-m-d H:i:s') > date('Y-m-d 23:59:59', strtotime($request->end_date))) {

                        if ($request->type == "team" || $request->type == "user" || $request->type == "project") {
                            $target_sales = Sale::query()
                                ->where(function ($query) use ($request) {
                                    if ($request->type == "team") {
                                        $query->where('office_id', $request->office_id);
                                        $query->where('project_id', $request->project_id);
                                    } else if ($request->type == "user") {
                                        $query->where('user_id', $request->user_id);
                                    } else if ($request->type == "project") {
                                        $query->where('project_id', $request->project_id);
                                    }
                                })
                                ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($request->start_date)),date('Y-m-d 23:59:59', strtotime($request->end_date))])
                                ->sum($request->target_type);
                            if ($target_sales >= $request->target) {
                                $target->target_status = 'completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            } else {
                                $target->target_status = 'not_completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            }
                        }
                    } else {
                        $target_sales = Sale::query()
                            ->where(function ($query) use ($request) {
                                if ($request->type == "team") {
                                    $query->where('office_id', $request->office_id);
                                    $query->where('project_id', $request->project_id);
                                } else if ($request->type == "user") {
                                    $query->where('user_id', $request->user_id);
                                } else if ($request->type == "project") {
                                    $query->where('project_id', $request->project_id);
                                }
                            })
                            ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($request->start_date)),date('Y-m-d 23:59:59', strtotime($request->end_date))])
                            ->sum($request->target_type);
                        if ($target_sales >= $request->target) {
                            $target->target_status = 'completed';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        } else {
                            $target->target_status = 'continues';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        }

                    }
                }
                $target->save();
                if ($target) {
                    return redirect()->back()->withErrors(['success,Hedef başarıyla eklendi.']);
                }
            } else if ($request->type == "project") {
                $validate = $request->validate([
                    'project_id' => 'required',
                    'target_type' => 'required',
                    'target' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required',
                ]);
                $target = new Target();
                $target->type = $request->type;
                $target->project_id = $request->project_id;
                $target->target_type = $request->target_type;
                $target->target = $request->target;
                $target->start_date = $request->start_date;
                $target->end_date = $request->end_date;
                $target->status = 'active';
                if (date('Y-m-d H:i:s') < date('Y-m-d 00:00:00', strtotime($request->start_date))) {
                    $target->target_status = 'not_started';
                } else {
                    if (date('Y-m-d H:i:s') > date('Y-m-d 23:59:59', strtotime($request->end_date))) {
                        if ($request->type == "team" || $request->type == "user" || $request->type == "project") {
                            $target_sales = Sale::query()
                                ->where(function ($query) use ($request) {
                                    if ($request->type == "team") {
                                        $query->where('office_id', $request->office_id);
                                        $query->where('project_id', $request->project_id);
                                    } else if ($request->type == "user") {
                                        $query->where('user_id', $request->user_id);
                                    } else if ($request->type == "project") {
                                        $query->where('project_id', $request->project_id);
                                    }
                                })
                                ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($request->start_date)),date('Y-m-d 23:59:59', strtotime($request->end_date))])
                                ->sum($request->target_type);
                            if ($target_sales >= $request->target) {
                                $target->target_status = 'completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            } else {
                                $target->target_status = 'not_completed';
                                $target->target_status_date = date('Y-m-d H:i:s');
                            }
                        }
                    } else {
                        $target_sales = Sale::query()
                            ->where(function ($query) use ($request) {
                                if ($request->type == "team") {
                                    $query->where('office_id', $request->office_id);
                                    $query->where('project_id', $request->project_id);
                                } else if ($request->type == "user") {
                                    $query->where('user_id', $request->user_id);
                                } else if ($request->type == "project") {
                                    $query->where('project_id', $request->project_id);
                                }
                            })
                            ->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($request->start_date)),date('Y-m-d 23:59:59', strtotime($request->end_date))])
                            ->sum($request->target_type);
                        if ($target_sales >= $request->target) {
                            $target->target_status = 'completed';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        } else {
                            $target->target_status = 'continues';
                            $target->target_status_date = date('Y-m-d H:i:s');
                        }

                    }
                }
                $target->save();
                if ($target) {
                    return redirect()->back()->withErrors(['success,Hedef başarıyla eklendi.']);
                }
            }
        }
    }

    public function delete ($id)
    {
        $user = Target::query()->where('id', $id)->update(['status' => 'passive']);
        if ($user) {
            return redirect()->back()->withErrors(['success,Hedef başarıyla silindi.']);
        } else {
            return redirect()->back()->withErrors(['error,Hedef silinemedi.']);
        }
    }

    public function active ($id)
    {
        $user = Target::query()->where('id', $id)->update(['status' => 'active']);
        if ($user) {
            return redirect()->back()->withErrors(['success,Hedef başarıyla aktifleştirildi.']);
        } else {
            return redirect()->back()->withErrors(['error,Hedef aktifleştirilemedi.']);
        }
    }

    public function pending ($id)
    {
        $user = Target::query()->where('id', $id)->update(['status' => 'pending']);
        if ($user) {
            return redirect()->back()->withErrors(['success,Hedef başarıyla beklemeye alındı.']);
        } else {
            return redirect()->back()->withErrors(['error,Hedef beklemeye alınamadı.']);
        }
    }
}
