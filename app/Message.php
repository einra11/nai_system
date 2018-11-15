<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
     //Table Name
     protected $table = 'message';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = true;
}
