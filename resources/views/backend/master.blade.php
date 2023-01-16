<!DOCTYPE html>
<html lang="en">

<head>
  @include('backend.partials.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('backend.partials.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('backend.partials.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('backend.partials.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('backend/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('backend/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/js/main.js')}}"></script>

</body>

</html>