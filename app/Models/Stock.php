<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array (
        'category' => 'max:50',
        'goods' => 'required|max:50',
        'numbers' => 'required|lte:9999',
        'remarks' => 'max:1000',
    );

}
