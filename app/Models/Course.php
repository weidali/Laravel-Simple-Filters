<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_info',
        'description',
        'user_id',
        'intensity_id',
        'level_id',
        'status',
        'type',
        'duration',
        'mobile_image',
        'desktop_image',
        'desktop_preview_image',
        'meeting_id',
        'meeting_password',
        'zoom_config_id',
    ];

    protected $casts = [
        'title' => 'array',
        'short_info' => 'array',
        'description' => 'array',
        'status' => 'boolean',
        'enrolled' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function land()
    {
        return $this->belongsTo(Lang::class);
    }

     /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array $categories
     * @param  array $langs,
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithFilters($query, array $categories, array $langs)
    {
        return $query->when(count($categories), function ($query) use ($categories) {
            $query->whereIn('category_id', $categories);
        })
        ->when(count($langs), function ($query) use ($langs) {
            $query->whereIn('lang_id', $langs);
        });
    }
}
