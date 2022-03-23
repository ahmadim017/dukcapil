<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class halamanindex extends Model
{
    protected $table = "halamanindex";

    public function halaman()
    {
        return $this->hasMany('App\halaman');
    }
}
