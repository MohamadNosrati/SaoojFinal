<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function projects(){
        return $this->hasMany(Project::class,"category_id");
    }
    public function info(){
        return $this->hasManyThrough(Info::class,Project::class);
    }
}
