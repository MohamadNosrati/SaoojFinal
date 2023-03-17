<!doctype html>
<html id="html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$seo->title}}</title>
    <meta name="description" content="{{$seo->description}}">
    <meta name="keywords" content="{{$seo->keywords}}">
    <meta name="author" content="{{$seo->author}}">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="{{$seo->title}}"/>
    <meta property="og:site_name" content="Sarooj Architecture Company"/>
    <meta property="og:description" content="{{$seo->description}}"/>
    <meta property="og:url" content="{{env("APP_URL")}}"/>
    <meta property="og:image" content="{{asset("images/logo/".$sarooj->logo)}}"/>
    <link rel = "icon" href ="{{asset("Front Assets/Icons/Logo/logo.svg")}}" type = "image/x-icon">
    <link rel="stylesheet" href="{{asset("Front Assets/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("Front Assets/css/En/MainEn.css")}}">
    <link rel="stylesheet" href="{{asset("Front Assets/swiper/swiper-bundle.min.css")}}">
    <link rel="stylesheet" href="{{asset("jquery-toast-plugin-master/dist/jquery.toast.min.css")}}">
    <link rel="stylesheet" href="{{asset("build/assets/pagination-e5463050.css")}}">
{{--    @vite("resources/sass/pagination/pagination.scss")--}}
</head>
<body  class="bg-[#f3f3f3] dark:bg-[#0e0e0e]">
<section class="main">
    <!-- ***** start Menu ***** -->
    <header class="MenuBgLight dark:menuBgDark">
        <div class="logo">
            <div class="hamburger">
                <svg id="hamburgerEn" class="svgOption dark:svgOptionDark hover:svgOptionHover dark:hover:svgOptionHover" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 0V2.85714H0.23077V0H21ZM21 8.57143V11.4286H0.23077V8.57143H21ZM21 17.1429V20H0.23077V17.1429H21Z" />
                </svg>
            </div>
            <img src="{{asset("Front Assets/Icons/Logo/logo.svg")}}" alt="Logo">
        </div>
        <nav class="dk">
            <ul>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}">Home</a></li>
                <li>
                    <a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("home-en.projects")}}">
                        projects
                    </a>
                    <svg id="pjs" class="svgOption dark:svgOptionDark hover:svgOptionHover dark:hover:svgOptionHover" width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5907 0.727203C11.4469 0.7306 11.3104 0.790654 11.2107 0.894282L6.14726 5.95776L1.08378 0.894282C1.03301 0.842087 0.972284 0.800597 0.905202 0.772266C0.83812 0.743934 0.76604 0.729335 0.693221 0.729331C0.584828 0.729359 0.478906 0.761713 0.388997 0.822256C0.299088 0.882799 0.229277 0.968779 0.188489 1.06921C0.147702 1.16963 0.137791 1.27994 0.160024 1.38603C0.182257 1.49212 0.235623 1.58917 0.3133 1.66477L5.76202 7.11348C5.86421 7.21563 6.00277 7.27301 6.14726 7.27301C6.29174 7.27301 6.43031 7.21563 6.5325 7.11348L11.9812 1.66477C12.0603 1.58867 12.1147 1.49045 12.137 1.38298C12.1594 1.2755 12.1488 1.16377 12.1065 1.06243C12.0643 0.961091 11.9925 0.874866 11.9004 0.815049C11.8084 0.755232 11.7004 0.724613 11.5907 0.727203Z"/>
                    </svg>
                    <div class="subPj bg-[#FCFCFD]">
                        <ul>
                            @foreach($category as $item)
                                <li class="bg-[#FCFCFD] dark:bg-[#0E0E0E]">
                                    <a class="text-[black] dark:text-[#F1F1F2]" href="{{route("projectsEn.category",["category"=>$item->nameEn])}}">{{$item->nameEn}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}#serviceEn">Services</a></li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}#faqEn">FAQ</a></li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}#teamEn">Team</a></li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("home-en.about")}}">About</a></li>
            </ul>
        </nav>
        <nav class="mb bg-[#FFFFFF] dark:bg-[black]">
            <svg id="close" class="svgOption dark:svgOptionDark hover:svgOptionHover dark:hover:svgOptionHover" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.38574 0L0.0442258 1.31094L7.51839 8.61476L0 15.9762L1.32677 17.2727L8.85991 9.9257L16.3783 17.2727L17.7198 15.9618L10.2014 8.61476L17.6756 1.31094L16.3341 0L8.85991 7.30381L1.38574 0Z"/>
            </svg>
            <ul>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}">Home</a></li>
                <li id="psj">
                    <a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("home-en.projects")}}">Projects</a>
                    <svg id="lgeMb" class="svgOption dark:svgOptionDark hover:svgOptionHover dark:hover:svgOptionHover" width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5907 0.727203C11.4469 0.7306 11.3104 0.790654 11.2107 0.894282L6.14726 5.95776L1.08378 0.894282C1.03301 0.842087 0.972284 0.800597 0.905202 0.772266C0.83812 0.743934 0.76604 0.729335 0.693221 0.729331C0.584828 0.729359 0.478906 0.761713 0.388997 0.822256C0.299088 0.882799 0.229277 0.968779 0.188489 1.06921C0.147702 1.16963 0.137791 1.27994 0.160024 1.38603C0.182257 1.49212 0.235623 1.58917 0.3133 1.66477L5.76202 7.11348C5.86421 7.21563 6.00277 7.27301 6.14726 7.27301C6.29174 7.27301 6.43031 7.21563 6.5325 7.11348L11.9812 1.66477C12.0603 1.58867 12.1147 1.49045 12.137 1.38298C12.1594 1.2755 12.1488 1.16377 12.1065 1.06243C12.0643 0.961091 11.9925 0.874866 11.9004 0.815049C11.8084 0.755232 11.7004 0.724613 11.5907 0.727203Z"/>
                    </svg>
                    <div class="subPjMb bg-[#FCFCFD]">
                        <ul>
                            @foreach($category as $item)
                                <li class="bg-[#FCFCFD] dark:bg-[black]">
                                    <a class="text-[black] dark:text-[#F1F1F2]" href="{{route("projectsEn.category",["category"=>$item->nameEn])}}">{{$item->nameEn}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}#serviceEn">Services</a></li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}#faqEn">FAQ</a></li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("homeEn.index")}}#teamEn">Team</a></li>
                <li><a class="text-[black] dark:text-[#F1F1F2] dark:hover:text-[#AE8649]" href="{{route("home-en.about")}}">About</a></li>
            </ul>
        </nav>
        <div class="options">
            <div class="language">
                <span class="text-[black] dark:text-[#F1F1F2]">English</span>
                <svg id="world" class="svgOption dark:svgOptionDark hover:svgOptionHover dark:hover:svgOptionHover" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.56474 0C8.14186 0.283886 6.87657 1.94004 6.08178 4.31289H9.56474V0ZM10.4353 0V4.31289H13.9182C13.1234 1.94004 11.8581 0.283886 10.4353 0ZM7.34847 0.314766C5.04723 0.949798 3.0757 2.38901 1.7538 4.31289H5.14495C5.67248 2.61437 6.43354 1.23194 7.34847 0.314766ZM12.6515 0.314766C13.5665 1.2315 14.3275 2.61437 14.8551 4.31289H18.2462C16.9243 2.38945 14.9528 0.949798 12.6515 0.314766ZM1.20547 5.20515C0.495996 6.51059 0.0674658 7.99096 0 9.56325H4.34668C4.37758 7.9962 4.57026 6.52369 4.89671 5.20515H1.20547ZM5.81484 5.20515C5.46489 6.51802 5.25157 8.001 5.21806 9.56325H9.56474V5.20515H5.81484ZM10.4353 5.20515V9.56325H14.7819C14.748 8.001 14.5351 6.51802 14.1852 5.20515H10.4353ZM15.1033 5.20515C15.4297 6.52326 15.622 7.9962 15.6525 9.56325H20C19.9325 7.99096 19.5044 6.51059 18.7945 5.20515H15.1033ZM0 10.4367C0.0674658 12.009 0.495561 13.4894 1.20547 14.7948H4.89671C4.57026 13.4763 4.378 12.0038 4.34753 10.4367H0ZM5.21806 10.4367C5.25201 11.999 5.46489 13.482 5.81484 14.7948H9.56474V10.4367H5.21806ZM10.4353 10.4367V14.7948H14.1852C14.5351 13.482 14.7484 11.9994 14.7819 10.4367H10.4353ZM15.6533 10.4367C15.6224 12.0038 15.4297 13.4763 15.1033 14.7948H18.7945C19.504 13.4894 19.9325 12.009 20 10.4367H15.6533ZM1.7538 15.6871C3.0757 17.6105 5.04723 19.0502 7.34847 19.6852C6.43354 18.7685 5.67248 17.3856 5.14495 15.6871H1.7538ZM6.08178 15.6871C6.87657 18.06 8.14186 19.7161 9.56474 20V15.6871H6.08178ZM10.4353 15.6871V20C11.8581 19.7161 13.1234 18.06 13.9182 15.6871H10.4353ZM14.8551 15.6871C14.3275 17.3856 13.5665 18.7681 12.6515 19.6852C14.9528 19.0502 16.9243 17.611 18.2462 15.6871H14.8551Z"/>
                </svg>
                <div class="faEn bg-[#FCFCFD] dark:bg-[#0E0E0E]">
                    <ul>
                        <li class="bg-[#FCFCFD] dark:bg-[#0E0E0E]">
                            <a class="text-[black] dark:text-[#F1F1F2] btnLge" href="{{route("home.index")}}">زبان فارسی</a>
                        </li>
                        <li class="bg-[#FCFCFD] dark:bg-[#0E0E0E]">
                            <a class="text-[black] dark:text-[#F1F1F2] " href="{{route("homeEn.index")}}">English Language</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mode">
                <svg class="svgOption dark:svgOptionDark hover:svgOptionHover dark:hover:svgOptionHover" id="darkMode"   viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33.4802 29.7488C21.8026 29.7488 12.3348 20.5689 12.3348 9.24654C12.3348 5.91491 13.1718 2.77977 14.6256 0C6.14097 2.6653 0 10.3827 0 19.4977C0 30.8201 9.46784 40 21.1454 40C29.3885 40 36.511 35.4177 40 28.7442C37.9454 29.3901 35.7568 29.7488 33.4802 29.7488Z"/>
                </svg>
            </div>
        </div>
    </header>
    @yield("contentEn")
<!-- ***** start footer ***** -->
    <footer>
        <!-- ***** start top Footer ***** -->
    @include("FrontView.partials.En.FooterEn")
    <!-- ***** end top footer ***** -->
        <!-- ***** start designer ***** -->
    @include("FrontView.partials.En.designerEn")
    <!-- ***** end designer ***** -->

    </footer>
    <!-- ***** End footer ***** -->
</section>
<script src="{{asset("Front Assets/js/Menu.js")}}"></script>
@yield("js")
</body>
</html>
