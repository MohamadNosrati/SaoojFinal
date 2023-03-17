<div class="blog">
    @foreach($blog as $item)
        <div class="blogPic">
            <img src="{{asset("images/blog/".$item->image)}}" alt="{{$item->altEn}}">
        </div>
        <div class="blogText">
            <h1>About<span> Us</span></h1>
            <p>
                {{$item->textEn}}
            </p>
        </div>
    @endforeach
</div>
