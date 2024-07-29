<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response([
        //     'code' => 200,
        //     'response' => [
        //         'message' => 'Data berhasil ditampilkan',
        //         'data' => Siswa::all()
        //     ]
        // ], 200);
        return response([
            'message' => 'Data berhasil ditampilkan',
            'data' => Siswa::all()
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);
        return response([
            'message' => 'Data berhasil diinputkan',
            'data' => Siswa::create($validator)
        ], 201);
    }

    public function show(string $id)
    {
        try {
            return response([
                'message' => 'Data berhasil ditampilkan',
                'data' => Siswa::findOrFail($id)
            ], 200);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Data tidak ditemukan'
            ], 200);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_id' => 'required|integer',
        ]);

        $data = Siswa::find($id);
        $data->update($validator);

        return response([
            'message' => 'Data berhasil diupdate',
            'data' => $data
        ], 200);
    }

    public function destroy(string $id)
    {
        Siswa::find($id)->delete();

        return response([
            'message' => 'Data berhasil dihapus'
        ], 200);

    }
}
