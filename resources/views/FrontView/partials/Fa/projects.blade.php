<div class="picture">
    <img src="{{asset("images/general/".$general->projectsImage)}}" alt="{{$general->altProjectsImageFa}}">
    <h1>پروژه ها</h1>
</div>
<!-- ***** End top Pic ***** -->
<!-- ***** start projects ***** -->
<div class="projects projectsLightBg dark:projectsDarkBg">
    @foreach($project as $item)
        @if($item->publish===1)
            <div class="project">
                <a href="{{route("projectInfo",["projectName"=>$item->PNameFa])}}"></a>
                <img src="{{asset("images/project/".$item->image)}}" alt="{{$item->altFa}}">
                <div class="cover">
                    <a href="{{route("projectInfo",["projectName"=>$item->PNameFa])}}">{{$item->PNameFa}}</a>
                </div>
            </div>
        @endif
    @endforeach
        {{  $project->links()  }}
</div>
