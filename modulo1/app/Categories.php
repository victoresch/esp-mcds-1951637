<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'id','name','description'
    ];
    public function articles(){
        return $this->hasMany('App\Article');
    }
}
