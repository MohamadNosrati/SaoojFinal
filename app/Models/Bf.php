<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\In;

class Bf extends Model
{
    use HasFactory;
    protected $guarded=["id"];
    public function info(){
        return $this->belongsTo(Info::class,"info_id");
    }
    public function project(){

    }
}
