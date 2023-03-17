<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class panelController extends Controller
{
    public function index()
    {
        return view("backView.panel.index");
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
