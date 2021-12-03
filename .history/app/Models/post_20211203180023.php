<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    public static $rules = [
        'travelDate' => 'required',

    ];
}
