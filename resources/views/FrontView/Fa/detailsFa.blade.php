@extends("layouts.frontFaMaster")
@section("contentFrontFa")
    <!-- ***** Start Details ***** -->
    <div class="details bfLightBg dark:bfDarkBg">
    <h1 class="text-[black] dark:text-[#F1F1F2]"> پروژه {{$project->PNameFa}} </h1>
    <!-- ***** Start BF ***** -->
    @include("FrontView.partials.fa.bfFa")
    <!-- ***** End BF ***** -->
    <!-- ***** start projectInfo ***** --->
    @include("FrontView.partials.fa.info")
    <!-- ***** End projectInfo --->
    <!-- ***** End Details ***** -->
    <!-- ***** start video ***** -->
    @include("FrontView.partials.video")
    <!-- ***** End video ***** -->
    </div>
    <!-- ***** start Last Projects ***** -->
    @include("FrontView.partials.fa.lp")
    <!-- ***** End last Projects ***** -->
@endsection
@section("js")
    <script src="{{asset("Front Assets/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("Front Assets/js/Bf.js")}}"></script>
@endsection
