<div id="serviceEn" class="services">
    <h1>Services</h1>
    <div class="itemService">
        <div class="image">
            <img src="{{asset("images/general/".$general->ServiceImage)}}" alt="{{$general->altServiceImageEn}}">
        </div>
        <div class="officeServices">
            <h3>What services do we provide for customers?</h3>
            <div class="totalServices">
                @foreach($service as $item)
                    <div class="singleService">
                        <div class="iconService">
                            <img src="{{asset("images/service/".$item->image)}}" alt="{{$item->altEn}}">
                        </div>
                        <div class="textService">
                            <h3>{{$item->titleEn}}</h3>
                            <p>
                                {{$item->textEn}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
