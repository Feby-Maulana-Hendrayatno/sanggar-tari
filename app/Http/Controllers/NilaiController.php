<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Murid;
use App\Models\KategoriTari;

class NilaiController extends Controller
{
    public function index()
    {
        $data = [
            "data_murid" => Murid::orderBy("nama_murid", "ASC")->get()
        ];

        return view("/pelatih/nilai/data_nilai", $data);
    }

    public function data_nilai()
    {
        $data = [
            "data_nilai" => Nilai::orderBy("id_murid", "ASC")->get()
        ];

        return view("/pelatih/nilai/detail_keseluruhan", $data);
    }


    public function tambah(Request $request)
    {
        Nilai::create($request->all());

        return redirect()->back();
    }

    public function hapus(Request $request)
    {
        Nilai::where("id", $request->id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {

        $data = [
            "data_nilai" => Nilai::orderBy("id", "DESC")->get(),
        	"edit" => Nilai::where("id", $id)->first(),
        	"data_murid" => Nilai::where("id", "!=", $id)->orderBy("id", "ASC")->get(),
            "data_kategori_tari" => KategoriTari::where("id", "!=", $id)->orderBy("id", "ASC")->get()
        ];

        return view("/pelatih/nilai/edit_nilai", $data);
    }

    public function detail($id)
    {

        $data = [
            "detail" => Murid::where("id", $id)->orderBy("nama_murid", "DESC")->first(),
            "data_kategori_tari" => KategoriTari::get(),
            "data_nilai" => Nilai::where("id_murid", $id)->get()
        ];


        // $data = [
        //     "detail" => Nilai::where("id_murid", $id)->first()
        // ];

        return view("/pelatih/nilai/detail_nilai", $data);


    }

    public function simpan(Request $request)
    {
        Nilai::where("id", $request->id)->update([
            "id" => $request->id,
            "jenis_tari" => $request->jenis_tari,
            "nilai" => $request->nilai

        ]);

        return redirect("/pelatih/nilai");
    }
}
