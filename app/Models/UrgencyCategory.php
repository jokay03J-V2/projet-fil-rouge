<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UrgencyCategory extends Model
{
    protected $table = "category_number";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["name"];

    public function numbers(): HasMany
    {
        return $this->hasMany(UrgencyNumber::class);
    }
}
