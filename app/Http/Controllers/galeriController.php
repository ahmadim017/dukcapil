<?php

namespace App\Http\Controllers;

use App\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class galeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = galeri::latest()->paginate(9);
        return view('galeri.index',['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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
            "judul" => "required",
            "keterangan" => "required",
            "foto" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5048"
        ])->validated();

        $galeri = new galeri();
        $galeri->judul = $request->get('judul');
        $galeri->keterangan = $request->get('keterangan');
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('foto','public');
            $galeri->foto = $file;
            $galeri->tittle = $request->file('foto')->getClientOriginalName();
        }
        $galeri->save();
        return redirect()->route('galeri.index')->with('status','Berhasil disimpan');
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
        $galeri = galeri::find($id);
        return view('galeri.edit',['galeri' => $galeri]);
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
            "judul" => "required",
            "keterangan" => "required",
            "foto" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:5048"
        ])->validated();

        $galeri = galeri::find($id);
        $galeri->judul = $request->get('judul');
        $galeri->keterangan = $request->get('keterangan');
        if ($request->file('foto')) {

            if ($galeri->foto && file_exists(storage_path('app/public/'.$galeri->foto))){
                Storage::delete('public/'.$galeri->foto);
            }
            $file = $request->file('foto')->store('foto','public');
            $galeri->foto = $file;
            $galeri->tittle = $request->file('foto')->getClientOriginalName();
        }
        $galeri->save();
        return redirect()->route('galeri.index')->with('status','Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = galeri::find($id);
        if ($galeri->galeri && file_exists(storage_path('app/public/'.$galeri->foto))){
            Storage::delete('public/'. $galeri->foto);
                }
            $galeri->delete();
        return redirect()->route('galeri.index')->with('Status','Berhasil dihapus');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
