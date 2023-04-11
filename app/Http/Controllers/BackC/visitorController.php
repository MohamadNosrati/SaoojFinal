<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class visitorController extends Controller
{
    public function index()
    {
        $visitorCount=Visitor::all()->count();
        $visitor=Visitor::all();
        return view("backView.visitor.index",compact("visitor","visitorCount"));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
