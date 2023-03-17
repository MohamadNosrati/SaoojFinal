<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function category(){
        return $this->belongsTo(Category::class,"category_id");
    }
    public function info(){
        return $this->hasOne(Info::class,"project_id");
    }
    public function bfs(){
        return $this->hasManyThrough(Bf::class,Info::class);
    }
}
