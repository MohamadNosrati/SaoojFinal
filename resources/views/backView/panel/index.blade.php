@extends("layouts.backMaster")
@section("titleBack","Sarooj Admin panel")
@section("contentBack")
    <h1>welcome to your admin panel {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
    <div class="panelItems">
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("slider.index")}}">slider info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("service.index")}}">service info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("faq.index")}}">faq info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("category.index")}}">category info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("team.index")}}">team info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("project.index")}}">project info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("info.index")}}">project details</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("seo.index")}}">seo info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("sarooj.index")}}">sarooj info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("comment.index")}}">persian comments</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("blog.index")}}">blog info</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("bf.index")}}">project image</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("social.index")}}">team socials</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("general.index")}}">general images</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("commentEn.index")}}">English comments</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("seoEn.index")}}">English Seo</a>
        </div>
        <div class="text-center bg-dark">
            <img src="{{asset("images/logo/logoUsual.jpg")}}">
            <a class="btn text-white my-3 text-capitalize" href="{{route("visitors.index")}}">Visitors</a>
        </div>
    </div>
@endsection


