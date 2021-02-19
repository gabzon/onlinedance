<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

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
        'tagline',
        'tags',
        'excerpt',
        'content',
        'portrait',
        'thumbnail',
        'banner_image',
        'video',
        'playlist',
        'level',
        'premium',
        'is_live',
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
    
    public function hasStyle($id)
    {
        return in_array($id, $this->styles()->pluck('style_id')->toArray());
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }

    public function hasInstructor($id)
    {
        return in_array($id, $this->instructors()->pluck('instructor_id')->toArray());
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

    public function favorited()
    {        
        return (bool) Favorite::where('user_id', Auth::id())->where('course_id', $this->id)->first();
    }

    public function bookmarked()
    {        
        return (bool) Todo::where('user_id', Auth::id())->where('course_id', $this->id)->first();
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

