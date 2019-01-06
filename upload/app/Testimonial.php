<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 02.01.19
 * Time: 17:43
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'id', 'user_id', 'title', 'text', 'img_url', 'status', 'start_date', 'end_date', 'created_at', 'updated_at',
    ];

}