<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Metronic | Scrollable Examples</title>
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
    <link href="{{ URL::asset('assets/demo/default/media/img/logo/favicon.ico') }}"  />
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
                        <h3 class="m-subheader__title m-subheader__title--separator">DATA HARGA UNIT</h3>
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
                                    <span class="m-nav__link-text">Harga</span>
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
                  <i class="flaticon-close"></i>
                  <span></span>
                </div>
                <div class="m-alert__text">
                    <strong>Sukses!</strong> Data telah dihapus.
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

                                <li class="m-portlet__nav-item"></li>
                                <li class="m-portlet__nav-item">
                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
                                <th>No. Booking</th>
                                <th>Nama Konsumen</th>
                                <th>Tlp. Konsumen</th>
                                <th>Kode Unit</th>
                                <th>Harga Unit</th>
                                <th>UTJ</th>
                                <th>DP</th>
                                <th>KPR</th>
                                <th>CASH</th>
                                <th>Marketing</th>
                                <th>Status UTJ</th>
                                <th>Status Unit</th>
                                <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->booking_no }}</td>
                                <td>{{ $data->name_customer }}</td>
                                <td>{{ $data->phone_customer }}</td>
                                <td>{{ $data->code_unit }}</td>
                                <td>Rp. {{ number_format($data->price_unit) }}</td>
                                <td>Rp. {{ number_format($data->first_payment) }}</td>
                                <td>Rp. {{ number_format($data->dp) }}</td>
                                <td>Rp. {{ number_format($data->kpr) }}</td>
                                <td>Rp. {{ number_format($data->cash) }}</td>
                                <td>{{ $data->referral_from }}</td>
                                <td>{{ $data->status_fp }}</td>
                                <td>{{ $data->status }}</td>
                                <td nowrap>
                                  <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                      <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                      <button class="dropdown-item" type="button" data-toggle="modal" data-target="#m_modal_{{ $data->id }}"><i class="la la-trash"></i> Delete Data</button>
                                      <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                  </span>
                                  <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                    <i class="la la-edit"></i>
                                  </a>
                                </td>
                            </tr>

                            <!-- BEGIN MODAL -->
                            <div class="modal fade" id="m_modal_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Kode Booking </p><p class="lead m--font-primary">{{ $data->booking_no }}</p><br>
                                    <p>Nama Konsumen </p><p class="lead m--font-primary">{{ $data->name_customer }}</p><br>
                                    <p>Unit Dipesan </p><p class="lead m--font-primary">{{ $data->code_unit }}</p><br>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <form method="POST" action="{{ route('booking.del', $data->id ) }}">
                                      {{ csrf_field() }}
                                      <button type="submit" class="btn btn-primary delete-id" value="{{ $data->id }}">Ya</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- END MODAL -->

                            @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>#</th>
                              <th>No. Booking</th>
                              <th>Nama Konsumen</th>
                              <th>Tlp. Konsumen</th>
                              <th>Kode Unit</th>
                              <th class="sumFooter">Harga Unit</th>
                              <th class="sumFooter">UTJ</th>
                              <th class="sumFooter">DP</th>
                              <th class="sumFooter">KPR</th>
                              <th class="sumFooter">CASH</th>
                              <th>Marketing</th>
                              <th>Status UTJ</th>
                              <th>Status Unit</th>
                              <th>Aksi</th>
                            </tr>
                          </tfoot>
                      </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->

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
      scrollX: true,
      footerCallback: function(a, b) {
          var o = this.api(),
              l = function(a) {
                  return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
              },
              u = o.column(5).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0),
              i = o.column(5, {
                  page: "current"
              }).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0);
          $(o.column(5).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));

          var o = this.api(),
              l = function(a) {
                  return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
              },
              u = o.column(6).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0),
              i = o.column(6, {
                  page: "current"
              }).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0);
          $(o.column(6).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));

          var o = this.api(),
              l = function(a) {
                  return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
              },
              u = o.column(7).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0),
              i = o.column(7, {
                  page: "current"
              }).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0);
          $(o.column(7).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));

          var o = this.api(),
              l = function(a) {
                  return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
              },
              u = o.column(8).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0),
              i = o.column(8, {
                  page: "current"
              }).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0);
          $(o.column(8).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));

          var o = this.api(),
              l = function(a) {
                  return "string" == typeof a ? 1 * a.replace(/[\Rp.,]/g, "") : "number" == typeof a ? a : 0
              },
              u = o.column(9).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0),
              i = o.column(9, {
                  page: "current"
              }).data().reduce(function(a, b) {
                  return l(a) + l(b)
              }, 0);
          $(o.column(9).footer()).html("Rp. " + mUtil.numberString(i.toFixed(0)));
      },
    });

});
</script>

<!--end::Page Resources -->
</body>

<!-- end::Body -->
</html>
