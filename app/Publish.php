<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Publish extends Model
{
    //
     //Table Name
     protected $table = 'publish';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = true;
}
