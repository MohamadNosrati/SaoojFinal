<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\teamRequest;
use App\Http\Requests\teamUpdateRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return view("backView.team.index",compact("team"));
    }
    public function create()
    {
        return view("backView.team.create");
    }
    public function store(teamRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/team",$image);
        }
        Team::create([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "nameFa"=>$request->nameFa,
            "nameEn"=>$request->nameEn,
            "jobFa"=>$request->jobFa,
            "jobEn"=>$request->jobEn,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("team.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $team=Team::findOrfail($id);
        return view("backView.team.edit",compact("team"));
    }
    public function update(teamUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $categoryImage=Team::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/team/".$categoryImage)){
                unlink("images/team/".$categoryImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/team",$image);
        }else{
            $image=$categoryImage;
        }
        Team::findOrFail($id)->update([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "nameFa"=>$request->nameFa,
            "nameEn"=>$request->nameEn,
            "jobFa"=>$request->jobFa,
            "jobEn"=>$request->jobEn,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("team.index");
    }
    public function destroy($id)
    {
        $image=Team::findOrFail($id)->image;
        if (file_exists("images/team/".$image)){
            unlink("images/team/".$image);
        }
        Team::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("team.index");
    }
}
