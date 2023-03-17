@extends("layouts.frontEnMaster")
@section("contentEn")
    <!-- ***** End Menu ***** -->
    <!-- ***** start slider ***** -->
    @include("FrontView.partials.En.sliderEn")
    <!-- ***** End slider ***** -->
    <!-- ***** start categories ***** -->
    @include("FrontView.partials.En.categoryEn")
    <!-- ***** End categories ***** -->
    <!-- ***** start services ***** -->
    @include("FrontView.partials.En.serviceEn")
    <!-- ***** End services ***** -->
    <!-- ***** start FAQ ***** -->
    @include("FrontView.partials.En.faqEn")
    <!-- ***** End FAQ ***** -->
    <!-- ***** start Team ***** -->
    @include("FrontView.partials.En.teamEn")
    <!-- ***** End Team ***** -->
@endsection
@section("js")
    <script src="{{asset("Front Assets/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("Front Assets/js/Slider.js")}}"></script>
    <script src="{{asset("Front Assets/js/FAQ.js")}}"></script>
@endsection
