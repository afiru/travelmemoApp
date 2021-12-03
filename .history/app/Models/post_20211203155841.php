<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    const CREATED_AT = 'post_date';
    const UPDATED_AT = 'post_modified';

    public static $rules = [
        'posts.travelDate' => 'required',
        'posts.post_title' => 'required|max:255',
        'posts.post_content' => 'required',
        'posts.post_status' => 'required|max:255',
        'posts.post_latitude' => 'required|max:255|numeric',
        'posts.post_longitude' => 'required|max:255|numeric',
        'posts.post_floor' => 'required|max:255|integer',
        'posts.post_start_time' => 'required',
        'posts.post_end_time' => 'required',
    ];
}
