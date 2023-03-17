<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield("titleBack")
    </title>
    <link rel = "icon" href ="{{asset("Front Assets/Icons/Logo/logo.svg")}}" type = "image/x-icon">
{{--    <link rel="stylesheet" href="{{asset("bootstrap/scss/bootstrap.scss")}}">--}}
    <link rel="stylesheet" href="{{asset("build/assets/app-09b264ce.css")}}">
    <link rel="stylesheet" href="{{asset("build/assets/app-75b2c64a.css")}}">
{{--    @vite('resources/css/app.css')--}}
{{--    @vite("resources/sass/app.scss")--}}
    @yield("css")
</head>
<body class="bg-black">
<div class="menu">
    <nav class="">
        <ul class="">
            <li class=""><a target="_blank" class= "text-capitalize text-decoration-none" href="{{route("home.index")}}">Persian Website</a></li>
            <li class=""><a target="_blank" class= "text-capitalize text-decoration-none" href="{{route("homeEn.index")}}">English Website</a></li>
            <li class=""><a class= "text-capitalize text-decoration-none" href="{{route("panel.index")}}">admin panel</a></li>
            <li>
                {!! Form::open(["route"=>"logout","method"=>"POST","files"=>true]) !!}
                {!! Form::submit("LogOut",["class"=>"btn text-danger"]) !!}
                {!! Form::close() !!}
            </li>
        </ul>
    </nav>
</div>
@yield("contentBack")
{{--@vite('resources/js/app.js')--}}
{{--<script type="module" src="{{asset("bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>--}}
<script type="module" src="{{asset("build/assets/app-e25bc80d.js")}}"></script>
@yield("js")
</body>
</html>
