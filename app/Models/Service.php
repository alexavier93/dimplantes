<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'slug', 'view_home','category_id'
    ];

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function files()
    {
        return $this->hasMany(ServiceFile::class);
    }
    
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
