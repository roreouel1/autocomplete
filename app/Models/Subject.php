<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    
    protected static function boot()
    {
        parent::boot();        
        /* 
            generates custom id for new staff 
        */
       self::created(function ($model) {
            // Prefix 'SUB'
            $prefix = 'SUB';

            // Generate a random 3-digit number
            $randomNumber = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);

            // Combine the prefix and random number
            $sid = $prefix . $randomNumber;

            // Ensure the ID is unique
            while (self::where('code', $sid)->exists()) {
                // Regenerate if the ID is not unique
                $randomNumber = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT);
                $sid = $prefix + $randomNumber;
            }

            // Assign the unique ID to the model's code attribute
            $model->code = $sid;

            // Save the model to persist the code
            $model->save();
        });
    }
}
