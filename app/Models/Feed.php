<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = ['title','description','event_date'];
    protected $casts = ['event_date' => 'datetime'];
    use HasFactory;
}
