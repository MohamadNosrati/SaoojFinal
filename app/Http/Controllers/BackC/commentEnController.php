<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\commentEnRequest;
use App\Models\Comment;
use App\Models\CommentEn;
use Illuminate\Http\Request;

class commentEnController extends Controller
{
    public function index()
    {
        $comment=CommentEn::all();
        return view("backView.commentEn.index",compact("comment"));
    }
    public function create()
    {
        //
    }
    public function store(commentEnRequest $request)
    {
        CommentEn::create([
            "name"=>$request->fullName,
            "email"=>$request->email,
            "text"=>$request->text
        ]);
        return 1;
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $comment=CommentEn::findOrFail($id);
        return view("backView.commentEn.edit",compact("comment"));
    }
    public function update(Request $request, $id)
    {
        CommentEn::findOrFail($id)->update([
            "publish"=>$request->publish,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("commentEn.index");
    }
    public function destroy($id)
    {
        CommentEn::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("commentEn.index");
    }
}
