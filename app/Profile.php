<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'image', 'description',
    ];

    /* Disabled in vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasTimestamps.php
    I'v set public $timestamps = false;
    protected $guarded = [
        'updated_at', 'created_at',
    ];*/
}
