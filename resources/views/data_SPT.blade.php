@extends('layouts.masterSPT')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-9">
                    <h1>Data SPT</h1>
                </div>
                <div class="col-sm-3">
                    <a href="/SPT"> <button type="button" class="btn btn-block bg-gradient-primary"><i
                                class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp;TAMBAH
                            SPT</button></a>
                </div>
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div> --}}
            </div>
        </div>


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
                            <th>Untuk Kegiatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th style="text-align: center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1
                        @endphp
                        @foreach ($dataspt as $spt)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $spt->no }}</td>
                                <td>{{ $spt->untuk }}</td>
                                <td>{{ $spt->tgl_m->isoformat('DD-MM-Y') }}</td>
                                <td> {{ $spt->tgl_s->isoformat('DD-MM-Y') }}</td>
                                <td>
                                    <div class="list-group-vertical">
                                        <a href="{{ url('arsip/spt/pdf/' . $spt->arsip_pdf) }}" target="_blank"> <button
                                                type="button"
                                                class="btn btn-block bg-gradient-primary btn-sm">Surat</button></a>
                                        @if (file_exists('arsip/spt/master/' . $spt->arsip_master))
                                            <a href="{{ url('arsip/spt/master/' . $spt->arsip_master) }}" target="_blank">
                                                <button type="button"
                                                    class="btn btn-block bg-gradient-primary btn-sm">Master</button></a>
                                        @else
                                            <button type="button" class="btn btn-block bg-gradient-primary btn-sm"
                                                disabled>Master</button>
                                        @endif

                                        <a href="SPT/{{ $spt->id }}/hapus"></a> <button type="button"
                                            class=" btn btn-block bg-gradient-danger btn-sm ">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @php($i++)
                                @endphp
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            {{-- <div class="row">
                <div class="col-sm-12 col-md-5"> --}}
                    {{-- Halaman ke :&nbsp;{{ $datamasuk->CurrentPage() }}<br>
                    Jumlah Surat:&nbsp;{{ $datamasuk->total() }}<br>
                    Data Per Halaman:&nbsp;{{ $datamasuk->PerPage() }} --}}
                    {{-- </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                        {{ $dataspt->links() }}
                    </ul>
                </div>
            </div>
            </div> --}}
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>


    @endsection
