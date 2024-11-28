<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $table = 'sgo_news';
    protected $fillable = [
        'subject',
        'slug',
        'posted_at',
        'article',
        'view',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'status',
        'summary',
        'featured_image'
    ];

    protected $casts = [
        'seo_keywords' => 'array',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->slug = Str::slug($model->subject);
            $model->seo_title = $model->subject;
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->subject);
        });
    }
}
