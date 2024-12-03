<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{

    protected $fillable = ['post_job_id', 'user_id'];

    public function job(){
        return $this->hasOne(post_job::class, 'id','post_job_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }
}
