<div class="swiper mySwiperSlider">
    <div class="swiper-wrapper">
        @foreach($slider as $item)
            @if($item->publish===1)
                <div class="swiper-slide">
                    <img src="{{asset("images/slider/".$item->image)}}" alt="{{$item->altFa}}">
                    <div class="text">
                        <h1 class="">{{$item->titleFa}}</h1>
                        <p class="text-[#1D1D1D]">
                            {{$item->textFa}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
