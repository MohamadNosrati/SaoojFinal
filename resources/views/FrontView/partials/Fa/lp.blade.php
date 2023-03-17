<div class="lastProjects lpLightBg dark:lpDarkBg">
    <h1 class="dark:text-[#D6D6D6]">آخرین پروژه ها</h1>
    <div class="lpItems">
        @foreach($lp as $item)
            <div>
                <a href="{{route("projectInfo",["projectName"=>$item->PNameFa])}}"></a>
                <img src="{{asset("images/project/".$item->image)}}" alt="{{$item->altFa}}">
                <div class="cover">
                    <a href="{{route("projectInfo",["projectName"=>$item->PNameFa])}}">{{$item->PNameFa}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
