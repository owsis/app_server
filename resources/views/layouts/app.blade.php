<html lang="en">

<!-- begin::Head -->
<head>
  <meta charset="utf-8" />
  <title>Smile In Properti</title>
  <meta name="description" content="Latest updates and statistic charts">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
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
  <!-- Scripts -->
  <script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
  </script>

  <!--end::Web font -->

  <!--begin::Page Vendors Styles -->
  @yield('vendor-style')

  <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

  <!--end::Page Vendors Styles -->

  <!--begin::Base Styles -->
  <link href="{{ URL::asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

  <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
  <link href="{{URL::asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

  <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

  <!--end::Base Styles -->
  <link rel="shortcut icon" href="{{URL::asset('images/icon-biru.png')}}" />

</head>
<!-- end::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

  <!-- begin:: Page -->
  <div class="m-grid m-grid--hor m-grid--root m-page">
    @yield('header')
    @yield('content')
  </div>
  <!-- end:: Page -->

  <!-- begin::Quick Sidebar -->


  <!-- end::Quick Sidebar -->

  <!-- begin::Scroll Top -->


  <!-- end::Scroll Top -->

  <!-- begin::Quick Nav -->


  <!-- begin::Quick Nav -->

  <!--begin::Base Scripts -->
  <script src="{{URL::asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

  <!--end::Base Scripts -->

  <!--begin::Page Vendors Scripts -->
  @yield('vendor-script')
  <!--end::Page Vendors Scripts -->

  <!--begin::Page Snippets -->
  @yield('page-snippets')
  <!--end::Page Snippets -->

  <!-- end::Head -->


</body>
</html>
