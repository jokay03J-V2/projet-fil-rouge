<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'advice';

    // Declare attributes that can be assigned en masse
    // This allows you to use the template by directly assigning values to the specified attributes
    
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'content',
        'img'
    ];
}
