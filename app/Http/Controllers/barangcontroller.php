<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        $barang = DB::table('barang')->get();
        return view ('barang0043',['barang'=> $barang]);
    }
    public function tambah()
    {
        return view('tambah0043');
    }
    public function edit($id)
    {
        $barang = DB::table('barang')->where('id',$id)->get();
        return view('edit0043',['barang'=>$barang]);
    }
    public function update(Request $request)
    {
        DB::table('barang')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'harga' => $request->harga,
        ]);
        return redirect('/barang');
    }
    public function hapus($id)
    {
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/barang');
    }

    public function store (Request $request) 
    { 
    DB::table('barang')->insert([
    'id' => $request->id,
    'nama' => $request->nama,
    'harga' => $request->harga,]);
    return redirect('/barang');
    }
    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $barang=DB::table('barang')->where('nama','like',"%".$cari."%")->paginate();
        return view('barang0043',['barang' => $barang]);
    }
}