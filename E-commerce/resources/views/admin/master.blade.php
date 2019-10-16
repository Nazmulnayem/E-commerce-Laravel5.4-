     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('public/frontEnd/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="{{asset('public/frontEnd/css/style.css')}}" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="{{asset('public/frontEnd/css/font-awesome.css')}}" rel="stylesheet"> 
        <!-- jQuery -->
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
        <!-- lined-icons -->
        <link rel="stylesheet" href="{{asset('public/frontEnd/css/icon-font.min.css')}}" type='text/css' />
        <!-- //lined-icons -->
        <script src="{{asset('public/frontEnd/js/jquery-1.10.2.min.js')}}"></script>
        
        <script src="{{asset('public/frontEnd/js/amcharts.js')}}"></script>	
        <script src="{{asset('public/frontEnd/js/serial.js')}}"></script>	
        <script src="{{asset('public/frontEnd/js/light.js')}}"></script>	
        <script src="{{asset('public/frontEnd/js/radar.js')}}"></script>	
        <link href="{{asset('public/frontEnd/css/barChart.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('public/frontEnd/css/fabochart.css')}}" rel='stylesheet' type='text/css' />
        <!--clock init-->
        <script src="{{asset('public/frontEnd/js/css3clock.js')}}"></script>
        <!--Easy Pie Chart-->
        <!--skycons-icons-->
        <script src="{{asset('public/frontEnd/js/skycons.js')}}"></script>

        <script src="{{asset('public/frontEnd/js/jquery.easydropdown.js')}}"></script>

        <!--//skycons-icons-->
    </head> 
    <body>
        @yield('content')
        @yield('mainContent')
        
            <div class="sidebar-menu">
                <header class="logo">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="{{ url('/home')}}"> <span id="logo"> <h1>masterring and authentication</h1></span> 
                    <!--<img id="logo" src="" alt="Logo"/>--> 
                    </a> 
                </header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                <!--/down-->
                
                @include('admin.includes.menu')
            </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                } else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <link rel="stylesheet" href="css/vroom.css">
        <script type="text/javascript" src="{{asset('public/frontEnd/js/vroom.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontEnd/js/TweenLite.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontEnd/js/CSSPlugin.min.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('public/frontEnd/js/scripts.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('public/frontEnd/js/bootstrap.min.js')}}"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
         
    </body>
</html>