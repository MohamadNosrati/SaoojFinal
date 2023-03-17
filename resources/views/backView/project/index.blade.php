@extends("layouts.backMaster")
@section("titleBack","Project Index")
@section("contentBack")
    <div class="col-12 my-5 text-center mx-auto">
        <h1 class="text-white text-center text-capitalize mb-3">project details</h1>
        <div class="mb-5 bg-white p-3 rounded-3">
            <table class="table table-dark table-responsive text-white rounded-3 px-2 py-4">
                <tr>
                    <td class="text-center text-capitalize">id</td>
                    <td class="text-center text-capitalize">image</td>
                    <td class="text-center text-capitalize">altFa</td>
                    <td class="text-center text-capitalize">altEn</td>
                    <td class="text-center text-capitalize">projectNameFa</td>
                    <td class="text-center text-capitalize">projectNameEn</td>
                    <td class="text-center text-capitalize">category</td>
                    <td class="text-center text-capitalize">createdAt</td>
                    <td class="text-center text-capitalize">updatedAt</td>
                    <td class="text-center text-capitalize">publish</td>
                    <td class="text-center text-capitalize">delete</td>
                    <td class="text-center text-capitalize">update</td>
                </tr>
                @foreach($project as $item)
                    <tr>
                        <td style="line-height: 120px">{{$item->id}}</td>
                        <td style="line-height: 120px">
                            <img style="width:125px;height: 125px;border-radius: 50%;object-fit: cover " src="{{asset("images/project/".$item->image)}}" alt="">
                        </td>
                        <td style="line-height: 120px">{{mb_strcut($item->altFa,0,10)}}</td>
                        <td style="line-height: 120px">{{$item->altEn}}</td>
                        <td style="line-height: 120px">{{mb_strcut($item->PNameFa,0,20)}}</td>
                        <td style="line-height: 120px">{{substr($item->PNameEn,0,20)}}</td>
                        <td style="line-height: 120px">{{$item->category->nameEn}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->created_at")->addSeconds()}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->updated_at")->addMinutes()}}</td>
                        <td style="line-height: 120px">
                            @if($item->publish===1)
                                <span class="btn btn-outline-success">Active</span>
                            @else
                                <span class="btn btn-outline-danger">DeActive</span>
                            @endif
                        </td>
                        <td style="line-height: 120px">
                            {!! Form::open(["route"=>["project.destroy","id"=>$item->id],"method"=>"delete"]) !!}
                            {!! Form::submit("delete",["class"=>"btn btn-danger text-capitalize text-white"]) !!}
                            {!! Form::close() !!}
                        </td>
                        <td style="line-height: 120px">
                            <a class="btn btn-warning text-capitalize text-white" href="{{route("project.edit",["id"=>$item->id])}}">update</a>
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
        <a class="btn btn-success text-white text-capitalize mt-5" href="{{route("project.create")}}">create project</a>
    </div>
@endsection
