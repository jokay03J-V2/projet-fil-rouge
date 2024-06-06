<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrgencyNumber extends Model
{
    protected $table = "emergency_number";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["category_id", "content", "name", "hourly"];
}
