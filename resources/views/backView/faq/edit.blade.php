@extends("layouts.backMaster")
@section("titleBack","FAQ Edit")
@section("contentBack")
    <div class="col-12 my-5">
        <h1 class="text-white text-center text-capitalize mb-3">FAQ edit</h1>
        <div class="col-8 mx-auto my-4 bg-dark py-4 px-5 rounded-4">
            {!! Form::model($faq,["route"=>["faq.update","id"=>$faq->id],"method"=>"put","files"=>true]) !!}
            <div class="text-center">
                <img style="width: 125px;height: 125px;border-radius: 50%;object-fit: cover" src="{{asset("images/faq/".$faq->image)}}" alt="">
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
            {!! Form::label("questionFa","questionFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("questionFa",old("questionFa"),["class"=>"form-control mb-3 persian","placeholder"=>"Enter Your Persian Question"]) !!}
            @error("questionFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("questionEn","questionEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::text("questionEn",old("questionEn"),["class"=>"form-control mb-3","placeholder"=>"Enter Your English Question"]) !!}
            @error("questionEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("answerFa","answerFa",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("answerFa",old("answerFa"),["class"=>"form-control mb-3 text-capitalize persian","placeholder"=>"Enter Your Persian Answer"]) !!}
            @error("answerFa")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("answerEn","answerEn",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::textarea("answerEn",old("answerEn"),["class"=>"form-control mb-3 text-capitalize","placeholder"=>"Enter Your English Answer"]) !!}
            @error("answerEn")
            <p class="text-danger my-3 text-capitalize">{{$message}}</p>
            @enderror
            {!! Form::label("publish","publish",["class"=>"text-white text-capitalize mb-2"]) !!}
            {!! Form::select("publish",[1=>"Active",0=>"DeActive"],$faq->publish,["class"=>"form-select mb-3"]) !!}
            {!! Form::submit("edit",["class"=>"text-capitalize text-white btn btn-warning"]) !!}
            {!! Form::close("") !!}
        </div>
        <div class="text-center">
            <a class="btn btn-info text-white text-capitalize mt-3" href="{{route("faq.index")}}">details FAQ</a>
        </div>
    </div>
@endsection
