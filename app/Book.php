<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //Table name
    protected $table = 'book';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
