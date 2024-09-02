<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug'
    ];

    // Relationships
    public function siteSettings()
    {
        return $this->hasMany(SiteSetting::class);
    }

    public function aboutUs()
    {
        return $this->hasMany(AboutUs::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
