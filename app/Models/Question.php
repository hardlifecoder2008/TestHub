<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Test;
use App\Models\ResultTest;
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
    public function resultTest()    
    {
        return $this->hasOne(ResultTest::class);
    }

}
