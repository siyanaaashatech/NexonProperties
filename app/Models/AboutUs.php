<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'status',
        'metadata_id'
    ];

    protected $casts = [
        'image' => 'array', // Handle multi-image upload as an array
    ];

    // Relationships
    public function metadata()
    {
        return $this->belongsTo(Metadata::class);
    }
}
