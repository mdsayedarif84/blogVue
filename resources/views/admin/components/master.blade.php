<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') </title>
  @vite(['resources/sass/app.scss','resources/js/app.js']);
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
  <div class="wrapper" >
    <!-- header -->
    @include('admin.components.header')

    <!-- Main Sidebar Container -->
    @include('admin.components.sidebar')
    <div class="content-wrapper" id="content">
      <!-- Content Header (Page header) -->
      @yield('body')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.components.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
</body>
</html>
