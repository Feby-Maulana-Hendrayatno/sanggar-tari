<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PROYEK2</title>

  @include("layouts.partials_admin.css.style_css")

  @yield("ajax_calendar_css")

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake rounded-circle" src="/template/dist/img/SanggarTari.png" alt="AdminLTELogo" height="200" width="200">
    </div>

    <!-- Navbar -->
    @include("layouts.partials_admin.navbar.navbar_header")
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include("layouts.partials_admin.navbar.navbar_admin")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="">
          <div class="row mb-2">
            <div class="col-sm-6 ">
              <h1 class="m-0 pl-4">  @yield("title")</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @yield("content")
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline-block">
      <b>Sanggar Tari Melati</b> Kelompok1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include("layouts.partials_admin.js.style_js")

@yield("ajax_calendar_js")

</body>
</html>