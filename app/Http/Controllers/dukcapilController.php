<?php

namespace App\Http\Controllers;

use App\halaman;
use App\berita;
use App\visit;

class dukcapilController extends Controller
{
    public function index()
    {
        $index = halaman::where('index','1')->get();
        $menu = halaman::where('index','2')->get();
        $menu2 = halaman::where('index','3')->get();
        $menu3 = halaman::where('id_index','2')->where('status','ACTIVE')->get();
        $halaman = halaman::all();
        $berita = berita::where('status','ACTIVE')->latest()->paginate(6);
        $visit = new visit();
        $visit->visit +=1;
        $visit->save();
        return view('dukcapil',['menu3' => $menu3, 'menu2' => $menu2,'halaman' => $halaman,'index' => $index,'menu' => $menu,'berita' => $berita]);
    }

    public function show($id)
    {
        $index = halaman::where('index','1')->get();
        $menu = halaman::where('index','2')->get();
        $menu2 = halaman::where('index','3')->get();
        $halaman = halaman::find($id);
        $halaman->view +=1;
        $halaman->save();
        return view('pelayanan',['halaman' => $halaman,'menu2' => $menu2,'index' => $index,'menu' => $menu]);
    }

    public function beritaIndex()
    {
        $index = halaman::where('index','1')->get();
        $menu = halaman::where('index','2')->get();
        $menu2 = halaman::where('index','3')->get();
        $berita = berita::where('status','ACTIVE')->latest()->paginate(9);
        //dd($berita);
        return view('beritaindex.index',['berita' => $berita,'menu2' => $menu2,'index' => $index,'menu' => $menu]);
    }
    public function beritaShow($id)
    {
        $index = halaman::where('index','1')->get();
        $menu = halaman::where('index','2')->get();
        $menu2 = halaman::where('index','3')->get();
        $terkait = berita::where('id','!=', $id)->where('status','ACTIVE')->latest()->paginate(6);
        $berita = berita::find($id);
        $berita->view +=1;
        $berita->save();
        return view('beritaindex.show',['berita' => $berita,'terkait' => $terkait,'menu2' => $menu2,'index' => $index,'menu' => $menu]);
    }
}
