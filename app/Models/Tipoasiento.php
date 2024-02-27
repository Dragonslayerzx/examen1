<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoasiento extends Model
{
    protected $table = 'tipoasiento';
    protected $primaryKey = 'idTipoAsiento';
    use HasFactory;
}
