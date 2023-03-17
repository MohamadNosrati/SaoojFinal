@extends("layouts.backMaster")
@section("titleBack","Project Create")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">project create</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::open(["route"=>"project.store","method"=>"post","files"=>true]) !!}
            {!! Form::label("image","image",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::file("image",["class"=>"form-control mb-3 text-capitalize"]) !!}
            @error("image")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altFa","altFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altFa",old("altFa"),["class"=>"form-control mb-3 text capitalize persian","placeholder"=>"Enter Your Persian Alt"]) !!}
            @error("altFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altEn","altEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altEn",old("altEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Alt"]) !!}
            @error("altEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("PNameFa","PNameFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("PNameFa",old("PNameFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Project Name"]) !!}
            @error("nameFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("PNameEn","PNameEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("PNameEn",old("PNameEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Project name"]) !!}
            @error("nameEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("category","category",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("category_id",$category,null,["class"=>"form-select mb-3"]) !!}
            {!! Form::label("publish","publish",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("publish",[1=>"Active",0=>"DeActive"],null,["class"=>"form-select mb-3"]) !!}
            {!! Form::submit("send",["class"=>"text-capitalize text-white btn btn-primary"]) !!}
            {!! Form::close("") !!}
        </div>
        @if(session()->exists("create"))
            <div class="session my-4 bg-success py-3 px-2 col-4 mx-auto rounded-3">
                <h3 class="text-center text-capitalize text-white">your record created successfully!</h3>
            </div>
        @endif
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("project.index")}}">details project</a>
        </div>
    </div>
@endsection
