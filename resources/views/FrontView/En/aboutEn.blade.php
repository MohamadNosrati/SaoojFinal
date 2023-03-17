@extends("layouts.frontEnMaster")
@section("contentEn")
    <!-- ***** Start Blog ***** -->
    @include("FrontView.partials.En.blogEn")
    <!-- ***** End Blog ***** -->
    <!-- ***** start Comments ***** -->
    @include("FrontView.partials.En.commentsEn")
    <!-- ***** End Comments ***** -->
    <!-- ***** start contact ***** -->
    @include("FrontView.partials.En.contactEn")
    <!-- ***** End contact  ***** -->
    <!-- ***** start Form ***** -->
    @include("FrontView.partials.En.formEn")
    <!-- ***** End Form ***** -->
    <!-- ***** Start Socials ***** -->
    @include("FrontView.partials.En.socialsEn")
    <!-- ***** End Socials ***** -->
    <!-- ***** start Location ***** -->
    @include("FrontView.partials.location")
    <!-- ***** End Location ***** -->
    <!-- ***** start footer ***** -->
@endsection
@section("js")
    <script src="{{asset("jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("jquery-toast-plugin-master/dist/jquery.toast.min.js")}}"></script>
    <script src="{{asset("Front Assets/js/FormEn.js")}}"></script>
@endsection


