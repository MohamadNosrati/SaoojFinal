<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\saroojRequest;
use App\Http\Requests\saroojUpdateRequest;
use App\Models\Sarooj;
use Illuminate\Http\Request;

class saroojController extends Controller
{
    public function index()
    {
        $sarooj=Sarooj::all();
        return view("backView.sarooj.index",compact("sarooj"));
    }
    public function create()
    {
        return view("backView.sarooj.create");
    }
    public function store(saroojRequest $request)
    {
        $file=$request->file("logo");
        $image="";
        if (!empty($file)){
            $image=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/sarooj",$image);
        }
        Sarooj::create([
            "logo"=>$image,
            "altLogoFa"=>$request->altLogoFa,
            "altLogoEn"=>$request->altLogoEn,
            "email"=>$request->email,
            "phone1"=>$request->phone1,
            "phone2"=>$request->phone2,
            "telegram"=>$request->telegram,
            "instagram"=>$request->instagram,
            "linkin"=>$request->linkin,
            "addressFa"=>$request->addressFa,
            "addressEn"=>$request->addressEn,
            "blogFa"=>$request->blogFa,
            "blogEn"=>$request->blogEn,
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("sarooj.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $sarooj=Sarooj::findOrFail($id);
        return view("backView.sarooj.edit",compact("sarooj"));
    }
    public function update(saroojUpdateRequest $request, $id)
    {
        $file=$request->file("logo");
        $saroojLogo=Sarooj::findOrFail($id)->logo;
        $logo="";
        if (!empty($file)){
            if (file_exists("images/sarooj/".$saroojLogo)){
                unlink("images/sarooj/".$saroojLogo);
            }
            $logo=md5(time()).".".$file->getClientOriginalExtension();
            $file->move("images/sarooj",$logo);
        }else{
            $logo=$saroojLogo;
        }
        Sarooj::findOrFail($id)->update([
            "logo"=>$logo,
            "altLogoFa"=>$request->altLogoFa,
            "altLogoEn"=>$request->altLogoEn,
            "email"=>$request->email,
            "phone1"=>$request->phone1,
            "phone2"=>$request->phone2,
            "telegram"=>$request->telegram,
            "instagram"=>$request->instagram,
            "linkin"=>$request->linkin,
            "addressFa"=>$request->addressFa,
            "addressEn"=>$request->addressEn,
            "blogFa"=>$request->blogFa,
            "blogEn"=>$request->blogEn,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("sarooj.index");
    }
    public function destroy($id)
    {
        Sarooj::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("sarooj.index");
    }
}
