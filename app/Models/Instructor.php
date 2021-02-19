<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'slug',
        'bio',
        'image',
        'avatar',
        'portrait',
        'birthday',
        'beginning',
        'video',
        'facebook',
        'instagram',
        'twitter',
        'tiktok',
        'youtube',
        'phone',
        'email',
        'origin',
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

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function hasStyle($id)
    {
        return in_array($id, $this->styles()->pluck('style_id')->toArray());
    }

    public function hasCourse($id)
    {
        return in_array($id, $this->courses()->pluck('course_id')->toArray());
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['first_name', 'last_name']
            ]
        ];
    }

    public function getAgeAttribute()
    {        
        return Carbon::parse($this->birthday)->age;        
    }
}



