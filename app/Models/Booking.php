<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'event_type', 'custom_event_type',
        'event_date', 'location', 'menu_package_id', 'music_package_id', 'decoration_package_id'
    ];
}
