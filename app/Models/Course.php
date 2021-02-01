<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'portrait',
        'thumbnail',
        'banner_image',
        'video',
        'playlist',
        'level',
        'premium',
        'type',
        'duration',
        'order',
        'facebook_pixel',
    ];






    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function styles()
    {
        return $this->belongsToMany(Style::class);
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }

    public function hasStyle($id)
    {
        return in_array($id, $this->styles()->pluck('style_id')->toArray());
    }

    public function scopeLevel($query, $level)
    {
        if (!empty($level)) {
            return $query->where('level', $level);
        }
        return $query;
    }

    public function scopeType($query, $type)
    {
        if (!empty($type)) {
            return $query->where('type', $type);
        }
        return $query;
    }

    public function scopeStyle($query, $style)
    {
        if (!empty($style)) {
            return $query->whereHas('styles', function (Builder $query_style) use ($style) {
                $query_style->where('style_id', $style);
            });
        }
        return $query;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
