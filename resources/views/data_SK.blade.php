@extends('layouts.masterSK')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1>Data Surat Keputusan</h1>
                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">
                    <a href="/SK"> <button type="button" class="btn btn-block bg-gradient-primary"><i
                                class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp;TAMBAH SURAT
                            KEPUTUSAN</button></a>
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
                <form action="{{ url('bulk_delete') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn bg-gradient-danger float-right" id="bulk_delete"
                        style="display:none">HAPUS
                        SEMUA</button>

                    <table id="example1" class="table table-bordered table-striped" style="width: 100%">

                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectall" class="checked"></th>
                                <th>Nomor</th>
                                <th style="text-align: center">Nomor Surat</th>
                                <th>Tanggal Surat</th>
                                <th style="text-align: center">Perihal</th>
                                <th style="text-align: center">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1
                            @endphp
                            @foreach ($datask as $sk)
                                <tr>
                                    <td><input type="checkbox" name="id[]" value="{{ $sk->id }}"
                                            onclick="checkbox_is_checked()" class="check-all">
                                    </td>
                                    <td>{{ $i }}</td>
                                    <td>{{ $sk->no }}</td>
                                    <td>{{ $sk->tgl_s->isoformat('DD-MM-Y') }}</td>
                                    <td>{{ $sk->perihal }}</td>
                                    <td>
                                        <div class="list-group-vertical">
                                            <a href="{{ url('arsip/sk/pdf/' . $sk->arsip_pdf) }}" target="_blank"><button
                                                    type="button"
                                                    class="btn btn-block bg-gradient-primary btn-sm">PDF</button></a>
                                            @if (file_exists('arsip/sk/master/' . $sk->arsip_master))
                                                <a href="{{ url('arsip/sk/master/' . $sk->arsip_master) }}"
                                                    target="_blank"><button type="button"
                                                        class="btn btn-block bg-gradient-primary btn-sm ">Master</button></a>
                                            @else
                                                <button type="button" class="btn btn-block bg-gradient-primary btn-sm "
                                                    disabled style="text-align: center">Master</button>
                                            @endif
                                            <a href="SK/{{ $sk->id }}/hapus"><button type="button"
                                                    class="btn btn-block bg-gradient-danger btn-sm ">Hapus</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                $i++
                                @endphp
                            @endforeach
                        </tbody>

                    </table>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        {{-- <div class="row">
            <div class="col-sm-12 col-md-5">
                {{-- Halaman ke :&nbsp;{{ $datamasuk->CurrentPage() }}<br>
                Jumlah Surat:&nbsp;{{ $datamasuk->total() }}<br>
                Data Per Halaman:&nbsp;{{ $datamasuk->PerPage() }} --}}
                {{--
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                    {{ $datask->links() }}
                </ul>
            </div> --}}

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>


@endsection
