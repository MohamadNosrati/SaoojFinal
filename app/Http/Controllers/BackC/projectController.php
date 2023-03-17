<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\projectRequest;
use App\Http\Requests\projectUpdateRequest;
use App\Models\Bf;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        $project=Project::with("category")->get();
        return view("backView.project.index",compact("project"));
    }
    public function create()
    {
        $category=Category::pluck("nameEn","id");
        return view("backView.project.create",compact("category"));
    }
    public function store(projectRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/project",$image);
        }
        Project::create([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "PNameFa"=>$request->PNameFa,
            "PNameEn"=>$request->PNameEn,
            "publish"=>$request->publish,
            "category_id"=>$request->category_id
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("project.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $category=Category::pluck("nameFa","id");
        $project=Project::findOrFail($id);
        return view("backView.project.edit",compact("project","category"));
    }
    public function update(projectUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $projectImage=Project::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/project/".$projectImage)){
                unlink("images/project/".$projectImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/project",$image);
        }else{
            $image=$projectImage;
        }
        Project::findOrFail($id)->update([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "PNameFa"=>$request->PNameFa,
            "PNameEn"=>$request->PNameEn,
            "publish"=>$request->publish,
            "category_id"=>$request->category_id
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("project.index");
    }
    public function destroy($id)
    {
        $infoId=Project::findOrFail($id)->info->id;
        $bfImages=Bf::all()->where("info_id","=",$infoId);
        foreach ($bfImages as $item){
            if (file_exists("images/bf/".$item->ImageBefore)){
                unlink("images/bf/".$item->imageBefore);
            }
            if (file_exists("images/bf/".$item->imageAfter)){
                unlink("images/bf/".$item->imageAfter);
            }
        }
        $image=Project::findOrFail($id)->image;
        if (file_exists("images/project/".$image)){
            unlink("images/project/".$image);
        }
        Project::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("project.index");
    }
}
