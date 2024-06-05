<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationService extends Model
{
    protected $table = "information_service";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["name"];
}
