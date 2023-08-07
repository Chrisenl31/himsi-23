<?php

namespace App\Http\Controllers;

use App\Form;
use App\Alumni;
use App\FormJawaban;
use App\FormPenjawab;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

    public function index()
    {
        return view('koneksi.admin.alumni');
    }

    public function add() {
        return view('koneksi.admin.alumniadd');
    }

    public function edit(Request $request) {
        $alumni = FormPenjawab::find($request->id);

            $alumni->jawaban->where('pertanyaan_id', '279')->first()->jawaban = $request->nama;
            $alumni->jawaban->where('pertanyaan_id', '279')->first()->save();

            $alumni->jawaban->where('pertanyaan_id', '281')->first()->jawaban = $request->email;
            $alumni->jawaban->where('pertanyaan_id', '281')->first()->save();

            $alumni->jawaban->where('pertanyaan_id', '282')->first()->jawaban = $request->linkedin;
            $alumni->jawaban->where('pertanyaan_id', '282')->first()->save();

            $alumni->jawaban->where('pertanyaan_id', '299')->first()->jawaban = $request->jabatan;
            $alumni->jawaban->where('pertanyaan_id', '299')->first()->save();

            $alumni->jawaban->where('pertanyaan_id', '343')->first()->jawaban = $request->telp;
            $alumni->jawaban->where('pertanyaan_id', '343')->first()->save();

            $alumni->jawaban->where('pertanyaan_id', '294')->first()->jawaban = $request->perusahaan;
            $alumni->jawaban->where('pertanyaan_id', '294')->first()->save();

            $alumni->jawaban->where('pertanyaan_id', '342')->first()->jawaban = $request->angkatan;
            $alumni->jawaban->where('pertanyaan_id', '342')->first()->save();

        //return view('koneksi.admin.alumniedit');
        return redirect('/admin/alumni');
    }

    public function remove(Request $request)
    {
        $data = FormPenjawab::find($request->id);
         if (!$data) {
             // return id not found
             return false;
         }

         FormJawaban::where('penjawab_id', $request->id)->delete();
         $data->delete();

         return redirect('/admin/alumni');
    }

    /* ini punya bagian masyer

    // public function index()
    // {
    //     $data = Alumni::get();
    //     return view('alumni.index', [
    //         'data' => $data
    //     ]);
    // }

    // public function adminindex()
    // {
    //     $data = Alumni::get();
    //     return view('alumni.admin.index', [
    //         'data' => $data
    //     ]);
    // }

    // public function create(Request $request)
    // {
    //     Alumni::create([
    //         'nama' => $request->nama,
    //         'angkatan' => $request->angkatan,
    //         'pekerjaan' => $request->pekerjaan,
    //     ]);

    //     return true;
    // }

    // public function update(Request $request)
    // {
    //     $data = Alumni::find($request->id);

    //     if (!$data) {
    //         // return not found id
    //         return false;
    //     }

    //     if ($data->nama != $request->nama) {
    //         $data->nama = $request->nama;
    //     }

    //     if ($data->angkatan != $request->angkatan) {
    //         $data->angkatan = $request->angkatan;
    //     }

    //     if ($data->pekerjaan != $request->pekerjaan) {
    //         $data->pekerjaan = $request->pekerjaan;
    //     }

    //     $data->save();

    //     return true;

    // }

    // public function remove(Request $request)
    // {

    //     $data = Alumni::find($request->id);
    //     if (!$data) {
    //         // return id not found
    //         return false;
    //     }

    //     $data->delete();

    //     return true;
    // }

ini punya bagian mas yer*/

}
