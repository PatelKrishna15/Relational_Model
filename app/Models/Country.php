<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable=['c_name','one_id'];
    function getOnerelation(){
     return $this->belongsTo('app\Models\Onerelation','one_id');
}
}
