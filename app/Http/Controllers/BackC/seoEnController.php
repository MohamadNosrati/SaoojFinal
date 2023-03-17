<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\seoRequest;
use App\Http\Requests\seoUpdateRequest;
use App\Models\seoEn;
use Illuminate\Http\Request;

class seoEnController extends Controller
{
    public function index()
    {
        $seo=seoEn::all();
        return view("backView.seoEn.index",compact("seo"));
    }
    public function create()
    {
        return view("backView.seoEn.create");
    }
    public function store(seoRequest $request)
    {
        seoEn::create([
            "page"=>$request->page,
            "title"=>$request->title,
            "description"=>$request->description,
            "keywords"=>$request->keywords,
            "author"=>$request->author,
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("seoEn.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $seo=seoEn::findOrFail($id);
        return view("backView.seoEn.edit",compact("seo"));
    }
    public function update(seoUpdateRequest $request, $id)
    {
        seoEn::findOrFail($id)->update([
            "page"=>$request->page,
            "title"=>$request->title,
            "description"=>$request->description,
            "keywords"=>$request->keywords,
            "author"=>$request->author
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("seoEn.index");
    }
    public function destroy($id)
    {
        seoEn::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("seoEn.index");
    }
}
