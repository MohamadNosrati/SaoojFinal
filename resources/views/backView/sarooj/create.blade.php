@extends("layouts.backMaster")
@section("titleBack","Sarooj Create")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">sarooj create</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::open(["route"=>"sarooj.store","method"=>"post","files"=>true]) !!}
            {!! Form::label("logo","logo",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::file("logo",["class"=>"form-control mb-3 text-capitalize"]) !!}
            @error("logo")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altLogoFa","altLogoFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altLogoFa",old("altLogoFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian alt Logo"]) !!}
            @error("altLogoFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altLogoEn","altLogoEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altLogoEn",old("altLogoEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English alt Logo"]) !!}
            @error("altLogoEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("email","email",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("email",old("email"),["class"=>"form-control mb-3","placeholder"=>"Enter Your Persian email"]) !!}
            @error("email")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("phone1","phone1",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("phone1",old("phone1"),["class"=>"form-control mb-3","placeholder"=>"Enter Your Persian phone1"]) !!}
            @error("phone1")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("phone2","phone2",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("phone2",old("phone2"),["class"=>"form-control mb-3","placeholder"=>"Enter Your Persian phone2"]) !!}
            @error("phone2")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("telegram","telegram",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("telegram",old("telegram"),["class"=>"form-control mb-3","placeholder"=>"Enter Your telegram"]) !!}
            @error("telegram")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("instagram","instagram",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("instagram",old("instagram"),["class"=>"form-control mb-3","placeholder"=>"Enter Your instagram"]) !!}
            @error("instagram")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("linkin","linkin",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("linkin",old("linkin"),["class"=>"form-control mb-3","placeholder"=>"Enter Your linkin"]) !!}
            @error("linkin")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("addressFa","addressFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("addressFa",old("addressFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian address"]) !!}
            @error("addressFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("addressEn","addressEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("addressEn",old("addressEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Address"]) !!}
            @error("addressEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("blogFa","blogFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("blogFa",old("blogFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Name"]) !!}
            @error("blogFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("blogEn","blogEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("blogEn",old("blogEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English blog"]) !!}
            @error("blogEn")
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
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("sarooj.index")}}">details sarooj</a>
        </div>
    </div>
@endsection
