<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talents extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_talent';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'talents';
    protected $fillable = ['id_talent','nama_talent'];
}
