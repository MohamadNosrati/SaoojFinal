@extends("layouts.backMaster")
@section("titleBack","Info Index")
@section("contentBack")
    <div class="col-12 my-5 text-center mx-auto">
        <h1 class="text-white text-center text-capitalize mb-3">Info details</h1>
        <div class="mb-5 bg-white p-3 rounded-3">
            <table class="table table-dark table-responsive text-white rounded-3 px-2 py-4">
                <tr>
                    <td class="text-center text-capitalize">id</td>
                    <td class="text-center text-capitalize">video</td>
                    <td class="text-center text-capitalize">NameFa</td>
                    <td class="text-center text-capitalize">Area</td>
                    <td class="text-center text-capitalize">StartFa</td>
                    <td class="text-center text-capitalize">EndFa</td>
                    <td class="text-center text-capitalize">TextFa</td>
                    <td class="text-center text-capitalize">TextEn</td>
                    <td class="text-center text-capitalize">createdAt</td>
                    <td class="text-center text-capitalize">updatedAt</td>
                    <td class="text-center text-capitalize">delete</td>
                    <td class="text-center text-capitalize">update</td>
                </tr>
                @foreach($info as $item)
                    <tr>
                        <td style="line-height: 120px">{{$item->id}}</td>
                        <td style="line-height: 120px">
                            @if(!empty($item->video))
                                <div style="width: 100px;height: 100px;padding-top: 30px" id="{{$item->video_id}}">
                                    <script type="text/JavaScript" src="{{$item->video}}"></script>
                                </div>
                            @endif
                        </td>
                        <td style="line-height: 120px">{{$item->project->PNameEn}}</td>
                        <td style="line-height: 120px">{{$item->area}}</td>
                        <td style="line-height: 120px">{{$item->startFa}}</td>
                        <td style="line-height: 120px">{{$item->endFa}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->textFa,0,10)}}</td>
                        <td style="line-height: 120px">{{substr($item->textEn,0,10)}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->created_at")->addSeconds()}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->updated_at")->addMinutes()}}</td>
                        <td style="line-height: 120px">
                            {!! Form::open(["route"=>["info.destroy","id"=>$item->id],"method"=>"delete"]) !!}
                            {!! Form::submit("delete",["class"=>"btn btn-danger text-capitalize text-white"]) !!}
                            {!! Form::close() !!}
                        </td>
                        <td style="line-height: 120px">
                            <a class="btn btn-warning text-capitalize text-white" href="{{route("info.edit",["id"=>$item->id])}}">update</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @if(session()->exists("delete"))
            <div class="session my-4 bg-danger py-3 px-2 col-4 mx-auto rounded-3">
                <h3 class="text-center text-capitalize text-white">your record deleted successfully!</h3>
            </div>
        @endif
        @if(session()->exists("update"))
            <div class="session my-4 bg-warning py-3 px-2 col-4 mx-auto rounded-3">
                <h3 class="text-center text-capitalize text-white">your record updated successfully!</h3>
            </div>
        @endif
        <a class="btn btn-success text-white text-capitalize mt-5" href="{{route("info.create")}}">create Info</a>
    </div>
@endsection
