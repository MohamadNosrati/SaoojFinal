@if(!empty($project->info) and !empty($project->info->video))
<div class="videoProject bg-[#1D1D1D]">
    <div id="{{$project->info->video_id}}"><script type="text/JavaScript" src="{{$project->info->video}}"></script></div>
</div>
@endif
