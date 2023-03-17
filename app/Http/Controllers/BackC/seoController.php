<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class seoController extends Controller
{
    public function index()
    {
        $seo=Seo::all();
        return view("backView.seo.index",compact("seo"));
    }
    public function create()
    {
        return view("backView.seo.create");
    }
    public function store(Request $request)
    {
        Seo::create([
            "page"=>$request->page,
            "title"=>$request->title,
            "description"=>$request->description,
            "keywords"=>$request->keywords,
            "author"=>$request->author,
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("seo.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $seo=Seo::findOrFail($id);
        return view("backView.seo.edit",compact("seo"));
    }
    public function update(Request $request, $id)
    {
        Seo::findOrFail($id)->update([
            "page"=>$request->page,
            "title"=>$request->title,
            "description"=>$request->description,
            "keywords"=>$request->keywords,
            "author"=>$request->author
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("seo.index");
    }
    public function destroy($id)
    {
        Seo::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("seo.index");
    }
}
