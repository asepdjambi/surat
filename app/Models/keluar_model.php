<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluar_model extends Model
{
    use HasFactory;
protected $table='keluar';


protected $fillable = [
    'no',
    'tujuan',
    'tgl_s',
    'perihal',
    'arsip_pdf',
    'arsip_master'
];

protected $dates=[
    'tgl_s'
];

}
