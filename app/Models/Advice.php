<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'advice';

    protected $fillable = [
        'id',
        'category_id',
        'name',
        'content',
        'img'
    ];
}
