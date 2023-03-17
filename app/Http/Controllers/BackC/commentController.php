<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\commentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function index()
    {
        $comment=Comment::all();
        return view("backView.comment.index",compact("comment"));
    }
    public function create()
    {
        //
    }
    public function store(commentRequest $request)
    {
        Comment::create([
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
        $comment=Comment::findOrFail($id);
        return view("backView.comment.edit",compact("comment"));
    }
    public function update(Request $request, $id)
    {
        Comment::findOrFail($id)->update([
            "publish"=>$request->publish,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("comment.index");
    }
    public function destroy($id)
    {
        Comment::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("comment.index");
    }
}
