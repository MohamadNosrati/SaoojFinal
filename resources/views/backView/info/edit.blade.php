@extends("layouts.backMaster")
@section("titleBack","Info Edit")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">info Edit</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::model($info,["route"=>["info.update","id"=>$info->id],"method"=>"put","files"=>true]) !!}
            {!! Form::label("videoId","videoId",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::number("videoId",$info->video_id,["class"=>"form-control mb-3 text-capitalize","placeholder"=>"Please Enter Your Video Id"]) !!}
            @error("videoId")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("video","video",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("video",old("video"),["class"=>"form-control mb-3 text-capitalize","placeholder"=>"Please Enter Your Video Source"]) !!}
            @error("video")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("area","area",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::number("area",old("area"),["class"=>"form-control mb-3 text-capitalize","min"=>0,"placeholder"=>"Please Enter Your Area"]) !!}
            @error("area")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("startFa","startFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("startFa",old("startFa"),["class"=>"form-control mb-3 persian","id"=>"startFa","placeholder"=>"Please Enter Your Start Persian Date"]) !!}
            @error("startFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("endFa","endFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("endFa",old("endFa"),["class"=>"form-control mb-3 persian","id"=>"endFa","placeholder"=>"Please Enter Your End Persian Date"]) !!}
            @error("endFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("textFa","textFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("textFa",old("textFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Please Enter Your textFa"]) !!}
            @error("textFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("textEn","textEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("textEn",old("textEn"),["class"=>"form-control mb-3","placeholder"=>"Please Enter Your Text En"]) !!}
            @error("textEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("project_id","project",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("project_id",$project,$info->id,["class"=>"form-select mb-3"]) !!}
            @error("project_id")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::submit("Edit",["class"=>"text-capitalize text-white btn btn-warning"]) !!}
            {!! Form::close() !!}
        </div>
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("info.index")}}">details info</a>
        </div>
    </div>
@endsection()
@section("js")
    <script src="{{asset("jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("Persian_Calendar/src/kamadatepicker.js")}}"></script>
@endsection
