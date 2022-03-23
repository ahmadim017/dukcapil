<?php

namespace App\Http\Controllers;

use App\halaman;
use App\berita;
use App\visit;
use Illuminate\Support\Facades\DB;
class dashController extends Controller
{
    public function index()
    {
        $pelayanan = halaman::where('id_index','2')->where('status','ACTIVE')->get();
        $data = [];
        foreach ($pelayanan as $p) {
            $data[] = [$p->halaman,$p->view];
        }
        $beritaI = DB::table('berita')->leftJoin('kategori','berita.id_kategori','=','kategori.id')
        ->select('kategori.kategori', DB::raw('count(*) as total, kategori'))->groupBy('kategori.kategori')->get();
        $databerita = [];
        $total = [];
        foreach ($beritaI as $b) {
            $databerita[] = [$b->kategori, $b->total];
        }
        $layanan = halaman::where('id_index','2')->sum('view');
        $berita = berita::sum('view');
        $visitor = visit::sum('visit');
        
        return view('dash.index',['databerita' => $databerita, 'visitor' => $visitor,'berita' => $berita,'data' => $data,'layanan' => $layanan]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
