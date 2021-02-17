<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'fb_pixel',
        'google_analytics',
        'theme_mode',
        'about',
        'email',
        'facebook',
        'instagram',
        'twitter',
        'tiktok',
        'youtube',
        'snapchat',
        'terms',
        'privacy',
        'faq',
        'landing_hero',
        'dashboard_hero',
        'monthly_price',
        'yearly_price',
        'plan_name',
        'trail_days',
        'payment_gateway',
        'currency',
    ];
}

