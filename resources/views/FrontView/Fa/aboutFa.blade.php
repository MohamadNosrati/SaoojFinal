@extends("layouts.frontFaMaster")
@section("contentFrontFa")
    <!-- ***** Start Blog ***** -->
    @include("FrontView.partials.Fa.blog")
    <!-- ***** End Blog ***** -->
    <!-- ***** start Comments ***** -->
    @include("FrontView.partials.Fa.comments")
    <!-- ***** End Comments ***** -->
    <!-- ***** start contact ***** -->
    @include("FrontView.partials.Fa.contact")
    <!-- ***** End contact  ***** -->
    <!-- ***** start Form ***** -->
    @include("FrontView.partials.Fa.form")
    <!-- ***** End Form ***** -->
    <!-- ***** Start Socials ***** -->
    @include("FrontView.partials.Fa.socials")
    <!-- ***** End Socials ***** -->
    <!-- ***** start Location ***** -->
    @include("FrontView.partials.location")
    <!-- ***** End Location ***** -->
@endsection
@section("js")
    <script src="{{asset("jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("jquery-toast-plugin-master/dist/jquery.toast.min.js")}}"></script>
    <script src="{{asset("Front Assets/js/Form.js")}}"></script>
@endsection
