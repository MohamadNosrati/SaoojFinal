<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function project(){
        return $this->belongsTo(Project::class,"project_id");
    }
    public function bfs(){
        return $this->hasMany(Bf::class,"info_id");
    }
}
