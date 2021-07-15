<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Concerns\InteractsWithInput;
use \App\models\SK_model;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;

class SKController extends Controller
{
    public function index()
    {
        $dataSK = sk_model::all()->sortByDesc('id');
        return view('/data_SK', ['datask' => $dataSK]);
    }

    public function entry()
    {
        return view('/SK');
    }

    public function store(Request $request)
    {
        $arsip_pdf = $request->file('arsip_pdf');
        $master = $request->file('arsip_master');

        $nama_pdf = $arsip_pdf->getClientOriginalName();
        $nama_master = $master->getClientOriginalName();

        SK_model::create([
            'no' => $request->no,
            // merubah tanggal dari format indonesia ke format mysql
            // saat menyimpan ke database               
            'tgl_s' => carbon::parse($request->tgl_s)->format('Y-m-d'),

            'perihal' => $request->perihal,
            'arsip_pdf' => $nama_pdf,
            'arsip_master' => $nama_master
        ]);

        // tujuan copy file
        $tujuan_pdf = 'arsip/sk/pdf/';
        $tujuan_master = 'arsip/sk/master/';

        // memindahkan file
        $arsip_pdf->move($tujuan_pdf, $nama_pdf);
        $master->move($tujuan_master, $nama_master);


        return redirect('/data_SK');
    }

    public function hapus($id)
    {
        $arsip = SK_model::find($id);

        file::delete(public_path('/arsip/SK/pdf/' . $arsip->arsip_pdf));

        if (file_exists(public_path('/arsip/SK/master/' . $arsip->arsip_master))) {

            file::delete(public_path('/arsip/SK/master/' . $arsip->arsip_master));
        }

        // $data=SK_model::find($id);
        SK_model::where('id', $id)->delete();

        return redirect('/data_SK');
    }

    public function hapus_semua(Request $request)
    {
        $all_data = $request->id;
        // $all_data = request::input('id', []);

        foreach ($all_data as $id) {
            $arsip = SK_model::find($id);
            // dd($arsip);

            file::delete(public_path('/arsip/SK/pdf/' . $arsip->arsip_pdf));

            if (file_exists(public_path('/arsip/SK/master/' . $arsip->arsip_master))) {

                file::delete(public_path('/arsip/SK/master/' . $arsip->arsip_master));
            }

            // $data=SK_model::find($id);
            SK_model::where('id', $id)->delete();

            // SK_model::where('id', $id)->delete();
        }
        return redirect()->back();
    }
}
