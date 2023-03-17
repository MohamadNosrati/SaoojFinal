@extends("layouts.backMaster")
@section("titleBack","Slider Create")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">slider create</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::open(["route"=>"slider.store","method"=>"post","files"=>true]) !!}
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
            {!! Form::label("titleFa","titleFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("titleFa",old("titleFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your persian title"]) !!}
            @error("titleFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("titleEn","titleEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("titleEn",old("titleEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your english title"]) !!}
            @error("titleEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("textFa","textFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("textFa",old("textFa"),["class"=>"form-control mb-3 text-capitalize persian","placeholder"=>"Enter Your persian text"]) !!}
            @error("textFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("textEn","textEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("textEn",old("textEn"),["class"=>"form-control mb-3 text-capitalize","placeholder"=>"Enter Your english text"]) !!}
            @error("textEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
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
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("slider.index")}}">details slider</a>
        </div>
    </div>
@endsection

