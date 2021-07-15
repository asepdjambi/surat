<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\spt_model;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use lluminate\Support\Collection;

class sptcontroller extends Controller
{
    public function index()
    {
        $dataspt=spt_model::all()->sortByDesc('id');
        return view('/data_SPT',['dataspt'=>$dataspt]);
    }

// memasukkan data SPT
    public function entry()
    {
        return view('/SPT');
    }

    // menyimpan hasil entry
    public function store(Request $request)
    {
        $arsippdf=$request->file('arsip_pdf');
        $arsipmaster=$request->file('arsip_master');

        $nama_pdf=$arsippdf->getClientOriginalName();
        $nama_master=$arsipmaster->getClientOriginalName();

        $tujuanpdf='arsip/spt/pdf/';
        $tujuanmaster='arsip/spt/master';

        $arsippdf=move($tujuanpdf,$nama_pdf);
        $arsipmaster=move($tujuanmaster,$nama_master);

        spt_model::create([
            'no'=>$request->no,
            'untuk'=>$request->untuk,

            // merubah format tanggal dari dd-mm-yyyy ke yyyy-mm-dd
            'tgl_m'=>carbon::parse($request->tgl_m)->format('Y-m-d'),
            'tgl_s'=>carbon::parse($request->tgl_s)->format('Y-m-d'),

            'arsip_pdf'=>$nama_pdf,
            'arsip_master'=>$nama_master,

        ]);
        return redirect('/data_SPT');

    }

    // hapus data SPT
    public function hapus($id)
    {
        $hapus=spt_model::find($id);
        file::delete(public_path('arsip/spt/pdf'.$hapus->arsip_pdf));

        if (file_exists(public_path('arsip/spt/master'.$hapus->arsip_master))) {
            file::delete(public_path('arsip/spt/master'.$hapus->arsip_master));
        }

        spt_model::where('id', $id)->delete();

        return redirect('/data_SPT');
        
    }
}
