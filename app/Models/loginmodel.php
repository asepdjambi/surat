<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginmodel extends Model
{
    use HasFactory;
    protected $table='login';

    protected $fillable = [
        'role',
        'username',
        'password',
        'pass_name'
    ];
}
