<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pel';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $table = 'pelayanan';
    protected $fillable = [
                           'id_pel',
                           'id_nama',
                           'id_talent',
                           'id_kelas',
                           'tanggal_pelayanan'
                        ];
}
