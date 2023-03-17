<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\sliderUpdateRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class SliderController extends Controller
{
    public function index()
    {
        $slider=Slider::all();
        return view("backView.slider.index",compact("slider"));
    }
    public function create()
    {
        return view("backView.slider.create");
    }
    public function store(SliderRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/slider",$image);
        }
        Slider::create([
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
        return redirect()->route("slider.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $slider=Slider::findOrFail($id);
        return view("backView.slider.edit",compact("slider"));
    }
    public function update(sliderUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $sliderImage=Slider::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/slider/".$sliderImage)){
                unlink("images/slider/".$sliderImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/slider",$image);
        }else{
            $image=$sliderImage;
        }
        Slider::findOrFail($id)->update([
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
        return redirect()->route("slider.index");
    }
    public function destroy($id)
    {
        $image=Slider::findOrFail($id)->image;
        if (file_exists("images/slider/".$image)){
            unlink("images/slider/".$image);
        }
        Slider::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("slider.index");
    }
}
