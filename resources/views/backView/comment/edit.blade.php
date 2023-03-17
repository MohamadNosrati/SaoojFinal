@extends("layouts.backMaster")
@section("titleBack","comment Edit")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">Comment Show</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::model($comment,["route"=>["comment.update","id"=>$comment->id],"method"=>"put","files"=>true]) !!}
            {!! Form::label("publish","publish",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("publish",[1=>"Active",0=>"DeActive"],$comment->publish,["class"=>"form-select mb-3"]) !!}
            {!! Form::submit("update",["class"=>"text-capitalize text-white btn btn-warning"]) !!}
            {!! Form::close("") !!}
        </div>
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("comment.index")}}">details Comments</a>
        </div>
    </div>
@endsection
