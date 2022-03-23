<?php

namespace App\Http\Controllers;

use App\halaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class halamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halaman = halaman::all();
        return view('halaman.index',['halaman' => $halaman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $index = halaman::where('index','1')->get();
        $menu = halaman::where('index','2')->get();
        $halamanindex = halaman::where('index','3')->get();
        return view('halaman.create',['index' => $index,'menu' => $menu,'halamanindex' => $halamanindex]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "foto" => "image|mimes:jpeg,png,jpg,gif,svg|max:5048"
        ])->validated();

        $halaman = new halaman();
        $halaman->index = $request->get('index');
        $halaman->halaman = $request->get('halaman');
        $halaman->isi = $request->get('isi');
        $halaman->keterangan = $request->get('keterangan');
        $halaman->status = 'INACTIVE';
        $halaman->id_index = $request->get('id_index');
        $halaman->id_menu = $request->get('id_menu');
        $halaman->id_halaman = $request->get('id_halaman');
        $halaman->link = $request->get('link');
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('foto','public');
            $halaman->foto = $file;
            $halaman->tittle = $request->file('foto')->getClientOriginalName();
        }
        $halaman->save();
        return redirect()->route('halaman.index')->with('status','Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $index = halaman::where('index','1')->get();
        $menu = halaman::where('index','2')->get();
        $halamanindex = halaman::where('index','3')->get();
        $halaman = halaman::find($id);
        return view('halaman.edit',['halaman' => $halaman,'index' => $index,'menu' => $menu,'halamanindex' => $halamanindex]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(),[
            "id_index" => "required",
            "isi" => "required|min:5",
            "foto" => "image|mimes:jpeg,png,jpg,gif,svg|max:5048"
        ])->validated();

        $halaman = halaman::find($id);
        $halaman->id_index = $request->get('id_index');
        $halaman->id_menu = $request->get('id_menu');
        $halaman->id_halaman = $request->get('id_halaman');
        $halaman->halaman = $request->get('halaman');
        $halaman->isi = $request->get('isi');
        $halaman->keterangan = $request->get('keterangan');
        $halaman->status = $request->get('status');
        $halaman->link = $request->get('link');
        if ($request->file('foto')) {

            if ($halaman->foto && file_exists(storage_path('app/public/'.$halaman->foto))){
                Storage::delete('public/'.$halaman->foto);
            }
            $file = $request->file('foto')->store('foto','public');
            $halaman->foto = $file;
            $halaman->tittle = $request->file('foto')->getClientOriginalName();
        }
        $halaman->save();
        return redirect()->route('halaman.index')->with('status','Data Berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function($request, $next){
            if( Auth::user()->roles == "ADMIN"){
                return $next($request);
            }else{
                return redirect()->guest('/404');
            }
        });
    }
}
