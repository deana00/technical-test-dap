<?php

namespace App\Http\Controllers\Api;

use App\Models\Barang;
use App\Http\Resources\BarangResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{   
    // GET All Barang
    public function index() {
        $barang = Barang::latest();

        return new BarangResource(true, 'Daftar Barang', $barang);
    }

    // POST Barang
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama_barang'   => 'required',
            'harga_barang'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $barang = Barang::create([
            'nama_barang'   => $request->nama_barang,
            'harga_barang'  => $request->harga_barang
        ]);

        return new BarangResource(true, 'Berhasil tambah Barang', $barang);
    }

    // GET single Barang
    public function show(Barang $barang) {
        return new BarangResource(true, 'Data Barang ditemukan', $barang);
    }

    // UPDATE barang
    public function update(Request $request, Post $post) {
        // validator untuk mengecek body request
        $validator = Validator::make($request->all(), [
            'nama_barang'   => 'required',
            'harga_barang'  => 'required'
        ]);

        // handler ketika gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // update barang
        $barang->update([
            'nama_barang'   => $request->nama_barang,
            'harga_barang'  => $request->harga_barang
        ]);

        return new BarangResource(true, 'Data Barang berhasil diupdate', $barang);
    }

    // DELETE single barang
    public function destroy(Barang $barang) {
        // hapus barang
        $barang->delete();
        
        return new BarangResource(true, 'Data Barang berhasil dihapus', null);
    }
}
