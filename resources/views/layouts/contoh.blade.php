
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('style/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('style/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('style/assets/css/paper-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('style/assets/css/demo.css')}}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('style/assets/css/themify-icons.css')}}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="success">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    {{-- sidebar --}}
    <div class="sidebar-wrapper">
        <div class="logo " >
            <div class="nav-item d-flex justify-content-center">
                <img src="{{ asset('/img/k1.jpg')}}" style="width: 100px; height: 100px;" alt="">
            </div>
            <div class="card">
                <p class="card-text">CUT PUTRI EFRINA</p>
            </div>
        </div>
    
        <ul class="nav">
            <li  class="@yield('active1')">
                <a href="dasboard">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="@yield('active2')">
                <a href="kelas">
                    <i class="ti-blackboard"></i>
                    <p>Kelas</p>
                </a>
            </li>
            <li class="@yield('active3')">
                <a href="guru">
                    <i class="ti-view-list-alt"></i>
                    <p>Guru</p>
                </a>
            </li>
            <li class="@yield('active4')">
                <a href="pengumuman">
                    <i class="ti-announcement"></i>
                    <p>Pengumuman</p>
                </a>
            </li>
            <li class="@yield('active5')">
                <a href="siswa">
                    <i class="ti-pencil-alt2"></i>
                    <p>Data Siswa</p>
                </a>
            </li>
            <li class="@yield('active6')">
                <a href="add admin">
                    <i class="ti-plus"></i>
                    <p>Add Admin</p>
                </a>
            </li>
            <li class="@yield('active7')">
                <a href="login">
                    <i class="ti-shift-left"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('nama_hal')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

{{-- card konten --}}
        @yield('card')

{{-- table  --}}
		@yield('table')
			

                

{{-- footer --}}
        <footer class="footer">
            <div class="container-fluid ">
                <div class="copyright pull-center">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Cut Putri Efrina</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('style/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{ asset('style/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('style/assets/js/bootstrap-checkbox-radio.js')}}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('style/assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('style/assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('style/assets/js/paper-dashboard.js')}}"></script>

	

	

</html>
