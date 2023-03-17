<?php

namespace App\Http\Controllers\BackC;

use App\Http\Controllers\Controller;
use App\Http\Requests\generalRequest;
use App\Http\Requests\generalUpdateRequest;
use App\Models\General;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function index()
    {
        $general=General::all();
        return view("backView.general.index",compact("general"));
    }
    public function create()
    {
        return view("backView.general.create");
    }
    public function store(generalRequest $request)
    {
        $ServiceFile=$request->file("serviceImage");
        $serviceImage="";
        if (!empty($ServiceFile)){
            $serviceImage=md5(time()).".".$ServiceFile->getClientOriginalExtension();
            $ServiceFile->move("images/general",$serviceImage);
        }
        $ProjectsFile=$request->file("projectsImage");
        $projectsImage="";
        if (!empty($ProjectsFile)){
            $projectsImage=sha1($ProjectsFile).".".$ProjectsFile->getClientOriginalExtension();
            $ProjectsFile->move("images/general",$projectsImage);
        }
        General::create([
            "ServiceImage"=>$serviceImage,
            "projectsImage"=>$projectsImage,
            "altServiceImageFa"=>$request->altServiceImageFa,
            "altServiceImageEn"=>$request->altServiceImageEn,
            "altProjectsImageFa"=>$request->altProjectsImageFa,
            "altProjectsImageEn"=>$request->altProjectsImageEn,
        ]);
        session()->flash("create","your record created successfully!");
        return redirect()->route("general.create");
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $general=General::findOrFail($id);
        return view("backView.general.edit",compact("general"));
    }
    public function update(generalUpdateRequest $request, $id)
    {
        $ServiceFile=$request->file("serviceImage");
        $previousServiceImage=General::findOrFail($id)->ServiceImage;
        $ServiceImage="";
        if (!empty($ServiceFile)){
            if (file_exists("images/general/".$previousServiceImage)){
                unlink("images/general/".$previousServiceImage);
            }
            $ServiceImage=md5(time()).".".$ServiceFile->getClientOriginalExtension();
            $ServiceFile->move("images/general",$ServiceImage);
        }else{
            $ServiceImage=$previousServiceImage;
        }
        $ProjectsFile=$request->file("projectsImage");
        $previousProjectsImage=General::findOrFail($id)->projectsImage;
        $ProjectsImage="";
        if (!empty($ProjectsFile)){
            if (file_exists("images/general/".$previousProjectsImage)){
                unlink("images/general/".$previousProjectsImage);
            }
            $ProjectsImage=sha1($ProjectsFile).".".$ProjectsFile->getClientOriginalExtension();
            $ProjectsFile->move("images/general",$ProjectsImage);
        }else{
            $ProjectsImage=$previousProjectsImage;
        }
        General::findOrFail($id)->update([
            "ServiceImage"=>$ServiceImage,
            "projectsImage"=>$ProjectsImage,
            "altServiceImageFa"=>$request->altServiceImageFa,
            "altServiceImageEn"=>$request->altServiceImageEn,
            "altProjectsImageFa"=>$request->altProjectsImageFa,
            "altProjectsImageEn"=>$request->altProjectsImageEn,
        ]);
        session()->flash("update","your record updated successfully!");
        return redirect()->route("general.index");
    }
    public function destroy($id)
    {
        $ServiceImage=General::findOrFail($id)->ServiceImage;
        if (file_exists("images/general/".$ServiceImage)){
            unlink("images/general/".$ServiceImage);
        }
        $projectsImage=General::findOrFail($id)->projectsImage;
        if (file_exists("images/general/".$projectsImage)){
            unlink("images/general/".$projectsImage);
        }
        General::destroy($id);
        session()->flash("delete","your record has deleted successfully!");
        return redirect()->route("general.index");
    }
}
