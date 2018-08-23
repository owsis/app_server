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
                            <h3 class="m-subheader__title ">Dashboard</h3>
                        </div>
                        <div>
                            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                                <span class="m-subheader__daterange-label">
                                    <span class="m-subheader__daterange-title"></span>
                                    <span class="m-subheader__daterange-date m--font-brand"></span>
                                </span>
                                <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                    <i class="la la-angle-down"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">

                    <!--begin:: Widgets/Stats-->
                    <div class="m-portlet ">
                        <div class="m-portlet__body  m-portlet__body--no-padding">
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                <div class="col-md-12 col-lg-6 col-xl-3">
                                    <!--begin::Total Profit-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h4 class="m-widget24__title">
                                                Total Frofit
                                            </h4><br>
                                            <span class="m-widget24__desc">
                                                All Customs Value
                                            </span>
                                            <span class="m-widget24__stats m--font-brand">
                                                $18M
                                            </span>
                                            <div class="m--space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="m-widget24__change">
                                                Change
                                            </span>
                                            <span class="m-widget24__number">
                                                78%
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Total Profit-->
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-3">
                                    <!--begin::New Feedbacks-->
                                    <div class="m-widget24">
                                       <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            New Feedbacks
                                        </h4><br>
                                        <span class="m-widget24__desc">
                                            Customer Review
                                        </span>
                                        <span class="m-widget24__stats m--font-info">
                                            1349
                                        </span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="m-widget24__change">
                                            Change
                                        </span>
                                        <span class="m-widget24__number">
                                            84%
                                        </span>
                                    </div>
                                </div>
                                <!--end::New Feedbacks-->
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-3">
                                    <!--begin::New Orders-->
                                    <div class="m-widget24">
                                        <div class="m-widget24__item">
                                            <h4 class="m-widget24__title">
                                                New Orders
                                            </h4><br>
                                            <span class="m-widget24__desc">
                                                Fresh Order Amount
                                            </span>
                                            <span class="m-widget24__stats m--font-danger">
                                                567
                                            </span>
                                            <div class="m--space-10"></div>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="m-widget24__change">
                                                Change
                                            </span>
                                            <span class="m-widget24__number">
                                                69%
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::New Orders-->
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-3">
                                    <!--begin::New Users-->
                                    <div class="m-widget24">
                                       <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            New Users
                                        </h4><br>
                                        <span class="m-widget24__desc">
                                            Joined New User
                                        </span>
                                        <span class="m-widget24__stats m--font-success">
                                            276
                                        </span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="m-widget24__change">
                                            Change
                                        </span>
                                        <span class="m-widget24__number">
                                            90%
                                        </span>
                                    </div>
                                </div>
                                <!--end::New Users-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Stats-->
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
