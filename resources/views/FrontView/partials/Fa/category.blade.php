<div class="category">
    <h1 class="">دسته بندی</h1>
    <div class="itemCategories">
        @foreach($category as $item)
            @if($item->publish===1)
                <div>
                    <a href="{{route("projects.category",["category"=>$item->nameFa])}}"></a>
                    <img src="{{asset("images/category/".$item->image)}}" alt="">
                    <div class="cover">
                        <a href="{{route("projects.category",["category"=>$item->nameFa])}}">{{$item->nameFa}}</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
