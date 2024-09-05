<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayan extends Model
{
    use HasFactory;
    protected $fillable =  ['nama', 'jenis_kelamin', 'tanggal_diterima'];
}
