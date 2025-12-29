<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Test;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question_title',
        'test_id',
        'role_id',
        'answers',
        'time_spent'
    ];
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    

}
