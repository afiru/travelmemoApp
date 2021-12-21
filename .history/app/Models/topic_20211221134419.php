<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = [
        'title' => 'required',
        'content' => 'required',
    ];
}
