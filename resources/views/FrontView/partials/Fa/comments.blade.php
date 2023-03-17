<div class="comments commentBgLight dark:commentBgDark">
    <h1 class="dark:text-[#F1F1F2]">نظر مشتری ها چیست ؟</h1>
    <h4 class="dark:text-[#F1F1F2]">اگر نظری دارید</h4>
    <h4 class="dark:text-[#F1F1F2]" >لطفا در ارسال پیام به ما تردید نکنید !</h4>
    <div class="totalComments">
        @foreach($comment as $item)
                <div class="singleComment">
                    <div class="img">
                        <img class="customer" src="{{asset("Front Assets/Icons/Comments/avatar image.jpg")}}" alt="پیشنهادات بازسازی">
                    </div>
                    <b>{{$item->name}}</b>
                    <span>{{$item->email}}</span>
                    <img class="dot" src="{{asset("Front Assets/Icons/Comments/Vector.svg")}}" alt="پیشنهادات بازسازی">
                    <p>
                        {{$item->text}}
                    </p>
                </div>
        @endforeach
    </div>
</div>
