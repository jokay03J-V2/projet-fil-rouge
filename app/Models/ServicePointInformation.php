<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ServicePointInformation extends Model
{
    protected $table = "information_service-information";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["service_id", "information_id"];

    //    create relation
    public function InformationPoint(): BelongsToMany
    {
        return $this->belongsToMany(InformationPoint::class);
    }

    //    create relation
    public function InformationService(): BelongsToMany
    {
        return $this->belongsToMany(InformationService::class);
    }
}
