<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name 
    // by default the table name is the class name
    /*
    if wanted to change the default name for the table 
    you can use this format for the table
    for table--> protected $table = 'table name';
    for primary key 
    public $primaryKey = 'item_id';
    for timestamp
    public timestamps = true;
    */
}
