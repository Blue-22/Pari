<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    // use HasFactory;<?php
        protected $fillable = [
            'start_date',
            'end_date',
            'cote',
            'result1',
            'result2',
            'team1',
            'team2'
        ];
}
