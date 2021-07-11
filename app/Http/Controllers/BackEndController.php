<?php

namespace App\Http\Controllers;

use App\Satwa;
use App\Pengaduan;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Satwa::all();
        return view('satwa.listSatwa', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('satwa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Satwa();
        $data->nama=$request->get('nama');
        $data->spesies=$request->get('spesies');
        $data->asal=$request->get('asal');
        $data->deskripsi=$request->get('deskripsi');
        $fileName =  "satwa".rand(1,10).rand(500,1000).".jpg";
        $data->gambar=$fileName;
        $data->save();

        $destinationPath =  "images/";

        if ($request->hasFile('image_upload')) {
            $request->image_upload->move($destinationPath, $fileName);
        }
        return redirect()->route('frontend.index')->with('status','Data satwa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satwa  $satwa
     * @return \Illuminate\Http\Response
     */
    public function show(Satwa $satwa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satwa  $satwa
     * @return \Illuminate\Http\Response
     */
    public function edit(Satwa $satwa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satwa  $satwa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Satwa $satwa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satwa  $satwa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satwa $satwa)
    {
        try {
            $satwa->delete();
            return redirect()->route('satwa.index')->with('status','Data Satwa berhasil dihapus');
        } catch (\PDOException $e) {
            $msg="Data Gagal dihapus. Data satwa digunakan pada field lain";
            return redirect()->route('satwa.index')->with('status',
                $msg);
        }
    }

    public function cek_pengaduan()
    {
        $query = Pengaduan::all();
        return view('pengaduan.listPengaduan', compact('query'));
    }
}
