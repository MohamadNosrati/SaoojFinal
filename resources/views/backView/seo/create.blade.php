@extends("layouts.backMaster")
@section("titleBack","Seo Create")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">Seo create</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::open(["route"=>"seo.store","method"=>"post","files"=>true]) !!}
            {!! Form::label("page","page",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("page",[
    "Home Persian"=>"Home Persian",
    "Projects Persian"=>"Projects Persian",
    "Project Details Persian"=>"Project Details Persian",
    "About Persian"=>"About Persian",
],null,["class"=>"form-select mb-3"]) !!}
            {!! Form::label("title","title",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("title",old("title"),["class"=>"form-control mb-3 text-capitalize persian","placeholder"=>"Enter Your Title"]) !!}
            @error("title")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("description","description",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("description",old("description"),["class"=>"form-control mb-3 text capitalize persian" ,"placeholder"=>"Enter Your Description"]) !!}
            @error("description")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("author","author",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("author",old("author"),["class"=>"form-control mb-3 text-capitalize persian" ,"placeholder"=>"Enter Your Author"]) !!}
            @error("author")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("keywords","keywords",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("keywords",old("keywords"),["class"=>"form-control mb-3 text-capitalize persian" ,"placeholder"=>"Enter Your Key Words"]) !!}
            @error("keywords")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::submit("send",["class"=>"text-capitalize text-white btn btn-primary"]) !!}
            {!! Form::close("") !!}
        </div>
        @if(session()->exists("create"))
            <div class="session my-4 bg-success py-3 px-2 col-4 mx-auto rounded-3">
                <h3 class="text-center text-capitalize text-white">your record created successfully!</h3>
            </div>
        @endif
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("seo.index")}}">details Seo</a>
        </div>
    </div>
@endsection
