<?php

namespace App\Http\Controllers;

use App\Form;
use App\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

    public function index()
    {
        $data = Form::with([
            'pertanyaan', 'penjawab', 'penjawab.jawaban',
            'penjawab.jawaban.pertanyaan'
        ])->where('id', 70)->first();

            $data->pertanyaan = $data->pertanyaan->sortBy('sorting')->all();
            $data['inputdeadline'] = join("T", explode(" ", $data->deadline));

            $table = [];

            foreach($data->penjawab as $index=>$entry){
                $array = [
                    'nama' => $entry->jawaban[0]->jawaban,
                    'email' => $entry->jawaban[1]->jawaban,
                    'linkedin' => $entry->jawaban[2]->jawaban,
                    'pekerjaan' => $entry->jawaban[11]->jawaban
                ];
                array_push($table, $array);
            };

            $alumni = collect($table);

            return view('koneksi.admin.alumni', [
                'alumni' => $alumni,
            ]);
    }

    public function add() {
        return view('koneksi.admin.alumniadd');
    }

    public function edit() {
        return view('koneksi.admin.alumniedit');
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
