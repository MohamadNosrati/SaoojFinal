<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\faqRequest;
use App\Http\Requests\faqUpdateRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq=Faq::all();
        return view("backView.faq.index",compact("faq"));
    }
    public function create()
    {
        return view("backView.faq.create");
    }
    public function store(faqRequest $request)
    {
        $file=$request->file("image");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/faq",$image);
        }
        Faq::create([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "questionFa"=>$request->questionFa,
            "questionEn"=>$request->questionEn,
            "answerFa"=>$request->answerFa,
            "answerEn"=>$request->answerEn,
            "publish"=>$request->publish
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("faq.create");
    }
    public function show(Faq $faq)
    {
        //
    }
    public function edit($id)
    {
        $faq=Faq::findOrFail($id);
        return view("backView.faq.edit",compact("faq"));
    }
    public function update(faqUpdateRequest $request, $id)
    {
        $file=$request->file("image");
        $faqImage=Faq::findOrFail($id)->image;
        $image="";
        if (!empty($file)){
            if (file_exists("images/faq/".$faqImage)){
                unlink("images/faq/".$faqImage);
            }
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/faq",$image);
        }else{
            $image=$faqImage;
        }
        Faq::findOrFail($id)->update([
            "image"=>$image,
            "altFa"=>$request->altFa,
            "altEn"=>$request->altEn,
            "questionFa"=>$request->questionFa,
            "questionEn"=>$request->questionEn,
            "answerFa"=>$request->answerFa,
            "answerEn"=>$request->answerEn,
            "publish"=>$request->publish
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("faq.index");
    }
    public function destroy($id)
    {
        $image=Faq::findOrFail($id)->image;
        if (file_exists("images/faq/".$image)){
            unlink("images/faq/".$image);
        }
        Faq::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("faq.index");
    }
}
