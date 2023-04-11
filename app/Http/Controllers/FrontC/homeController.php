<?php

namespace App\Http\Controllers\FrontC;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\General;
use App\Models\Info;
use App\Models\Project;
use App\Models\Sarooj;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
class homeController extends Controller
{
    public function PersianVisitorIp(){
        if (!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip=$_SERVER["HTTP_CLIENT_IP"];
        }elseif (!empty($_SERVER["HTTP_X_FORWARDED_For"])){
            $ip=$_SERVER["HTTP_X_FORWARDED_For"];
        }else{
            $ip=$_SERVER["REMOTE_ADDR"];
        }
        $check=Visitor::all()->where("Ip","=",$ip)->count();
        if ($check===0){
            $country=geoip()->getLocation($ip)->country;
            $city=geoip()->getLocation($ip)->city;
            Visitor::create([
                "Ip"=>$ip,
                "country"=>$country,
                "city"=>$city
            ]);
        }
    }
    public function index()
    {
        $slider=Slider::all();
        $category=Category::all();
        $service=Service::all();
        $faq=Faq::all();
        $team=Team::with("socials")->get();
        $sarooj=Sarooj::first();
        $general=General::first();
        $seo=Seo::all()->where("page","=","Home Persian")->first();
        $this->PersianVisitorIp();
        return view("FrontView.Fa.index",compact("slider","category","service","faq","team","sarooj","general","seo"));
    }
    public function projects(){
        $seo=Seo::all()->where("page","=","Projects Persian")->first();
        $category=Category::all();
        $sarooj=Sarooj::first();
        $project=Project::paginate(6);
        $general=General::first();
        $this->PersianVisitorIp();
        return view("FrontView.Fa.projectsFa",compact("sarooj",'project',"category","general","seo"));
    }
    public function about(){
        $comment=Comment::orderBy("id","desc")->take(3)->where("publish","=",1)->get();
        $seo=Seo::all()->where("page","=","About Persian")->first();
        $category=Category::all();
        $sarooj=Sarooj::first();
        $blog=Blog::all();
        $this->PersianVisitorIp();
        return view("FrontView.Fa.aboutFa",compact("sarooj","blog","category","seo","comment"));
    }
    public function info($projectName){
        $category=Category::all();
        $projectCat=Project::with("category")->where("PNameFa","=",$projectName)->first()->category->nameFa;
        $seo=Seo::all()->where("page","=","Project Details Persian")->first();
        $projectId=Project::pluck("id","PNameFa")[$projectName];
        $project=Project::with("info")->find($projectId);
        $bfs=Project::with("bfs")->find($projectId);
        $sarooj=Sarooj::first();
        $lp=Project::orderBy("id","desc")->take(3)->where("publish","=","1")->get();
        $this->PersianVisitorIp();
        return view("FrontView.Fa.detailsFa",compact("sarooj","lp","project","bfs","seo","category","projectCat"));
    }
    public function categoryProjects($categoryName){
        $seo=Seo::all()->where("page","=","Projects Persian")->first();
        $category=Category::all();
        $general=General::first();
        $categoryId=Category::pluck("id","nameFa")[$categoryName];
        $project=Project::where("category_id","=",$categoryId)->paginate(6);
        $sarooj=Sarooj::first();
        $this->PersianVisitorIp();
        return view("FrontView.Fa.projectsFa",compact("sarooj","project","category","general","seo"));
    }
}
