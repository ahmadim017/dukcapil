<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "kategori";

    public function berita()
    {
        return $this->hasMany('App\berita');
    }
}
