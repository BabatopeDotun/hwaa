<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //tabe Name
    protected $table = 'posts';

    //Primary Key
    Public $primarykey = 'id';

    //Timestamp
    public $timestamps = true;
}
