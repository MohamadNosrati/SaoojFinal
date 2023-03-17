<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\socialRequest;
use App\Http\Requests\socialUpdateRequest;
use App\Models\Service;
use App\Models\Social;
use App\Models\Team;
use Illuminate\Http\Request;

class socialController extends Controller
{
    public function index()
    {
        $social=Social::with("team")->get();
        return view("backView.social.index",compact("social"));
    }
    public function create()
    {
        $team=Team::pluck("NameEn","id");
        return view("backView.social.create",compact("team"));
    }
    public function store(socialRequest $request)
    {
        Social::create([
            "link"=>$request->link,
            "icon"=>$request->icon,
            "team_id"=>$request->team_id
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("social.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $social=Social::findOrFail($id);
        $team=Team::pluck("nameEn");
        return view("backView.social.edit",compact("social","team"));
    }
    public function update(socialUpdateRequest $request, $id)
    {
        Social::findOrFail($id)->update([
            "link"=>$request->link,
            "icon"=>$request->icon,
            "team_id"=>$request->team_id
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("social.index");
    }
    public function destroy($id)
    {
        Social::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("social.index");
    }
}
