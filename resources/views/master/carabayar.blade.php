<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Smile In Properti</title>
    <meta name="description" content="Scrollable datatables examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Page Vendors Styles -->
    <link href="{{ URL::asset('assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->

    <!--begin::Base Styles -->
    <link href="{{ URL::asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="{{ URL::asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ URL::asset('images/icon-biru.png') }}" />

</head>
<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- ini awal header -->
    @extends('layouts.header')

<!-- ini awal body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

    @extends('layouts.menu')
    <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">DATA CARA BAYAR</h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="#" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Master</span>
                                </a>
                            </li>
                            <li class="m-nav__separator">-</li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                    <span class="m-nav__link-text">Cara Bayar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
              @if(session()->has('msg'))
              <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
                <div class="m-alert__icon">
                  <i class="flaticon-interface-7"></i>
                  <span></span>
                </div>
                <div class="m-alert__text">
                    <strong>Sukses!</strong> {{ session()->get('msg') }}
                </div>
                <div class="m-alert__close">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  </button>
                </div>
              </div>
              @endif
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Master Unit
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#m_modal_add">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>Tambah Data</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                      <!--begin: Datatable -->
                      <div id="table-1"></div>
                      <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                          <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipe Unit</th>
                                <th>Kode Pembayaran</th>
                                <th>Nama Pembayaran</th>
                                <th>DP</th>
                                <th>KPR</th>
                                <th>Diskon</th>
                                <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($carabayar as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->type_unit }}</td>
                                <td>{{ $data->code_payment }}</td>
                                <td>{{ $data->name_payment }}</td>
                                <td>{{ $data->dp }}</td>
                                <td>{{ $data->kpr }}</td>
                                <td>{{ $data->disc }}</td>
                                <td nowrap>
                                  {!! Form::open(['url' => '/carabayar/del/' . $data->id, 'method' => 'delete']) !!}
                                  <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <button class="dropdown-item" type="button" data-toggle="modal" data-target="#m_modal_{{ $data->id }}"><i class="la la-edit"></i> Edit Data</button>
                                      <button class="dropdown-item" type="submit"><i class="la la-trash"></i> Delete Data</button>
                                    </div>
                                  </span>
                                  {!! Form::close() !!}
                                </td>
                            </tr>
                            <!-- BEGIN MODAL -->
                            <div class="modal fade" id="m_modal_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  {!! Form::open(['url' => '/carabayar/update/' . $data->id, 'method' => 'put']) !!}

                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">

                                        <div class="form-group m-form__group">
                                            <label>Tipe Unit</label>
                                            <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                                <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Tipe" name="type_unit" autocomplete="off" value="{{ $data->type_unit }}" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la  la-h-square"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label>Kode Pembayaran</label>
                                            <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                                <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Kode" name="code_payment" autocomplete="off" value="{{ $data->code_payment }}" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-info-circle"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label>Nama Pembayaran</label>
                                            <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                                <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Nama" name="name_payment" autocomplete="off" value="{{ $data->name_payment }}" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-adn"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label>DP | hitungan dalam persen (%)</label>
                                            <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                                <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="DP" name="dp" autocomplete="off" value="{{ $data->dp }}" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tags"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label>KPR | hitungan dalam persen (%)</label>
                                            <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                                <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="KPR" name="kpr" autocomplete="off" value="{{ $data->kpr }}" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tags"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <label>Diskon | hitungan dalam persen (%)</label>
                                            <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                                <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Diskon" name="disc" autocomplete="off" value="{{ $data->disc }}" required>
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tags"></i></span></span>
                                            </div>
                                        </div>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                      </div>
                                  {!! Form::close() !!}
                                </div>
                              </div>
                            </div>
                            <!-- END MODAL -->
                            @endforeach
                          </tbody>
                      </table>
                    </div>
                </div>

                <!-- END EXAMPLE TABLE PORTLET-->

                <!-- BEGIN MODAL -->
                <div class="modal fade" id="m_modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      {!! Form::open(['url' => '/carabayar/post', 'method' => 'post']) !!}

                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <div class="form-group m-form__group">
                                <label>Tipe Unit</label>
                                <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                    <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Tipe" name="type_unit" autocomplete="off" required>
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la  la-h-square"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label>Kode Pembayaran</label>
                                <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                    <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Kode" name="code_payment" autocomplete="off" required>
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-info-circle"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label>Nama Pembayaran</label>
                                <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                    <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Nama" name="name_payment" autocomplete="off" required>
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-adn"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label>DP | hitungan dalam persen (%)</label>
                                <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                    <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="DP" name="dp" autocomplete="off" required>
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tags"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label>KPR | hitungan dalam persen (%)</label>
                                <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                    <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="KPR" name="kpr" autocomplete="off" required>
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tags"></i></span></span>
                                </div>
                            </div>
                            <div class="form-group m-form__group">
                                <label>Diskon | hitungan dalam persen (%)</label>
                                <div class="m-input-icon m-input-icon--left m-input-icon--right">
                                    <input type="text" class="form-control m-input m-input--pill m-input--air" placeholder="Diskon" name="disc" autocomplete="off" required>
                                    <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-tags"></i></span></span>
                                </div>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
                <!-- END MODAL -->
            </div>

        </div>
    </div>
</div>
<!-- begin::Quick Nav -->

<!--begin::Base Scripts -->
<script src="{{ URL::asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Base Scripts -->

<!--begin::Page Vendors Scripts -->
<script src="{{ URL::asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Resources -->
<script type="text/javascript">
$(document).ready( function () {
    $('#m_table_1').DataTable({
      columnDefs: [
        {
          targets: 3,
          render: function(s) {
            if (s === 'CASH') {
              return '<span class="m-badge m-badge--danger m-badge--wide">CASH</span>'
            } else if (s === 'KPR') {
              return '<span class="m-badge m-badge--primary m-badge--wide">KPR</span>'
            } else if (s === 'BERTAHAP 12x') {
              return '<span class="m-badge m-badge--success m-badge--wide">BERTAHAP 12x</span>'
            } else if (s === 'BERTAHAP 24x') {
              return '<span class="m-badge m-badge--warning m-badge--wide">BERTAHAP 24x</span>'
            } else if (s === 'BERTAHAP 36x') {
              return '<span class="m-badge m-badge--info m-badge--wide">BERTAHAP 36x</span>'
            }
          }
        }
      ]
    });
});
</script>

<!--end::Page Resources -->
</body>

<!-- end::Body -->
</html>
