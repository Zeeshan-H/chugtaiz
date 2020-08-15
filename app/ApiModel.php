<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{
    //
    protected $table = 'students';
    protected $fillable = ['fname', 'lname'];
}
