@extends("layouts.backMaster")
@section("titleBack","Bf Edit")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">Bf Edit</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::model($bf,["route"=>["bf.update","id"=>$bf->id],"method"=>"put","files"=>true]) !!}
            <div class="text-center">
                <img style="width: 125px;height: 125px;border-radius: 50%;object-fit: cover" src="{{asset("images/bf/".$bf->imageBefore)}}" alt="">
            </div>
            <div class="text-center">
                <img style="width: 125px;height: 125px;border-radius: 50%;object-fit: cover ;margin: 25px 0" src="{{asset("images/bf/".$bf->imageAfter)}}" alt="">
            </div>
            {!! Form::label("imageBefore","imageBefore",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::file("imageBefore",["class"=>"form-control mb-3 text-capitalize"]) !!}
            @error("imageBefore")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("imageAfter","imageAfter",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::file("imageAfter",["class"=>"form-control mb-3 text-capitalize"]) !!}
            @error("imageAfter")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altBeforeFa","altBeforeFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altBeforeFa",old("altBeforeFa"),["class"=>"form-control mb-3 text capitalize persian","placeholder"=>"Enter Your Persian Alt Before"]) !!}
            @error("altBeforeFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altBeforeEn","altBeforeEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altBeforeEn",old("altBeforeEn"),["class"=>"form-control mb-3 text capitalize","placeholder"=>"Enter Your English Alt Before"]) !!}
            @error("altBeforeEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altAfterFa","altAfterFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altAfterFa",old("altAfterFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Alt"]) !!}
            @error("altAfterFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("altAfterEn","altAfterEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("altAfterEn",old("altAfterEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Alt"]) !!}
            @error("altAfterEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("project","project",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("project",$project,$bf->info_id,["class"=>"form-select mb-3 text-capitalize"]) !!}
            @error("info_id")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::submit("Edit",["class"=>"text-capitalize text-white btn btn-warning"]) !!}
            {!! Form::close("") !!}
        </div>
        @if(session()->exists("create"))
            <div class="session my-4 bg-success py-3 px-2 col-4 mx-auto rounded-3">
                <h3 class="text-center text-capitalize text-white">your record created successfully!</h3>
            </div>
        @endif
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("bf.index")}}">details Bf</a>
        </div>
    </div>
@endsection
