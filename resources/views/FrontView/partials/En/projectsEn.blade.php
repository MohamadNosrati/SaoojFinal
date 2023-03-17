<!-- ***** start top Pic ***** -->
<div class="picture">
    <img src="{{asset("images/general/".$general->projectsImage)}}" alt="{{$general->altProjectsImageEn}}">
    <h1>projects</h1>
</div>
<!-- ***** End top Pic ***** -->
<!-- ***** start projects ***** -->
<div class="projects projectsLightBg dark:projectsDarkBg">
    @foreach($project as $item)
        @if($item->publish===1)
            <div class="project">
                <a href="{{route("projectInfoEn",["projectName"=>$item->PNameEn])}}"></a>
                <img src="{{asset("images/project/".$item->image)}}" alt="{{$item->altEn}}">
                <div class="cover">
                    <a href="{{route("projectInfoEn",["projectName"=>$item->PNameEn])}}">{{$item->PNameEn}}</a>
                </div>
            </div>
        @endif
    @endforeach
        {{  $project->links()  }}
</div>
<!-- ***** End projects ***** -->
