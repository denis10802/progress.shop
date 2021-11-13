<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/admin/dist/css/admin.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Админ - Панель</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('homeAdmin')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Главная
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Каталог
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('product.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Все товары</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('product.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Добавить товары</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("category.index") }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Категории</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('category.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Добавить категорию</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('specification')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Спецификации</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('description')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Описания товаров</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
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
<script src="/admin/plugins/jquery/jquery.min.js"></script>
{{--<!-- jQuery UI 1.11.4 -->--}}
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
{{--<!-- JQVMap -->--}}
{{--<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
<!-- jQuery Knob Chart -->
{{--<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>--}}
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<script src="/admin/admin.js"></script>

<script>
    var preloaderFile ='<img class="preloader" src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif">';
    var removeFile = '<button onclick="delFileFromInput()" class="remove"></button>';

    function readURL(input) {
        if (input.files && input.files[0]) {
            var mass = ["image/jpeg", "image/jpg", "image/png", "image/gif", "application/pdf", "image/bmp"];
            var nt = document.createElement('input');
            nt.setAttribute("type", "file");
            var index = $(input).closest('.wrapper').index();
            nt.setAttribute("name", 'files['+index+'][]');
            if($(input).data('name')){
                nt.setAttribute("name", $(input).attr('name'));
                nt.setAttribute("data-name", true);
            }
            nt.setAttribute("accept", "image/jpeg,image/png,image/gif");
            var reader = new FileReader();
            reader.onload = function (e) {
                var div = document.createElement('div');
                $(div).addClass('uploaded');
                var img = document.createElement('img');
                var typec = input.files[0].type;
                var size = input.files[0].size;
                $(img).attr('src', e.target.result);
                function acceptung() {
                    $(div).append(preloaderFile);
                    $(div).append(img);
                    $(div).append(removeFile);
                    $(input).closest('.wrapper').find('.preview').append(div);
                    $(input).closest('label').prepend(nt);
                    $(div).append(input);
                    setTimeout(function() {
                        $(div).find('.preloader').remove();
                    }, 500)

                }
                function declinetung() {
                    $(input).closest('label').prepend(nt);
                    $(input).remove();
                }
                if(typec == "application/pdf"){
                    if(size > 11000000){
                        declinetung();
                        alert('max size pdf 10Mb');
                    }else{
                        $(img).attr('src', 'images/pdff.jpg');
                        acceptung();
                    }
                }else if($.inArray(typec, mass) == -1 ){
                    declinetung();
                }else if(size > 6100000){
                    declinetung();
                    alert('max size image 6Mb');
                }else{
                    acceptung();
                }
            }
            reader.readAsDataURL(input.files[0]);

        }
    }
    function delFileFromInput() {
        $(document).on('click', '.remove', function () {
            $(this).closest('.uploaded').remove();
        });
    }

    $(document).on('change', '.file input',function(){
        readURL(this);
    });

</script>


    </body>
</html>
