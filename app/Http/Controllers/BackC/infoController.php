<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\infoRequest;
use App\Http\Requests\infoUpdateRequest;
use App\Models\Info;
use App\Models\Project;
use App\Models\Bf;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function index()
    {
        $info=Info::with("project")->get();
        return view("backView.info.index",compact("info"));
    }
    public function create()
    {
        $project=Project::pluck("PNameFa","id");
        return view("backView.info.create",compact("project"));
    }
    public function store(infoRequest $request)
    {
        Info::create([
            "video_id"=>$request->videoId,
            "video"=>$request->video,
            "project_id"=>$request->project_id,
            "startFa"=>$request->startFa,
            "endFa"=>$request->endFa,
            "area"=>$request->area,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("info.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $info=Info::findOrFail($id);
        $project=Project::pluck("PNameFa","id");
        return view("backView.info.edit",compact("project","info"));
    }
    public function update(infoUpdateRequest $request, $id)
    {
        Info::findOrFail($id)->update([
            "video_id"=>$request->videoId,
            "video"=>$request->video,
            "project_id"=>$request->project_id,
            "startFa"=>$request->startFa,
            "endFa"=>$request->endFa,
            "area"=>$request->area,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("info.index");
    }
    public function destroy($id)
    {
        $bfImages=Bf::all()->where("info_id","=",$id);
        foreach ($bfImages as $item){
            if (file_exists("images/bf/".$item->ImageBefore)){
                unlink("images/bf/".$item->imageBefore);
            }
            if (file_exists("images/bf/".$item->imageAfter)){
                unlink("images/bf/".$item->imageAfter);
            }
        }
        Info::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("info.index");
    }
}
