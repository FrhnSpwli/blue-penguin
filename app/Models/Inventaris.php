<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Inventaris extends Model implements HasMedia
{
    protected $table = 'inventaris';

    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'lecturer_id',
        'name',
        'year',
        'quantity',
        'registration_number',
    ];

    public function lecturer(): BelongsTo
    {
        return $this->belongsTo(Lecturer::class);
    }
}
