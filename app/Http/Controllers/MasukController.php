<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\masuk_model;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class MasukController extends Controller
{
    public function index()
    {
        // $datamasuk=masuk_model::all();

        // membuat dalam 1 halaman berisi 20 data
        // $datamasuk=DB::table('masuk')->paginate(20);
        $datamasuk=masuk_model::all()->sortByDesc('id');

        return view('/data_masuk',['datamasuk'=>$datamasuk]);
    }

    public function entry()
    {
        return view('/masuk');
    }


    // menyimpan data surat masuk
    public function store(Request $request)
    {
        // validasi inputbox
    //    $this->validate($request,
    //        [
    //            'no' => 'required',
    //            'asal' => 'required',
    //            'tgl_s' => 'required',
    //            'tgl_t' => 'required',
    //            'perihal' => 'required',
    //            'arsip' => 'required',
    //            'disposisi' => 'required',
    //            'arsip_disposisi' => 'required'
    //        ],
        //    menentukan jenis file yang akan di upload
        //    [
        //        'arsip'=> 'required|file|pdf|mimes:pdf',
        //        'arsip_disposisi'=> 'required|file|pdf|mimes:pdf'
        //    ]);
    /* <!-- /resources/views/post/create.blade.php -->
             <h1>Create Post</h1>
            @if (errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach (errors->all() as error)
                            <li>{{ error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <!-- Create Post Form --> */
// menyimpan data file yang akan di upload ke variable
            $arsip=$request->file('arsip');
            $disposisi=$request->file('arsip_disposisi');

            $nama_arsip=$arsip->getClientOriginalName();
            $nama_disposisi=$disposisi->getClientOriginalName();

            $tujuan_arsip='arsip/masuk/';
            $tujuan_disposisi='arsip/disposisi/';

            $arsip->move($tujuan_arsip,$nama_arsip);
            $disposisi->move($tujuan_disposisi,$nama_disposisi);

            masuk_model::create([
                'no'=>$request->no,
                'asal'=>$request->asal,
                // merubah tanggal dari format indonesia ke format mysql
                // saat menyimpan ke database               
                'tgl_s'=>carbon::parse($request->tgl_s)->format('Y-m-d'),
                'tgl_t'=>carbon::parse($request->tgl_t)->format('Y-m-d'),


                'perihal'=>$request->perihal,
                'arsip'=>$nama_arsip,
                'disposisi'=>$request->disposisi,
                'arsip_disposisi'=>$nama_disposisi
            ]);

            return redirect('/data_masuk');
    }

    // membuat live search
    public function cari(Request $request)
    {
        'halaman pencarian';
    }
}
