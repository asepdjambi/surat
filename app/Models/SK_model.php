<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SK_model extends Model
{
    use HasFactory;

    protected $table='sk';

    protected $fillable = [
        'no',
        'tgl_s',
        'perihal',
        'arsip_pdf',
        'arsip_master'
    ];

    protected $dates=[
        'tgl_s',
        'created_at',
        'updated_at'
    ];
}
