@extends("layouts.frontFaMaster")
@section("contentFrontFa")
    <!-- ***** End Menu ***** -->
    <!-- ***** start slider ***** -->
    @include("FrontView.partials.Fa.slider")
    <!-- ***** End slider ***** -->
    <!-- ***** start categories ***** -->
    @include("FrontView.partials.Fa.category")
    <!-- ***** End categories ***** -->
    <!-- ***** start services ***** -->
    @include("FrontView.partials.Fa.service")
    <!-- ***** End services ***** -->
    <!-- ***** start FAQ ***** -->
    @include("FrontView.partials.Fa.faq")
    <!-- ***** End FAQ ***** -->
    <!-- ***** start Team ***** -->
    <!--     dark:linearCatDark-->
    @include("FrontView.partials.Fa.team")
    <!-- ***** End Team ***** -->
@endsection
@section("js")
    <script src="{{asset("Front Assets/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("Front Assets/js/Slider.js")}}"></script>
    <script src="{{asset("Front Assets/js/FAQ.js")}}"></script>
@endsection
