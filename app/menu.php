<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = "menu";
    
    public function halaman()
    {
        return $this->hasMany('App\halaman');
    }
}
