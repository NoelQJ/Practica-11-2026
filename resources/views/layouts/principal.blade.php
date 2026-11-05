<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spark Admin - Premium Bootstrap 5 Admin Dashboard Template</title>

  <!-- SEO Optimization -->
  <meta name="description" content="Spark Admin - Premium Bootstrap 5 Admin Dashboard Template">
  <meta name="author" content="Spark Admin Team">
  <meta name="csrf-token" content="{{ csrf_token()}}">

  @vite([
                    'resources/images/favicon.ico', 'resources/libs/bootstrap/css/bootstrap.min.css',
                    'resources/libs/bootstrap-icons/bootstrap-icons.css', 'resources/libs/apexcharts/apexcharts.css',
                    'resources/libs/flatpickr/flatpickr.min.css', 'resources/css/main.css',
                    'resources/libs/bootstrap/js/bootstrap.bundle.min.js', 'resources/libs/apexcharts/apexcharts.min.js',
                    'resources/libs/flatpickr/flatpickr.min.js', 'resources/js/dashboard.js','resources/js/jquery4.js'
  ])
</head>

<body>

  <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green sticky navigation
         ========================================== -->
@include ('layouts.sidebar');
  <!-- ==========================================
         END: Sidebar Component
         ========================================== -->
  <!-- ==========================================
         START: Main Content Area
         ========================================== -->
  <div class="main-wrapper">

    <!-- START: Top Navbar Component -->
@include ('layouts.navbar');
    <!-- END: Top Navbar Component -->

    <!-- START: Dashboard Header Banner -->
    <div class="page-header">
      <div>
        <h1 class="page-title">Dashboard</h1>
      </div>

    </div>
@yield('content');



    <!-- END: Dashboard Header Banner -->


    <!-- START: Footer Component -->
@include ('layouts.footer');
    <!-- END: Footer Component -->

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

</body>

</html>


