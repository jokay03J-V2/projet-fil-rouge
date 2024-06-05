<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationPoint extends Model
{
    protected $table = "information_point";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["name", "hourly", "departement"];
}
