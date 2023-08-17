<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stud extends Model
{
    use HasFactory;
    function getUser(){
        return $this->hasOne('app\Models\User','user_id');
   }
}
