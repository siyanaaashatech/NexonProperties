<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_name',
        'office_address',
        'office_contact',
        'office_email',
        'office_description',
        'established_year',
        'slogan',
        'main_logo',
        'side_logo',
        'status',
        'metadata_id',
        'social_links_id'
    ];

    protected $casts = [
        'office_address' => 'array',
        'office_contact' => 'array',
        'office_email' => 'array',
    ];

    // Relationships
    public function metadata()
    {
        return $this->belongsTo(Metadata::class);
    }

    public function socialLink()
    {
        return $this->belongsTo(SocialLink::class, 'social_links_id');
    }
}