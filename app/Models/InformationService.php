<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InformationService extends Model
{
    protected $table = "information_service";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["name"];

    //    create relation
    public function InformationPoint(): BelongsToMany
    {
        return $this->belongsToMany(InformationPoint::class);
    }
}
