<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Assignment extends Model
{    
    use HasFactory;
    protected $table = 'assignment';

    protected $fillable = [            
        'name',
        'course',
        'description',
        'submit_location',
        'due_datetime',
        'level',
        'estimation',        
    ];

    public function user() 
    {        
        return $this->belongsTo(User::class);
    }
}
