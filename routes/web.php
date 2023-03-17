<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/",[\App\Http\Controllers\FrontC\homeController::class,"index"])->name("home.index");
Route::get("/projects",[\App\Http\Controllers\FrontC\homeController::class,"projects"])->name("home.projects");
Route::get("/about",[\App\Http\Controllers\FrontC\homeController::class,"about"])->name("home.about");
Route::get("/projectInfo/{projectName}",[\App\Http\Controllers\FrontC\homeController::class,"info"])->name("projectInfo");
Route::get("/projects/{category}",[\App\Http\Controllers\FrontC\homeController::class,"categoryProjects"])->name("projects.category");
Route::post("/comment",[\App\Http\Controllers\BackC\commentController::class,"store"])->name("comment.post");

Route::prefix("/En")->group(function (){
    Route::get("/",[\App\Http\Controllers\FrontC\homeEnController::class,"index"])->name("homeEn.index");
    Route::get("/projects",[\App\Http\Controllers\FrontC\homeEnController::class,"projects"])->name("home-en.projects");
    Route::get("/about",[\App\Http\Controllers\FrontC\homeEnController::class,"about"])->name("home-en.about");
    Route::get("/projectInfo/{projectName}",[\App\Http\Controllers\FrontC\homeEnController::class,"info"])->name("projectInfoEn");
    Route::get("/projects/{category}",[\App\Http\Controllers\FrontC\homeEnController::class,"categoryProjects"])->name("projectsEn.category");
    Route::post("/commentEn",[\App\Http\Controllers\BackC\commentEnController::class,"store"])->name("comment-en.post");
});


Auth::routes(["register"=>true]);
Route::middleware("auth")->prefix("dashboard/admin")->group(function (){
   Route::resource("/panel",\App\Http\Controllers\BackC\panelController::class)->parameters(["panel"=>"id"])->name("","panel");
   Route::resource("/slider",\App\Http\Controllers\BackC\SliderController::class)->parameters(["slider"=>"id"])->name("","slider");
   Route::resource("/service",\App\Http\Controllers\BackC\ServiceController::class)->parameters(["service"=>"id"])->name("","service");
    Route::resource("/faq",\App\Http\Controllers\BackC\FaqController::class)->parameters(["faq"=>"id"])->name("","faq");
    Route::resource("/category",\App\Http\Controllers\BackC\categoryController::class)->parameters(["category"=>"id"])->name("","category");
    Route::resource("/team",\App\Http\Controllers\BackC\teamController::class)->parameters(["team"=>"id"])->name("","team");
    Route::resource("/project",\App\Http\Controllers\BackC\projectController::class)->parameters(["project"=>"id"])->name("","project");
    Route::resource("/info",\App\Http\Controllers\BackC\infoController::class)->parameters(["info"=>"id"])->name("","info");
    Route::resource("/bf",\App\Http\Controllers\BackC\bfController::class)->parameters(["bf"=>"id"])->name("","bf");
    Route::resource("/sarooj",\App\Http\Controllers\BackC\saroojController::class)->parameters(["sarooj"=>"id"])->name("","sarooj");
    Route::resource("/social",\App\Http\Controllers\BackC\socialController::class)->parameters(["social"=>"id"])->name("","social");
    Route::resource("/seo",\App\Http\Controllers\BackC\seoController::class)->parameters(["seo"=>"id"])->name("","seo");
    Route::resource("/seoEn",\App\Http\Controllers\BackC\seoEnController::class)->parameters(["seoEn"=>"id"])->name("","seoEn");
    Route::resource("/blog",\App\Http\Controllers\BackC\blogController::class)->parameters(["blog"=>"id"])->name("","blog");
    Route::resource("/general",\App\Http\Controllers\BackC\generalController::class)->parameters(["general"=>"id"])->name("","general");


    Route::resource("/comment",\App\Http\Controllers\BackC\commentController::class)->parameters(["comment"=>"id"])->name("","comment");
    Route::resource("/commentEn",\App\Http\Controllers\BackC\commentEnController::class)->parameters(["commentEn"=>"id"])->name("","commentEn");
});
