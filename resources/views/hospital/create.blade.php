
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>لوحة تحكم الموقع</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/css/adminlte.css">
        <link rel="stylesheet" href="/css/adminlte.min.css">
        <link rel="stylesheet" href="/css/custom.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Bootstrap 4 RTL -->
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
        <link rel="icon" href="{{ URL::asset('/public/img/AdminLTELogo.png') }}">

    </head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- SEARCH FORM -->


            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto-navbav">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="bi bi-chat"></i>
                        <span class="badge badge-danger navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">المدير</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                      <li class="nav-item">
                        <a href="{{route('db.index')}}" class="nav-link">
                          <i class="bi bi-house"></i>
                          <p>
                            الرئيـــــسية
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('hospitals.index')}}" class="nav-link  active">
                            <i class="bi bi-hospital"></i>
                            <p>
                            المستشفيـــــات

                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('Companies.index')}}" class="nav-link">
                            <i class="bi bi-building"></i>
                          <p>
                            الشركـــــات الطبيـــــة

                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('doctors.index')}}" class="nav-link ">
                            <i class="bi bi-person"></i>
                            <p>
                           الأطبــــــاء
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route ('msg.index') }}" class="nav-link ">
                          <i class="bi bi-chat-right"></i>
                            <p>
                              الرسائل
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route ('signout') }}" class="nav-link ">
                          <i class="bi bi-box-arrow-right"></i>
                          <p>
                            تسجيـــــل خروج
                          </p>
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <!-- <div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">
                                        <i class="fas fa-plus"></i>
                                        <button class="btn btn-success">اضـــــافة مستشفى</button>
                                    </h3>

                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <form action="{{route('hospitals.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                {{-- <div class="form-group col">
                                                    <label for="hospitalCode">رمز المستشفى</label>
                                                    <input type="text" name="hospital_code" class="form-control" id="hospitalCode" aria-describedby="emailHelp" placeholder="ادخل رمز المستشفى">
                                                </div> --}}
                                                <div class="form-group col">
                                                    <label for="hospitalName">اسم المستشفى</label>
                                                    <input type="text" name="hospital_name" class="form-control" id="hospitalName"
                                                        placeholder="اسم المستشفى">
                                                        <span class="text-red">    @error('hospital_name') <strong>{{ $message }}</strong> @enderror </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="hospitalName">شعار المستشفى </label>
                                                    <input name="photo" type="file" class="form-control" placeholder="شعار المستشفى ">
                                                    <span class="text-red">    @error('photo')    {{$message}} @enderror </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="hospitalName">العنوان </label>
                                                    <select name="hospital_address"  class="form-control"  id="hospital_address">
                                                        <option value="الخرطوم" >الخرطوم</option>
                                                        <option value="بحري" >بحري</option>
                                                        <option value="امدرمان" >امدرمان</option>
                                                    </select>                                                    <span class="text-red">    @error('hospital_address') <strong>{{ $message }}</strong> @enderror </span>
                                                </div>
                                                <div class="col">
                                                    <label for="hospitalName"> الهاتف</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="الهاتف ">
                                                    <span class="text-red">    @error('phone')<strong>{{ $message }}</strong>@enderror </span>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="password"> كلمة المرور</label>
                                                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور"  >
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                <div class="col">
                                                    <label for="password"> تاكيد كلمة المرور</label>
                                                    <input id="password" type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror " placeholder="تاكيد كلمة المرور" >
                                                </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col">
                                                    <button class="btn btn-primary">اضـــــافة <i class="bi bi-plus-circle"></i></button>
                                                </div>
                                                <div class="col">
                                                    <a href="{{route('hospitals.index')}}" class="btn btn-danger">الغاء <i class="bi bi-x-lg"></i></a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- DIRECT CHAT -->

                            <!--/.direct-chat -->

                            <!-- TO DO List -->

                            <!-- /.card -->
                        </section>

                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 rtl -->
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>
