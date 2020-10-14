<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('asset-admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('asset-admin/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset-admin/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('asset-admin/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      
        {{-- sidebar --}}
            @include('admin.layouts.sidebar')
        {{-- /sidebar --}}

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        
        {{-- header --}}
        @include('admin.layouts.header')
        {{-- /header --}}

        <!-- partial -->
        <div class="main-panel">
            @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          {{-- footer --}}
            @include('admin.layouts.footer')
          {{-- /footer --}}
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('asset-admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('asset-admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('asset-admin/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('asset-admin/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('asset-admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('asset-admin/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('asset-admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('asset-admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('asset-admin/js/misc.js')}}"></script>
    <script src="{{asset('asset-admin/js/settings.js')}}"></script>
    <script src="{{asset('asset-admin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('asset-admin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    @stack('js_after')
  </body>
</html>