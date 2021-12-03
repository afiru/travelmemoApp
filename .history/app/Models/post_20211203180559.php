<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    const CREATED_AT = 'postDate';
    const UPDATED_AT = 'postModified';

    public static $rules = [
        'travelDate' => 'required',
        'arrivalTime' => 'required|max:255',
        'stayTime' => 'required',
        'prefectures' => 'required|max:255',
        'interchange' => 'required|max:255',
        'term' => 'required',
        'placeName' => 'required',
        'cost'=>'required|max:255|numeric',
    ];
}
