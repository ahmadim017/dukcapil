<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class index extends Model
{
    protected $table = "index";

    public function halaman()
    {
        return $this->hasMany('App\halaman');
    }
}
