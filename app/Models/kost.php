<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kost extends Model
{
    protected $table = 'kost';
    protected $primaryKey = 'idkost';
    protected $fillable = ['name_kost','nokamar_kost','alamat', 'no_telp','id_ibukost','id_anakkost'];
}
