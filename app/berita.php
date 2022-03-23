<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = "berita";

    public function user()
    {
        return $this->belongsTo('App\User','created_by');
    }

    public function kategori()
    {
        return $this->belongsTo('App\kategori','id_kategori');
    }
}
