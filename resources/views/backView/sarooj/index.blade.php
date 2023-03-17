@extends("layouts.backMaster")
@section("titleBack","Sarooj Index")
@section("contentBack")
    <div class="col-12 my-5 text-center mx-auto">
        <h1 class="text-white text-center text-capitalize mb-3">Sarooj details</h1>
        <div class="mb-5 bg-white p-3 rounded-3">
            <table class="table table-dark table-responsive text-white rounded-3 px-2 py-4">
                <tr>
                    <td class="text-center text-capitalize">id</td>
                    <td class="text-center text-capitalize">logo</td>
                    <td class="text-center text-capitalize">email</td>
                    <td class="text-center text-capitalize">phone1</td>
                    <td class="text-center text-capitalize">phone2</td>
                    <td class="text-center text-capitalize">telegram</td>
                    <td class="text-center text-capitalize">instagram</td>
                    <td class="text-center text-capitalize">linkin</td>
                    <td class="text-center text-capitalize">addressFa</td>
                    <td class="text-center text-capitalize">addressEn</td>
                    <td class="text-center text-capitalize">blogFa</td>
                    <td class="text-center text-capitalize">blogEn</td>
                    <td class="text-center text-capitalize">altFa</td>
                    <td class="text-center text-capitalize">altEn</td>
                    <td class="text-center text-capitalize">delete</td>
                    <td class="text-center text-capitalize">update</td>
                </tr>
                @foreach($sarooj as $item)
                    <tr>
                        <td style="line-height: 120px">{{$item->id}}</td>
                        <td style="line-height: 120px">
                            <img style="width:125px;height: 125px;border-radius: 50%" src="{{asset("images/sarooj/".$item->logo)}}">
                        </td>
                        <td style="line-height: 120px">{{substr($item->email,0,5)}}</td>
                        <td style="line-height: 120px">{{$item->phone1}}</td>
                        <td style="line-height: 120px">{{$item->phone2}}</td>
                        <td style="line-height: 120px">{{substr($item->telegram,0,5)}}</td>
                        <td style="line-height: 120px">{{substr($item->instagram,0,5)}}</td>
                        <td style="line-height: 120px">{{substr($item->linkin,0,5)}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->addressFa,0,5)}}</td>
                        <td style="line-height: 120px">{{substr($item->addressEn,0,5)}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->blogFa,0,10)}}</td>
                        <td style="line-height: 120px">{{substr($item->blogEn,0,10)}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->altLogoFa,0,5)}}</td>
                        <td style="line-height: 120px">{{$item->altLogoEn}}</td>
                        <td style="line-height: 120px">
                            {!! Form::open(["route"=>["sarooj.destroy","id"=>$item->id],"method"=>"delete"]) !!}
                            {!! Form::submit("delete",["class"=>"btn btn-danger text-capitalize text-white"]) !!}
                            {!! Form::close() !!}
                        </td>
                        <td style="line-height: 120px">
                            <a class="btn btn-warning text-capitalize text-white" href="{{route("sarooj.edit",["id"=>$item->id])}}">update</a>
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
        <a class="btn btn-success text-white text-capitalize mt-5" href="{{route("sarooj.create")}}">create sarooj</a>
    </div>
@endsection
