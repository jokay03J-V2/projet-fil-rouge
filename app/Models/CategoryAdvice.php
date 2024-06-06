<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAdvice extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'category_advice';

     // Declare attributes that can be assigned en masse
    // This allows you to use the template by directly assigning values to the specified attributes
    
    protected $fillable = [
        'id',
        'name',
    ];

}
