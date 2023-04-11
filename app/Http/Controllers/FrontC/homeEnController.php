<?php

namespace App\Http\Controllers\FrontC;

use App\Http\Controllers\Controller;
use App\Models\CommentEn;
use App\Models\Seo;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Sarooj;
use App\Models\seoEn;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Project;
use App\Models\General;
use App\Models\Info;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Morilog\Jalali\CalendarUtils;

class homeEnController extends Controller
{
    public function EnglishVisitorIp(){
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
    public function index(){
        $seo=seoEn::all()->where("page","=","Home English")->first();
        $slider=Slider::all();
        $category=Category::all();
        $service=Service::all();
        $faq=Faq::all();
        $team=Team::all();
        $sarooj=Sarooj::first();
        $general=General::first();
        $this->EnglishVisitorIp();
        return view("FrontView.En.indexEn",compact("slider","category","service","faq","team","sarooj","general","seo"));
    }
    public function projects(){
        $seo=seoEn::all()->where("page","=","Projects English")->first();
        $general=General::first();
        $category=Category::all();
        $sarooj=Sarooj::first();
        $project=Project::paginate(6);
        $this->EnglishVisitorIp();
        return view("FrontView.En.projectsEn",compact("sarooj",'project',"category","general","seo"));
    }
    public function about(){
        $seo=SeoEn::all()->where("page","=","About English")->first();
        $category=Category::all();
        $sarooj=Sarooj::first();
        $blog=Blog::all();
        $comment=CommentEn::orderBy("id","desc")->take(3)->where("publish","=",1)->get();
        $this->EnglishVisitorIp();
        return view("FrontView.En.aboutEn",compact("sarooj","blog","category","seo","comment"));
    }
    public function info($projectName){

        $projectCat=Project::with("category")->where("PNameEn","=",$projectName)->first()->category->nameEn;
        $seo=seoEn::all()->where("page","=","Project Details English")->first();
        $category=Category::all();
        $projectId=Project::pluck("id","PNameEn")[$projectName];
        $project=Project::with("info")->find($projectId);
        $startEn="";
        if (!empty($project->info)){
            $startEn=CalendarUtils::createCarbonFromFormat("Y-m-d",$project->info->startFa)->format("Y-m-d");
        }
        $endEn="";
        if (!empty($project->info)){
            $endEn=CalendarUtils::createCarbonFromFormat("Y-m-d",$project->info->endFa)->format("Y-m-d");
        }
        $bfs=Project::with("bfs")->find($projectId);
        $sarooj=Sarooj::first();
        $lp=Project::orderBy("id","desc")->take(3)->where("publish","=","1")->get();
        $this->EnglishVisitorIp();
        return view("FrontView.En.detailsEn",compact("sarooj","lp","project","bfs","category","seo","projectCat","startEn","endEn"));
    }
    public function categoryProjects($categoryName){
        $seo=seoEn::all()->where("page","=","Projects English")->first();
        $general=General::first();
        $category=Category::all();
        $categoryId=Category::pluck("id","nameEn")[$categoryName];
        $project=Project::where("category_id","=",$categoryId)->paginate(6);
        $sarooj=Sarooj::first();
        $this->EnglishVisitorIp();
        return view("FrontView.En.projectsEn",compact("general","sarooj","project","category","seo"));
    }
}
