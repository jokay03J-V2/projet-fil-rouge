<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UrgencyNumber extends Model
{
    protected $table = "emergency_number";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ["category_id", "content", "name", "hourly"];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(UrgencyCategory::class);
    }
}
