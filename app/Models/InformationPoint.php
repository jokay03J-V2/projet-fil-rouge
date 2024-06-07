<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InformationPoint extends Model
{
    protected $table = "information_point";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["name", "hourly", "departement"];

//    create relation
    public function InformationService(): BelongsToMany
    {
        return $this->belongsToMany(InformationService::class);
    }
}
