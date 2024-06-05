<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePointInformation extends Model
{
    protected $table = "information_service-information";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["service_id", "information_id"];
}
