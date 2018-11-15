<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    //
     //Table Name
     protected $table = 'barangay';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = false;
}
