@extends("layouts.backMaster")
@section("titleBack","English Seo Edit")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">English Seo Edit</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::model($seo,["route"=>["seoEn.update",["id"=>$seo->id]],"method"=>"put","files"=>true]) !!}
            {!! Form::label("page","page",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("page",[
    "Home English"=>"Home English",
    "Projects English"=>"Projects English",
    "Project Details English"=>"Project Details English",
    "About English"=>"About English"
],null,["class"=>"form-select mb-3"]) !!}
            {!! Form::label("title","title",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("title",old("title"),["class"=>"form-control mb-3 text-capitalize","placeholder"=>"Enter Your Title"]) !!}
            @error("title")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("description","description",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("description",old("description"),["class"=>"form-control mb-3 text capitalize" ,"placeholder"=>"Enter Your Description"]) !!}
            @error("description")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("author","author",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("author",old("author"),["class"=>"form-control mb-3 text-capitalize" ,"placeholder"=>"Enter Your Author"]) !!}
            @error("author")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("keywords","keywords",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("keywords",old("keywords"),["class"=>"form-control mb-3 text-capitalize" ,"placeholder"=>"Enter Your Key Words"]) !!}
            @error("keywords")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::submit("Edit",["class"=>"text-capitalize text-white btn btn-warning"]) !!}
            {!! Form::close("") !!}
        </div>
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("seoEn.index")}}">english details Seo</a>
        </div>
    </div>
@endsection
