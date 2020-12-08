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
            'team1',
            'team2',
            'result1',
            'result2'
        ];
}