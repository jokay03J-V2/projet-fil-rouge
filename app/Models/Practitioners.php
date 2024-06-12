<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practitioners extends Model
{
    use HasFactory;
    protected $table = 'practitioners';
    protected $fillable = ['id', 'nom', 'sex', 'profession', 'tel', 'address', 'commune'];
}
