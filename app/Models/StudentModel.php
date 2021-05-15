<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'students';

    public $timestamps = false;

    protected $fillable= ['student_name','grade','image','date_of_birth','address','city','country'];

    
}
