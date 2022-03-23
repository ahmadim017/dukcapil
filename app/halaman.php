<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class halaman extends Model
{
    protected $table = "halaman";

    public function index()
    {
        return $this->belongsTo('App\index','id_index');
    }
    public function menu()
    {
        return $this->belongsTo('App\menu','id_menu');
    }
    public function halamanindex()
    {
        return $this->belongsTo('App\halamanindex','id_halaman');
    }
}
