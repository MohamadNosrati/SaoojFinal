<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\bfRequest;
use App\Http\Requests\bfUpdateRequest;
use App\Models\Bf;
use App\Models\Info;
use App\Models\Project;
use Illuminate\Http\Request;

class bfController extends Controller
{
    public function index()
    {
        $bf=Project::with("bfs")->get();
        return view("backView.bf.index",compact("bf"));
    }
    public function create()
    {
        $project=Project::pluck("PNameEn","id");
        return view("backView.bf.create",compact("project"));
    }
    public function store(bfRequest $request)
    {
        $fileBefore=$request->file("imageBefore");
        $imageBefore="";
        if (!empty($fileBefore)){
            $imageBefore=md5(time()).".".$fileBefore->getClientOriginalExtension();
            $fileBefore->move("images/bf",$imageBefore);
        }
        $fileAfter=$request->file("imageAfter");
        $imageAfter="";
        if (!empty($fileAfter)){
            $imageAfter=sha1($fileAfter).".".$fileAfter->getClientOriginalExtension();
            $fileAfter->move("images/bf",$imageAfter);
        }
        $infoId=Project::with("info")->where("id","=",$request->project)->first()->info->id;
        Bf::create([
            "imageBefore"=>$imageBefore,
            "imageAfter"=>$imageAfter,
            "altBeforeFa"=>$request->altBeforeFa,
            "altBeforeEn"=>$request->altBeforeEn,
            "altAfterFa"=>$request->altAfterFa,
            "altAfterEn"=>$request->altAfterEn,
            "info_id"=>$infoId,
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("bf.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $project=Project::pluck("PNameEn","id");
        $bf=Bf::findOrFail($id);
        return view("backView.bf.edit",compact("bf","project"));
    }
    public function update(bfUpdateRequest $request, $id)
    {
        $fileBefore=$request->file("imageBefore");
        $bfBeforeImage=Bf::findOrFail($id)->imageBefore;
        $imageBefore="";
        if (!empty($fileBefore)){
            if (file_exists("images/bf/".$bfBeforeImage)){
                unlink("images/bf/".$bfBeforeImage);
            }
            $imageBefore=md5(time()).".".$fileBefore->getClientOriginalExtension();
            $fileBefore->move("images/bf",$imageBefore);
        }else{
            $imageBefore=$bfBeforeImage;
        }
        $fileAfter=$request->file("imageAfter");
        $bfAfterImage=Bf::findOrFail($id)->imageAfter;
        $imageAfter="";
        if (!empty($fileAfter)){
            if (file_exists("images/bf/".$bfAfterImage)){
                unlink("images/bf/".$bfAfterImage);
            }
            $imageAfter=sha1($fileAfter).".".$fileAfter->getClientOriginalExtension();
            $fileAfter->move("images/bf",$imageAfter);
        }else{
            $imageAfter=$bfAfterImage;
        }
        $infoId=Project::with("info")->where("id","=",$request->project)->first()->info->id;
        Bf::findOrFail($id)->update([
            "imageBefore"=>$imageBefore,
            "imageAfter"=>$imageAfter,
            "altBeforeFa"=>$request->altBeforeFa,
            "altBeforeEn"=>$request->altBeforeEn,
            "altAfterFa"=>$request->altAfterFa,
            "altAfterEn"=>$request->altAfterEn,
            "info_id"=>$infoId,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("bf.index");
    }
    public function destroy($id)
    {
        $imageBefore=Bf::findOrFail($id)->imageBefore;
        if (file_exists("images/bf/".$imageBefore)){
            unlink("images/bf/".$imageBefore);
        }
        $imageAfter=Bf::findOrFail($id)->imageAfter;
        if (file_exists("images/bf/".$imageAfter)){
            unlink("images/bf/".$imageAfter);
        }
        Bf::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("bf.index");
    }
}
