<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = [
        'itemName' => 'required',
        'itemGenre' => 'required',
        'cost' => 'required',
    ];
}
