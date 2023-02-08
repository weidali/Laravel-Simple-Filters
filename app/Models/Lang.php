<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code'
    ];
    
    protected $casts = [
        'title' => 'array',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
