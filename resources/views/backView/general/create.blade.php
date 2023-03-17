@extends("layouts.backMaster")
@section("titleBack","General Create")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">General create</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::open(["route"=>"general.store","method"=>"post","files"=>true]) !!}
            {!! Form::label("serviceImage","serviceImage",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::file("serviceImage",["class"=>"form-control mb-3 text-capitalize"]) !!}
            @error("serviceImage")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("projectsImage","projectsImage",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::file("projectsImage",["class"=>"form-control mb-3 text-capitalize"]) !!}
            @error("projectsImage")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altServiceImageFa","alt ServiceImage Fa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altServiceImageFa",old("altServiceImageFa"),["class"=>"form-control mb-3 text capitalize persian","placeholder"=>"Enter Your Persian Alt serviceImage"]) !!}
            @error("altServiceImageFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altServiceImageEn","alt ServiceImage En",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altServiceImageEn",old("altServiceImageEn"),["class"=>"form-control mb-3 text capitalize","placeholder"=>"Enter Your English Alt serviceImage"]) !!}
            @error("altServiceImageEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altProjectsImageFa","alt ProjectsImage Fa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altProjectsImageFa",old("altProjectsImageFa"),["class"=>"form-control mb-3 text capitalize persian","placeholder"=>"Enter Your Persian Alt ProjectsImage"]) !!}
            @error("altProjectsImageFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altProjectsImageEn","alt ProjectsImage En",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altProjectsImageEn",old("altProjectsImageEn"),["class"=>"form-control mb-3 text capitalize","placeholder"=>"Enter Your English Alt ProjectsImage"]) !!}
            @error("altProjectsImageEn")
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
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("general.index")}}">details General</a>
        </div>
    </div>
@endsection
