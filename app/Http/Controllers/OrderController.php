<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Toko;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $data = [
            'order' =>  Order::all()
        ];
        return view('order.index', $data);
    }

    public function create()
    {

        return view('order.formcreate');
    }

    public function store(Request $request)
    {

        $request->validate([
            'tanggal' => 'required',
            'kode_toko' => 'required',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required'
        ]);

        Order::create([
            'tanggal' => $request->input('tanggal'),
            'kode_toko' => $request->input('kode_toko'),
            'nama_barang' => $request->input('nama_barang'),
            'jumlah_barang' => $request->input('jumlah_barang'),
        ]);

        return redirect()->route('indexorder')->with('success','Data berhasil di tambah');
    }

    public function status()
    {

        $data = [
            'order' => Order::all()
        ];
        return view('manager.Status', $data);
    }

    public function updatestatus($id_order)
    {
        $data = Order::find($id_order);
        $data->status = 'disetujui';
        $data->save();
        return redirect()->back();
    }

    public function laporan()
    {
        $data = [
            'order' => Order::all()
        ];
        return view('manager.laporan', $data);
    }

    public function tolak($id_order)
    {
        $data = Order::find($id_order);
        $data->status = 'tidak_disetujui';
        $data->save();
        return redirect()->back();
    }

    public function edit($id_order)
    {

        $query = DB::table('order')->where('id_order', $id_order)->first();
        $data = [
            'order' => $query
        ];
        return view('order.edit', $data);
    }
    public function update(Request $request)
    {
        $data = [
            'kode_toko' => $request->input('kode_toko'),
            'nama_barang' => $request->input('nama_barang'),
            'jumlah_barang'  => $request->input('jumlah_barang'),
            'tanggal'  => $request->input('tanggal'),
        ];
        $order = Order::findOrFail($request->id_barang);
        $order->update($data);

        return redirect()->route('indexorder');
    }

    public function destroy($id_order)
    {
        $data = Order::find($id_order);
        $data->delete();
        return redirect()->back()->with('message','Data berhasil di hapus');
    }

    public function print()
    {
        $data = [
            'data' => Order::all()
        ];
        return view('manager.print',$data);
    }
}
