<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $fillable = ['c_id', 'fname', 'lname', 'dob','gender','phone', 'email', 'company'];
}
