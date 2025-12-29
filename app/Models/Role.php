<?php

namespace App\Models;

use App\Models\User;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
