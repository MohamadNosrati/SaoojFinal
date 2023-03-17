<div class="category">
    <h1 class="">Categories</h1>
    <div class="itemCategories">
        @foreach($category as $item)
            @if($item->publish===1)
                <div>
                    <a href="{{route("projectsEn.category",["category"=>$item->nameEn])}}"></a>
                    <img src="{{asset("images/category/".$item->image)}}" alt="{{$item->altEn}}">
                    <div class="cover">
                        <a href="{{route("projectsEn.category",["category"=>$item->nameEn])}}">{{$item->nameEn}}</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
