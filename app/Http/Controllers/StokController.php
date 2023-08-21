<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function index()
    {
        $data = [
            'stok' => Stok::all()
        ];
        return view('stok.index', $data);
    }

    public function create()
    {
        return view('stok.formcreate');
    }

    public function store( Request $request)
    {   
        $request->validate([
            'kode_barang' => 'required|unique:stok',
            'nama_barang' => 'required|unique:stok',
            'stok_barang'        => 'required',
            'RAK'           => 'required|unique:stok'  
        ],[
            'kode_barang.required'  => 'Kode Barang Harus DI isi',
            'kode_barang.unique'    => 'Kode Barang Sudah di gunakan',
            'nama_barang.unique'    => 'Nama barang sudah di gunakan',
            'RAK.unique'            => 'Rak barang sudah di isi',
            'RAK.required'          => 'Field Rak harus di isi',
            'stok_barang.required'  => 'Harus Di isi',
            'nama_barang.required'  => 'Harus DI isi' 
        ]);
        
        Stok::create([
            'kode_barang' =>$request->input('kode_barang'),
            'nama_barang' =>$request->input('nama_barang'),
            'stok_barang' =>$request->input('stok_barang'),
            'RAK'         =>$request->input('RAK')  
        ]);

        return redirect()->route('indexstok')->with('success','Data Berhasil di tambah');
    }

    public function edit($id_barang)
    {
        
        $query = DB::table('stok')->where('id_barang', $id_barang)->first();
        $data = [
            'barang' => $query
        ];
        return view('stok.edit', $data);
    }

    public function update(Request $request)
    {
        $data = [
            'kode_barang' => $request->input('kode_barang'),
            'nama_barang' => $request->input('nama_barang'),
            'stok_barang'  => $request->input('sotk_barang'),
            'RAK'           => $request->input('RAK')
        ];
        $stok = Stok::findOrFail($request->id_barang);
        $stok->update($data);

        return redirect()->route('indexstok')->with('success','Data Berhasil di update');
    }

    public function destroy($id_barang)
    {
        $delete = Stok::where('id_barang', $id_barang)->firstOrFail();;
        $delete->delete();

        return redirect()->back()->with('message','data berhasil di hapus'); 
    }
}
