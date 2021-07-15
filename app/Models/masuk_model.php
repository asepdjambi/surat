<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masuk_model extends Model
{
    use HasFactory;

    protected $table='masuk';

    protected $fillable=[
        'no',
        'asal',
        'tgl_s',
        'tgl_t',
        'perihal',
        'arsip',
        'disposisi',
        'arsip_disposisi'
    ];

    protected $dates=[
        'tgl_s',
        'tgl_t',
        'created_at',
        'updatd_at'
    ];
}
