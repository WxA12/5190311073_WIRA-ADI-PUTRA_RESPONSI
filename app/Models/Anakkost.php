<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anakkost extends Model
{
    protected $table = 'anakkost';
    protected $primaryKey = 'idanakkost';
    protected $fillable = ['name', 'nama','pekerjaan', 'no_telp','alamat'];
}
