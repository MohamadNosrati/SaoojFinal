<div id="faqEn" class="faq">
    <h1>F.A.Q</h1>
    <div class="faqItems">
        @foreach($faq as $item)
            @if($item->publish===1)
                <div class="singleFaq">
                    <div class="question">
                        <div class="iconQuestion">
                            <img src="{{asset("images/faq/".$item->image)}}" alt="{{$item->altEn}}">
                        </div>
                        <div class="textQuestion">
                            <h4>
                                {{$item->questionEn}}
                            </h4>
                        </div>
                        <div class="iconDirection">
                            <img src="{{asset("Front Assets/Icons/FAQ/direction.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="answer">
                        <p>
                            {{$item->answerEn}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
