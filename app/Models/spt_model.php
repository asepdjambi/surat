<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spt_model extends Model
{
    use HasFactory;

    protected $table='spt';

    protected $fillable = [
        'no',
        'untuk',
        'tgl_m',
        'tgl_s',
        'arsip_pdf',
        'arsip_master'
    ];

    protected $dates=[
        'tgl_m',
        'tgl_s',
        'created_at',
        'updated_at'
    ];
}
