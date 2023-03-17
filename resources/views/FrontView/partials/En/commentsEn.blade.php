<div class="comments commentBgLight dark:commentBgDark">
    <h1 class="dark:text-[#F1F1F2]">What clients say?</h1>
    <h4 class="dark:text-[#F1F1F2]">If You Got Any Questions</h4>
    <h4 class="dark:text-[#F1F1F2]" >Please Don,t Hesitate to Send Us A Message</h4>
    <div class="totalComments">
        @foreach($comment as $item)
            <div class="singleComment">
                <div class="img">
                    <img class="customer" src="{{asset("Front Assets/Icons/Comments/avatar image.jpg")}}" alt="rebuilding comments">
                </div>
                <b>{{$item->name}}</b>
                <span>{{$item->email}}</span>
                <img class="dot" src="{{asset("Front Assets/Icons/Comments/Vector.svg")}}" alt="rebuilding comments">
                <p>
                    {{$item->text}}
                </p>
            </div>
        @endforeach
    </div>
</div>
