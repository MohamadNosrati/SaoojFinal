<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Http\Requests\categoryUpdateRequest;
use App\Models\Bf;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class categoryController extends Controller
{
    public function index()
    {
        $category=Category::all();
        return view("backView.category.index",compact("category"));
    }
    public function create()
    {
        return view("backView.category.create");
    }
    public function store(categoryRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/category",$image);
        }
        Category::create([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "nameFa"=>$request->nameFa,
            "nameEn"=>$request->nameEn,
            "publish"=>$request->publish
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("category.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view("backView.category.edit",compact("category"));
    }
    public function update(categoryUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $categoryImage=Category::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/category/".$categoryImage)){
                unlink("images/category/".$categoryImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/category",$image);
        }else{
            $image=$categoryImage;
        }
        Category::findOrFail($id)->update([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "nameFa"=>$request->nameFa,
            "nameEn"=>$request->nameEn,
            "publish"=>$request->publish
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("category.index");
    }
    public function destroy($id)
    {
        $projectsImage = Project::all()->where("category_id", "=", $id);
        foreach ($projectsImage as $item) {
            if (file_exists("images/project/" . $item->image)) {
                unlink("images/project/" . $item->image);
            }
        }
         $info=Category::findOrFail($id)->info;
         foreach ($info as $item){
             $bfRecords=Bf::all()->where("info_id","=",$item->id);
             foreach ($bfRecords as $bfRecord){
                 if (fileExists("images/bf/".$bfRecord->imageBefore)){
                     unlink("images/bf/".$bfRecord->imageBefore);
                 }
                 if (fileExists("images/bf/".$bfRecord->imageAfter)){
                     unlink("images/bf/".$bfRecord->imageAfter);
                 }
             }
         }
        $image = Category::findOrFail($id)->image;
        if (file_exists("images/category/".$image)) {
            unlink("images/category/".$image);
        }
        Category::destroy($id);
        session()->flash("delete", "your record has deleted successfully!");
        return redirect()->route("category.index");
    }
}
