<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsModel extends Model
{
    //
    protected $table = 'studentdetails';
    protected $fillable = ['stdAddress', 'memid'];
}
