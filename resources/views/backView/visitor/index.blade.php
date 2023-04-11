@extends("layouts.backMaster")
@section("titleBack","Slider Index")
@section("contentBack")
    <div class="col-12 my-5 text-center mx-auto">
        <h1 class="text-white text-center text-capitalize mb-3">Total Unique Visitors : {{$visitorCount}}</h1>
        <div class="mb-5 bg-white p-3 rounded-3">
            <table class="table table-dark table-responsive text-white rounded-3 px-2 py-4">
                <tr>
                    <td class="text-center text-capitalize">id</td>
                    <td class="text-center text-capitalize">ip</td>
                    <td class="text-center text-capitalize">location</td>
                    <td class="text-center text-capitalize">month</td>
                    <td class="text-center text-capitalize">createdAt</td>
                    <td class="text-center text-capitalize">updatedAt</td>
                </tr>
                @foreach($visitor as $item)
                    <tr>
                        <td style="line-height: 120px">{{$item->id}}</td>
                        <td style="line-height: 120px">{{$item->Ip}}</td>
                        <td style="line-height: 120px">{{$item->country}}</td>
                        <td style="line-height: 120px">{{$item->city}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->created_at")->addSeconds()}}</td>
                        <td style="line-height: 120px">{{\Morilog\Jalali\Jalalian::forge("$item->updated_at")->addMinutes()}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

