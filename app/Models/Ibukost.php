<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibukost extends Model
{
    protected $table = 'ibukost';
    protected $primaryKey = 'idibukost';
    protected $fillable = ['name', 'alamat', 'no_telp'];
}
