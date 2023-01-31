@php
@endphp
@if(request()->type == "team")
    <div id="team_type">
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Proje:</label>
            <!--begin::Select2-->
            <select name="project_id" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                @foreach($projects as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                @endforeach
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Ofis:</label>
            <!--begin::Select2-->
            <select name="office_id" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                @foreach($offices as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                @endforeach
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Hedef Tipi:</label>
            <!--begin::Select2-->
            <select name="target_type" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                <option value="quantity">Satış</option>
                <option value="point">Puan</option>
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Hedef:</label>
            <!--begin::Select2-->
            <input type="number" name="target" class="form-control form-control-solid" placeholder="Hedef" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Başlangıç Tarihi:</label>
            <!--begin::Select2-->
            <input type="date" name="start_date" class="form-control form-control-solid" placeholder="Başlangıç Tarihi" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Bitiş Tarihi:</label>
            <!--begin::Select2-->
            <input type="date" name="end_date" class="form-control form-control-solid" placeholder="Bitiş Tarihi" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
    </div>
@elseif(request()->type == "user")
    <div id="user_type">
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Kullanıcı:</label>
            <!--begin::Select2-->
            <select name="user_id" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                @foreach($users as $row)
                    <option value="{{ $row->id }}">{{ $row->name.' '.$row->surname }}</option>
                @endforeach
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Hedef Tipi:</label>
            <!--begin::Select2-->
            <select name="target_type" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                <option value="quantity">Satış</option>
                <option value="point">Puan</option>
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Hedef:</label>
            <!--begin::Select2-->
            <input type="number" name="target" class="form-control form-control-solid" placeholder="Hedef" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Başlangıç Tarihi:</label>
            <!--begin::Select2-->
            <input type="date" name="start_date" class="form-control form-control-solid" placeholder="Başlangıç Tarihi" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Bitiş Tarihi:</label>
            <!--begin::Select2-->
            <input type="date" name="end_date" class="form-control form-control-solid" placeholder="Bitiş Tarihi" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
    </div>
@elseif(request()->type == "project")
    <div id="project_type">
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Proje:</label>
            <!--begin::Select2-->
            <select name="project_id" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                @foreach($projects as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                @endforeach
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Hedef Tipi:</label>
            <!--begin::Select2-->
            <select name="target_type" class="form-select form-select-solid" data-control="select2" >
                <option selected value="">Seçiniz...</option>
                <option value="quantity">Satış</option>
                <option value="point">Puan</option>
            </select>
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Hedef:</label>
            <!--begin::Select2-->
            <input type="number" name="target" class="form-control form-control-solid" placeholder="Hedef" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Başlangıç Tarihi:</label>
            <!--begin::Select2-->
            <input type="date" name="start_date" class="form-control form-control-solid" placeholder="Başlangıç Tarihi" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="mb-5">
            <label class="form-label fs-6 fw-semibold">Bitiş Tarihi:</label>
            <!--begin::Select2-->
            <input type="date" name="end_date" class="form-control form-control-solid" placeholder="Bitiş Tarihi" />
            <!--end::Select2-->
        </div>
        <!--end::Input group-->
    </div>
@endif
<script src="{{ asset('trapp') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('trapp') }}/assets/js/scripts.bundle.js"></script>
<link href="{{ asset('trapp') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('trapp') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
