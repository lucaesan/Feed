<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'event_date', 'user_id'];
    
    protected $casts = [
        'event_date' => 'datetime'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
