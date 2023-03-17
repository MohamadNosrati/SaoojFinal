@extends("layouts.backMaster")
@section("titleBack","Team Edit")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">team Edit</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::model($team,["route"=>["team.update","id"=>$team->id],"method"=>"put","files"=>true]) !!}
            <div class="text-center">
                <img style="width: 125px;height: 125px;border-radius: 50%;object-fit: cover" src="{{asset("images/team/".$team->image)}}" alt="">
            </div>
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
            {!! Form::label("nameFa","nameFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("nameFa",old("nameFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Name"]) !!}
            @error("nameFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("nameEn","nameEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("nameEn",old("nameEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English name"]) !!}
            @error("nameEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("jobFa","jobFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("jobFa",old("jobFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Job"]) !!}
            @error("jobFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("jobEn","jobEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("jobEn",old("jobEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Job"]) !!}
            @error("jobEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("textFa","textFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("textFa",old("textFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Text"]) !!}
            @error("textFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("textEn","textEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("textEn",old("textEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Text"]) !!}
            @error("textEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::submit("edit",["class"=>"text-capitalize text-white btn btn-warning"]) !!}
            {!! Form::close("") !!}
        </div>
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("team.index")}}">details team</a>
        </div>
    </div>
@endsection
