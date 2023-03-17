@extends("layouts.frontEnMaster")
@section("contentEn")
    <!-- ***** start Details ***** -->
    <div class="details bfLightBg dark:bfDarkBg">
        <h1 class="text-[black] dark:text-[#F1F1F2]">{{$project->PNameEn}} Project</h1>
        <!-- ***** Start BF ***** -->
    @include("FrontView.partials.En.bf")
    <!-- ***** End BF ***** -->
        <!-- ***** start info ***** -->
    @include("FrontView.partials.En.infoEn")
    <!-- ******* start video ***** -->
    @include("FrontView.partials.video")
    <!-- ******* End video ***** -->
    </div>
    <!-- ***** End Details ***** -->
    <!-- ***** start Last Projects ***** -->
    @include("FrontView.partials.En.lpEn")
    <!-- ***** End last Projects ***** -->
@endsection
@section("js")
    <script src="{{asset("Front Assets/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("Front Assets/js/Bf.js")}}"></script>
@endsection
