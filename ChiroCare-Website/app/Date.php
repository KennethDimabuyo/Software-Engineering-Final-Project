<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = [
    	'cus_id', 'lname' , 'date', 'time', 'cellphone_number',
    ];
}
