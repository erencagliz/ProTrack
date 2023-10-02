<?php

use Illuminate\Support\Facades\Route;

cache()->flush();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\Login::class, 'index'])->name('auth.login');
    Route::get('logout', function () {Auth::logout(); return redirect()->route('auth.login')->withErrors(['success, Başarıyla çıkış yaptınız.']);})->name('auth.logout');
});

Route::middleware(['auth', 'statuschecker'])->group(function () {
    Route::get('', [\App\Http\Controllers\Dashboard::class, 'index'])->name('dashboard');
    Route::get('calendar', [\App\Http\Controllers\Calendar::class, 'index'])->name('calendar');
    Route::get('teams', [\App\Http\Controllers\Teams::class, 'index'])->name('teams');
    Route::get('reporting', [\App\Http\Controllers\Reporting::class, 'index'])->name('reporting');
    Route::get('profile', [\App\Http\Controllers\Profile::class, 'index'])->name('profile');
    Route::get('pauses', [\App\Http\Controllers\Pause\Listing::class, 'index'])->name('pauses');
    Route::prefix('sales')->group(function () {
        Route::get('team-sales', [\App\Http\Controllers\Sales\TeamSales::class, 'index'])->name('sales.team-sales');
        Route::get('my-sales', [\App\Http\Controllers\Sales\MySales::class, 'index'])->name('sales.my-sales');
        Route::get('all-sales', [\App\Http\Controllers\Sales\AllSales::class, 'index'])->name('sales.all-sales');
        Route::get('add-sale-for-everyone', [\App\Http\Controllers\Sales\AddSale::class, 'index_for_everyone'])->name('sales.add-sale-for-everyone');
        Route::get('add-sale-for-team', [\App\Http\Controllers\Sales\AddSale::class, 'index_for_team'])->name('sales.add-sale-for-team');
        Route::get('pending-sales-for-everyone', [\App\Http\Controllers\Sales\PendingSales::class, 'index_for_everyone'])->name('sales.pending-sales-for-everyone');
        Route::get('pending-sales-for-team', [\App\Http\Controllers\Sales\PendingSales::class, 'index_for_team'])->name('sales.pending-sales-for-team');
    });
    Route::prefix('users')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Users\Listing::class, 'index'])->name('users.listing');
        Route::get('edit/{id}', [\App\Http\Controllers\Users\Edit::class, 'index'])->name('users.edit');
    });
    Route::prefix('user-groups')->group(function () {
        Route::get('listing', [\App\Http\Controllers\UserGroups\Listing::class, 'index'])->name('user-groups.listing');
    });
    Route::prefix('bonus')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Bonus\Listing::class, 'index'])->name('bonus.listing');
        Route::get('my', [\App\Http\Controllers\Bonus\My::class, 'index'])->name('bonus.my');
    });
    Route::prefix('files')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Files\Listing::class, 'index'])->name('files.listing');
    });
    Route::prefix('offices')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Offices\Listing::class, 'index'])->name('offices.listing');
    });
    Route::prefix('projects')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Projects\Listing::class, 'index'])->name('projects.listing');
    });
    Route::prefix('offdays')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Offdays\Listing::class, 'index'])->name('offdays.listing');
        Route::get('add', [\App\Http\Controllers\Offdays\Add::class, 'index'])->name('offdays.add');
        Route::get('details/{id}', [\App\Http\Controllers\Offdays\Details::class, 'index'])->name('offdays.details');
        Route::get('edit/{id}', [\App\Http\Controllers\Offdays\Edit::class, 'index'])->name('offdays.edit');
    });
    Route::prefix('products')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Products\Listing::class, 'index'])->name('products.listing');
    });
    Route::prefix('targets')->group(function () {
        Route::get('listing', [\App\Http\Controllers\Targets\Listing::class, 'index'])->name('targets.listing');
        Route::get('edit/{id}', [\App\Http\Controllers\Targets\Edit::class, 'index'])->name('targets.edit');
    });
    Route::prefix('human-resources')->group(function () {
        Route::get('listing', [\App\Http\Controllers\HumanResources\Listing::class, 'index'])->name('human-resources.listing');
        Route::get('edit/{id}', [\App\Http\Controllers\HumanResources\Edit::class, 'index'])->name('human-resources.edit');
    });
});
