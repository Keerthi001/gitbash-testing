<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Example extends Model
{
  protected $fillable = [
      'name', 'email', 'password',
  ];

}
