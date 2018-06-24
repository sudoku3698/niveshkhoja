<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use DB;

class GetQuote extends Model
{
  protected $table="get_quotes";

  public function getDetailsAttribute()
  {
    return DB::table($this->service_type)->where(['id'=>$this->service_id])->first();
  }
}