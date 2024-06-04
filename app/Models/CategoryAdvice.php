<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAdvice extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'category_advice';

    protected $fillable = [
        'id',
        'name',
    ];

}
