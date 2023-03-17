@extends("layouts.backMaster")
@section("titleBack","Comment Index")
@section("contentBack")
    <div class="col-12 my-5 text-center mx-auto">
        <h1 class="text-white text-center text-capitalize mb-3">Persian Comment details</h1>
        <div class="mb-5 bg-white p-3 rounded-3">
            <table class="table table-dark table-responsive text-white rounded-3 px-2 py-4">
                <tr>
                    <td class="text-center text-capitalize">id</td>
                    <td class="text-center text-capitalize">name</td>
                    <td class="text-center text-capitalize">email</td>
                    <td class="text-center text-capitalize">text</td>
                    <td class="text-center text-capitalize">publish</td>
                    <td class="text-center text-capitalize">createdAt</td>
                    <td class="text-center text-capitalize">delete</td>
                    <td class="text-center text-capitalize">update</td>
                </tr>
                @foreach($comment as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->text}}</td>
                        <td>
                            @if($item->publish===1)
                                <span class="btn btn-outline-success">Active</span>
                            @else
                                <span class="btn btn-outline-danger">DeActive</span>
                            @endif
                        </td>
                        <td>{{\Morilog\Jalali\Jalalian::forge("$item->created_at")->addSeconds()}}</td>
                        <td>
                            {!! Form::open(["route"=>["comment.destroy","id"=>$item->id],"method"=>"delete"]) !!}
                            {!! Form::submit("delete",["class"=>"btn btn-danger text-capitalize text-white"]) !!}
                            {!! Form::close() !!}
                        </td>
                        <td>
                            <a class="btn btn-warning text-capitalize text-white" href="{{route("comment.edit",["id"=>$item->id])}}">update</a>
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
    </div>
@endsection
