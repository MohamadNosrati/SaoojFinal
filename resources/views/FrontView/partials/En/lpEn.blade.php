<div class="lastProjects lpLightBg dark:lpDarkBg">
    <h1 class="dark:text-[#D6D6D6]">Last Projects</h1>
    <div class="lpItems">
        @foreach($lp as $item)
            <div>
                <a href="{{route("projectInfoEn",["projectName"=>$item->PNameEn])}}"></a>
                <img src="{{asset("images/project/".$item->image)}}" alt="{{$item->altEn}}">
                <div class="cover">
                    <a href="{{route("projectInfoEn",["projectName"=>$item->PNameEn])}}">{{$item->PNameEn}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
