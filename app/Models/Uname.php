<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uname extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id_nama';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'unames';
    protected $fillable = ['id_nama','nama_usr'];
}
