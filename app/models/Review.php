<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table="reviews";

    protected $fillable= ['service_type','service_id','full_name','mobile','email','review','rating','city'];
}
