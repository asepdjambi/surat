@extends('layouts.mastermasuk')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Data Surat Masuk</h1>
            </div>
            <div class="col-sm-3">
                <a href="/masuk"> <button type="button" class="btn btn-block bg-gradient-primary"><i
                            class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp; TAMBAH SURAT
                        MASUK</button></a>
            </div>
          <!-- {{-- <div class="col-sm-6"> -->
          <!-- <ol class="breadcrumb float-sm-right"> -->
          <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
          <!-- <li class="breadcrumb-item active">DataTables</li> -->
          <!-- </ol> -->
          <!-- </div> --}} -->
        </div>

    <div class="row">
        <div class="col-12">
        <div class="card">
            {{-- <div class="card-header">
            <h3 class="card-title">Data Surat Masuk</h3>
        </div> --}}
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nomor Surat</th>
                            <th>Asal Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Tanggal Terima</th>
                            <th>Perihal</th>
                            <th>Disposisi</th>
                            <th style="text-align: center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1
                        @endphp
                        @foreach ($datamasuk as $dm)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $dm->no }}</td>
                            <td>{{$dm->asal}}</td>
                            <td>{{ $dm->tgl_s->isoformat('DD-MM-Y') }}</td>
                            <td> {{ $dm->tgl_t->isoformat('DD-MM-Y') }}</td>
                            <td>{{ $dm->perihal }}</td>
                            <td>{{ $dm->disposisi }}</td>
                            <td>
                                <div class="btn-list-vertical">
                                    <a href="{{ url('arsip/masuk/'.$dm->arsip) }}" target="_blank"> <button
                                            type="button"
                                            class="btn btn-block bg-gradient-primary btn-sm"></i>Surat</button></a>

                                    @if (file_exists('arsip/disposisi/'.$dm->arsip_disposisi))
                                    <a href="{{ url('arsip/disposisi/'.$dm->arsip_disposisi) }}" target="_blank">
                                        <button type="button"
                                            class="btn btn-block bg-gradient-primary btn-sm"></i>Disposisi</button></a>
                                    @else
                                    <button type="button" class="btn btn-block bg-gradient-primary btn-sm"
                                        disabled></i>Disposisi</button>
                                    @endif

                                </div>
                            </td>
                        </tr>
                        @php
                        ($i++)
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>



@endsection