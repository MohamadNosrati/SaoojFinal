<div id="faq" class="faq">
    <h1>سوالات متداول</h1>
    <div class="faqItems">
        @foreach($faq as $item)
            @if($item->publish===1)
                <div class="singleFaq">
                    <div class="question">
                        <div class="iconQuestion">
                            <img src="{{asset("images/faq/".$item->image)}}" alt="{{$item->altFa}}">>
                        </div>
                        <div class="textQuestion">
                            <h4>
                                {{$item->questionFa}}
                            </h4>
                        </div>
                        <div class="iconDirection">
                            <img src="{{asset("Front Assets/Icons/FAQ/direction.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="answer">
                        <p>
                            {{$item->answerFa}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
