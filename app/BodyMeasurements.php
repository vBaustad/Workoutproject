<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyMeasurements extends Model
{
    protected $fillable = [
        'weight',
        'height',
        'waist',
        'bust',
        'calves',
        'chest',
        'forearm',
        'hips',
        'thigs',
        'upperarm',
        'sex',
        'user_id',
    ];
}
