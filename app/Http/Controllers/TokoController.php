<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function seting()
    {
        return view('logout');
    }




    public function index()
    {
        $data = [
            'toko' => Toko::all()
        ];
        return view('Toko.index', $data);
    }

    public function create()
    {
        return view('Toko.formcreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_toko' => 'required|unique:toko',
            'Nama_toko' => 'required|unique:toko|string|max:30',
            'alamat'    => 'required|string|max:20',
            'telepone_toko' => 'required'
        ],[
            'kode_toko.required' => 'Harus di isi',
            'kode_toko.unique'  => 'Kode Sudah di pakai',
            'Nama_toko.required' => 'Harus Di isi',
            'alamat.max' => 'Tidak boleh lebih dari 20 huruf',
            'telepone_toko.required'    => 'Harus di isi'
        ]);
        Toko::create([
            'kode_toko' => $request->input('kode_toko'),
            'Nama_toko' => $request->input('Nama_toko'),
            'alamat'    => $request->input('alamat'),
            'telepone_toko' => $request->input('telepone_toko'),
        ]);

        return redirect()->route('indextoko')->with('success','data berhasil di tambah');
    }

    public function destroy($id)
    {
        $delete = Toko::where('id', $id)->firstOrFail();;
        $delete->delete();

        return redirect()->back()->with('message','data berhasil di hapus');
    }

    public function edit($id)
    {

        $query = DB::table('toko')->where('id', $id)->first();
        $data = [
            'toko' => $query
        ];
        return view('toko.edit', $data);
    }

    public function update(Request $request)
    {

        $data = [
            'kode_toko' => $request->input('kode_toko'),
            'Nama_toko' => $request->input('Nama_toko'),
            'alamat'  => $request->input('alamat'),
            'telepone_toko'  => $request->input('telepone_toko'),
        ];
        $toko = Toko::findOrFail($request->id);
        $toko->update($data);

        return redirect()->route('indextoko')->with('success','Berhasil di update');
    }
}
