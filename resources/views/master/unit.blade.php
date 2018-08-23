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
                        <h3 class="m-subheader__title m-subheader__title--separator">DATA UNIT</h3>
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
                                    <span class="m-nav__link-text">Unit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">

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
                                    <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>Tambah Data</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item"></li>
                                <li class="m-portlet__nav-item">
                                    <!-- <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">Quick Actions</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-plus"></i>
                                                                <span class="m-nav__link-text">Tambah Data</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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
                                <th>Cluster</th>
                                <th>Unit Id</th>
                                <th>Blok</th>
                                <th>No</th>
                                <th>LT (m2)</th>
                                <th>LB (m2)</th>
                                <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($unit as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->name_unit }}</td>
                                <td>{{ $data->code_unit }}</td>
                                <td>{{ $data->block_unit }}</td>
                                <td>{{ $data->no_unit }}</td>
                                <td>{{ $data->lt_unit }}</td>
                                <td>{{ $data->lb_unit }}</td>
                                <td>{{ $data->status_unit }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>Cluster</th>
                            <th>Unit Id</th>
                            <th>Blok</th>
                            <th>No</th>
                            <th>LT (m2)</th>
                            <th>LB (m2)</th>
                            <th>Status</th>
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
      columnDefs: [
        {
          targets: 7,
          render: function(s) {
            if (s === 'available') {
              return '<span class="m-badge m-badge--success m-badge--wide">AVAILABLE</span>'
            } else if (s === 'close') {
              return '<span class="m-badge m-badge--warning m-badge--wide">CLOSE</span>'
            } else if (s === 'sold') {
              return '<span class="m-badge m-badge--danger m-badge--wide">SOLD</span>'
            } else if (s === 'order') {
              return '<span class="m-badge m-badge--info m-badge--wide">ORDER</span>'
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
