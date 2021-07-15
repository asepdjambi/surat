@extends('layouts.masterd')
@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                @php
                $surat= \App\models\masuk_model::whereYear('created_at',date('Y'))->count();
                @endphp
                <h3>{{ $surat }}</h3>

                <p>Surat Masuk<br>
                    Tahun: &nbsp;{{ date('Y') }} </p>
            </div>
            <div class="icon">
                <i class="ion ion-document"></i>
            </div>
            <a href="/data_masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                @php
                $keluar= \App\models\keluar_model::whereYear('created_at',date('Y'))->count();
                @endphp
                <h3>{{ $keluar }}</h3>

                <p>Surat Keluar<br>
                    Tahun: &nbsp;{{ date('Y') }} </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/data_keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                @php
                $SK= \App\models\SK_model::whereYear('created_at',date('Y'))->count();
                @endphp
                <h3>{{ $SK }}</h3>
                <p>Surat Keputusan<br>
                    Tahun: &nbsp;{{ date('Y') }} </p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="data_SK" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                @php
                $SPT= \App\models\SPT_model::whereYear('created_at',date('Y'))->count();
                @endphp
                <h3>{{ $SPT }}</h3>

                <p>Surat Perintah Tugas<br>
                    Tahun: &nbsp;{{ date('Y') }} </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/data_SPT" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>


@endsection