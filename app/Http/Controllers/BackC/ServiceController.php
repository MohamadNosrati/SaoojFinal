<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\serviceRequest;
use App\Http\Requests\serviceUpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service=Service::all();
        return view("backView.service.index",compact("service"));
    }
    public function create()
    {
        return view("backView.service.create");
    }
    public function store(serviceRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/service",$image);
        }
        Service::create([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "titleFa"=>$request->titleFa,
            "titleEn"=>$request->titleEn,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn,
            "publish"=>$request->publish
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("service.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $service=Service::findOrFail($id);
        return view("backView.service.edit",compact("service"));
    }
    public function update(serviceUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $serviceImage=Service::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/service/".$serviceImage)){
                unlink("images/service/".$serviceImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/service",$image);
        }else{
            $image=$serviceImage;
        }
        Service::findOrFail($id)->update([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "titleFa"=>$request->titleFa,
            "titleEn"=>$request->titleEn,
            "textFa"=>$request->textFa,
            "textEn"=>$request->textEn,
            "publish"=>$request->publish
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("service.index");
    }
    public function destroy($id)
    {
        $image=Service::findOrFail($id)->image;
        if (file_exists("images/service/".$image)){
            unlink("images/service/".$image);
        }
        Service::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("service.index");
    }
}
