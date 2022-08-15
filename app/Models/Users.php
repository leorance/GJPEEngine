<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'users';
    protected $fillable = ['id_user','nama_user'];
}
