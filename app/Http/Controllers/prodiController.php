<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Program Studi";
        $slug = "prodi";
        $dataProdi = prodi::all();
        return view('prodi.index', compact('title','slug','dataProdi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah data Prodi';
        $slug = 'prodi';
        return view('prodi.create',compact('title','slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = prodi::insert([
            'kd_prodi' => $request->kode,
            'nama_prodi' => $request->prodi,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($result){
            return redirect('/prodi');
        }else{
            return $this->create();
        }
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
        $title = 'Perbarui data Prodi';
        $slug = 'prodi';
        $dataProdi = prodi::where('kd_prodi', '=', $id)->first();
        return view('prodi.update',compact('title','slug','dataProdi'));
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
        $id = $request->kode;
        prodi::where('kd_prodi',$id)
                    ->update([
                        'nama_prodi' => $request->prodi
                    ]);
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        prodi::where('kd_prodi',$id)
                    ->delete();
        return redirect('/prodi');
    }
}
