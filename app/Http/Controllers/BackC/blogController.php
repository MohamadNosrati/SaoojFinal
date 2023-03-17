<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogRequest;
use App\Http\Requests\blogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $blog=Blog::all();
        return view("backView.blog.index",compact("blog"));
    }
    public function create()
    {
        return view("backView.blog.create");
    }
    public function store(blogRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/blog",$image);
        }
        Blog::create([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn,
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("blog.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $blog=Blog::findOrFail($id);
        return view("backView.blog.edit",compact("blog"));
    }
    public function update(blogUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $blogImage=Blog::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/blog/".$blogImage)){
                unlink("images/blog/".$blogImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/blog",$image);
        }else{
            $image=$blogImage;
        }
        Blog::findOrFail($id)->update([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("blog.index");
    }
    public function destroy($id)
    {
        $image=Blog::findOrFail($id)->image;
        if (file_exists("images/blog/".$image)){
            unlink("images/blog/".$image);
        }
        Blog::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("blog.index");
    }
}
