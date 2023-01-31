@php $perms = tr_group_permission(tr_user_details(null, 'group_id')) @endphp
@foreach(json_decode($perms, true) as $key2 => $value2)
    @if($key2 == "add_sale_access")
        @if($value2 == true)
            <div class="modal fade" id="satis_ekle">
                <div class="modal-dialog">
                    <form id="satis_ekle_form" class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Satış Ekle</h3>

                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                <span class="fa fa-xmark"></span>
                            </div>
                            <!--end::Close-->
                        </div>

                        <div class="modal-body">
                            @csrf

                            <div class="form-group mt-5">
                                <label class="required form-label">Ürün:</label>
                                <select name="product_id" class="form-select form-select-solid" data-control="select2" >
                                    <option selected disabled>Seçiniz...</option>
                                    @php $products = \App\Models\Product::query()->where(['status' => 'active', 'project_id' => tr_user_details(Auth::user()->id, 'project_id')])->get(); @endphp
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }} ({{ $product->title }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-5">
                                <label class="required form-label">Adet:</label>
                                <select name="quantity" class="form-select form-select-solid" data-control="select2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                            </div>

                            <div class="form-group mt-5">
                                <label class="form-label" >IBAN Onayı:</label>
                                <select name="custom[iban_verify]" data-minimum-results-for-search="Infinity" class="form-select form-select-solid" data-control="select2" >
                                    <option selected >Seçiniz...</option>
                                    <option value="true">Evet</option>
                                    <option value="false">Hayır</option>
                                </select>
                            </div>

                            <div class="form-group mt-5" >
                                <label class="form-label">SMS Onayı:</label>
                                <select name="custom[sms_verify]" data-minimum-results-for-search="Infinity" class="form-select form-select-solid" data-control="select2" >
                                    <option selected >Seçiniz...</option>
                                    <option value="true">Evet</option>
                                    <option value="false">Hayır</option>
                                </select>
                            </div>

                            <div class="form-group mt-5">
                                <label class="form-label">Müşteri Telefonu:</label>
                                <input name="custom[customer_phone]" type="text" class="form-control"/>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            @if(tr_user_permission_check(null, "add_sale_access") == true)
                <div class="modal fade" id="satis_ekle">
                    <div class="modal-dialog">
                        <form id="satis_ekle_form" class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Satış Ekle</h3>

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                    <span class="fa fa-xmark"></span>
                                </div>
                                <!--end::Close-->
                            </div>

                            <div class="modal-body">
                                @csrf

                                <div class="form-group mt-5">
                                    <label class="required form-label">Ürün:</label>
                                    <select name="product_id" class="form-select form-select-solid" data-control="select2" >
                                        <option selected disabled>Seçiniz...</option>
                                        @php $products = \App\Models\Product::query()->where(['status' => 'active', 'project_id' => tr_user_details(Auth::user()->id, 'project_id')])->get(); @endphp
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }} ({{ $product->title }})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-5">
                                    <label class="required form-label">Adet:</label>
                                    <select name="quantity" class="form-select form-select-solid" data-control="select2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>

                                <div class="form-group mt-5">
                                    <label class="form-label" >IBAN Onayı:</label>
                                    <select name="custom[iban_verify]" data-minimum-results-for-search="Infinity" class="form-select form-select-solid" data-control="select2" >
                                        <option selected >Seçiniz...</option>
                                        <option value="true">Evet</option>
                                        <option value="false">Hayır</option>
                                    </select>
                                </div>

                                <div class="form-group mt-5" >
                                    <label class="form-label">SMS Onayı:</label>
                                    <select name="custom[sms_verify]" data-minimum-results-for-search="Infinity" class="form-select form-select-solid" data-control="select2" >
                                        <option selected >Seçiniz...</option>
                                        <option value="true">Evet</option>
                                        <option value="false">Hayır</option>
                                    </select>
                                </div>

                                <div class="form-group mt-5">
                                    <label class="form-label">Müşteri Telefonu:</label>
                                    <input name="custom[customer_phone]" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        @endif
    @endif
@endforeach

<div class="modal fade" id="mola">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Mola</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="fa fa-xmark"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div style="text-align: center;font-size:30px;" id="display">00:00:00</div>
                <div>
                    <button id="start_timer" class="m-auto btn btn-success">Başlat</button>
                    <button id="stop_timer" class="m-auto btn btn-danger d-none">Durdur</button>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

<div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
    @php $perms = tr_group_permission(tr_user_details(null, 'group_id')) @endphp
    @foreach(json_decode($perms, true) as $key2 => $value2)
        @if($key2 == "add_sale_access")
            @if($value2 == true)
                <button data-bs-toggle="modal" data-bs-target="#satis_ekle" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0">Satış Ekle</button>
            @else
                @if(tr_user_permission_check(null, "add_sale_access") == true)
                    <button data-bs-toggle="modal" data-bs-target="#satis_ekle" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0">Satış Ekle</button>
                @endif
            @endif
        @endif
    @endforeach
    <button data-bs-toggle="modal" data-bs-target="#mola" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0">Mola</button>
</div>
