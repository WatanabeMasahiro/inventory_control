<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array (
        'goods' => 'required',
        'numbers'  => 'required',
    );

}
