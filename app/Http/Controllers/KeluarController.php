<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\keluar_model;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class keluarController extends Controller
{
    public function index()
    {
        $datakeluar = keluar_model::all()->sortByDesc('id');
        return view('/data_keluar', ['datakeluar' => $datakeluar]);
    }

    public function keluar()
    {
        return view('/keluar');
    }

    public function store(Request $request)
    {
        $arsip_pdf = $request->file('arsip_pdf');
        $master = $request->file('arsip_master');

        $nama_pdf = $arsip_pdf->getClientOriginalName();
        if ($master != '') {
            $nama_master = $master->getClientOriginalName();
        } else {
            $nama_master = '';
        }



        $tujuan_pdf = 'arsip/keluar/pdf/';
        $tujuan_master = 'arsip/keluar/master/';

        $arsip_pdf->move($tujuan_pdf, $nama_pdf);
        if ($master != '') {
            $master->move($tujuan_master, $nama_master);
        }

        keluar_model::create([
            'no' => $request->no,
            'tujuan' => $request->tujuan,
            // merubah tanggal dari format indonesia ke format mysql
            // saat menyimpan ke database               
            'tgl_s' => carbon::parse($request->tgl_s)->format('Y-m-d'),

            'perihal' => $request->perihal,
            'arsip_pdf' => $nama_pdf,
            'arsip_master' => $nama_master
        ]);

        return redirect('/data_keluar');
    }

    public function hapus()
    {
        # code...
    }
}
