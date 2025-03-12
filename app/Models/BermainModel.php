<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BermainModel extends Model
{
    // Specify the table name
    protected $table = 'bermain';

    // Specify fillable fields
    protected $fillable = [
        'name',
        'age',
        'phone',
        'duration',
        'selected_time',
        'start_time',
        'end_time',
        'day',
        'date',
        'payment_proof',
        'status',
        'remaining_time'
    ];

    // Cast attributes
    protected $casts = [
        'date' => 'date',
        'selected_time' => 'datetime',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
