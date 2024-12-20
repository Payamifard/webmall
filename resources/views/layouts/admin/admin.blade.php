<!doctype html>
<html lang="FA-IR" dir="rtl">
<head>
    <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


  <link rel="stylesheet" href="{{asset('web/admin/assets/font/bootstrap-icon/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{asset('web/admin/assets/css/bootstrap.rtl.min.css') }}">
  <link rel="stylesheet" href="{{asset('web/admin/assets/css/style.css') }}">

  <!-- plugins:css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">


  <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />

{{-- !!!!! --}}



    @livewireStyles

</head>
<body>

    <div class="container-scroller">

        @include('layouts.inc.admin.navbar')


        <div class="container-fluid page-body-wrapper">

            @include('layouts.inc.admin.sidebar')


            <div class="main-panel">

                <div class="content-wrapper">

                    @yield('content')

                </div>

            </div>

        </div>

    </div>



 <!-- plugins:js -->
 <script src="{{ asset('admin/vendors/base/vendor.bundle.base.js') }}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page-->
 <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
 <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
 <script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
 <!-- End plugin js for this page-->
 <!-- inject:js -->
 <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
 <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
 <script src="{{ asset('admin/js/template.js') }}"></script>
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="{{ asset('admin/js/dashboard.js') }}"></script>
 <script src="{{ asset('admin/js/data-table.js') }}"></script>
 <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
 <script src="{{ asset('admin/js/dataTables.bootstrap4.js') }}"></script>
 <!-- End custom js for this page-->

{{-- !!!!!! --}}

    @yield('scripts')
    @livewireScripts
    @stack('script')
</body>
</html>

