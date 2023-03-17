@extends("layouts.backMaster")
@section("titleBack","Team Index")
@section("contentBack")
    <div class="col-12 my-5 text-center mx-auto">
        <h1 class="text-white text-center text-capitalize mb-3">Team details</h1>
        <div class="mb-5 bg-white p-3 rounded-3">
            <table class="table table-dark table-responsive text-white rounded-3 px-2 py-4">
                <tr>
                    <td class="text-center text-capitalize">id</td>
                    <td class="text-center text-capitalize">image</td>
                    <td class="text-center text-capitalize">altFa</td>
                    <td class="text-center text-capitalize">altEn</td>
                    <td class="text-center text-capitalize">nameFa</td>
                    <td class="text-center text-capitalize">nameEn</td>
                    <td class="text-center text-capitalize">jobFa</td>
                    <td class="text-center text-capitalize">jobEn</td>
                    <td class="text-center text-capitalize">textFa</td>
                    <td class="text-center text-capitalize">textEn</td>
                    <td class="text-center text-capitalize">createdAt</td>
                    <td class="text-center text-capitalize">updatedAt</td>
                    <td class="text-center text-capitalize">delete</td>
                    <td class="text-center text-capitalize">update</td>
                </tr>
                @foreach($team as $item)
                    <tr>
                        <td style="line-height: 120px">{{$item->id}}</td>
                        <td style="line-height: 120px">
                            <img style="width:125px;height: 125px;border-radius: 50%;object-fit: cover " src="{{asset("images/team/".$item->image)}}">
                        </td>
                        <td style="line-height: 120px">{{mb_strcut($item->altFa,0,10)}}</td>
                        <td style="line-height: 120px">{{$item->altEn}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->nameFa,0,20)}}</td>
                        <td style="line-height: 120px">{{substr($item->nameEn,0,20)}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->jobFa,0,10)}}</td>
                        <td style="line-height: 120px">{{substr($item->jobEn,0,10)}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->textFa,0,10)}}</td>
                        <td style="line-height: 120px">{{substr($item->textEn,0,10)}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->created_at")->addSeconds()}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->updated_at")->addMinutes()}}</td>
                        <td style="line-height: 120px">
                            {!! Form::open(["route"=>["team.destroy","id"=>$item->id],"method"=>"delete"]) !!}
                            {!! Form::submit("delete",["class"=>"btn btn-danger text-capitalize text-white"]) !!}
                            {!! Form::close() !!}
                        </td>
                        <td style="line-height: 120px">
                            <a class="btn btn-warning text-capitalize text-white" href="{{route("team.edit",["id"=>$item->id])}}">update</a>
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
        <a class="btn btn-success text-white text-capitalize mt-5" href="{{route("team.create")}}">create Team</a>
    </div>
@endsection
