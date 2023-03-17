<div id="service" class="services">
    <h1>خدمات ما</h1>
    <div class="itemService">
        <div class="image">
            <img src="{{asset("images/general/".$general->ServiceImage)}}" alt="{{$general->altServiceImageFa}}">
        </div>
        <div class="officeServices">
            <h3>چه خدماتی به مشتریان عرضه می کنیم؟</h3>
            <div class="totalServices">
                @foreach($service as $item)
                    @if($item->publish===1)
                        <div class="singleService">
                            <div class="iconService">
                                <img src="{{asset("images/service/".$item->image)}}" alt="{{$item->altFa}}">
                            </div>
                            <div class="textService">
                                <h3>{{$item->titleFa}}</h3>
                                <p>
                                    {{$item->textFa}}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
