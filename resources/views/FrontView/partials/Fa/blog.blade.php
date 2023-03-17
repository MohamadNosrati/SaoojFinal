<div class="blog">
    @foreach($blog as $item)
        <div class="blogPic">
            <img src="{{asset("images/blog/".$item->image)}}" alt="{{$item->altFa}}">
        </div>
        <div class="blogText">
            <h1>درباره <span>ما</span></h1>
            <p>
                {{$item->textFa}}
            </p>
        </div>
    @endforeach
</div>
