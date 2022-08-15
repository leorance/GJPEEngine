<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kelas';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'classes';
    protected $fillable = ['id_kelas','nama_kelas'];
}
