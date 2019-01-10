<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 02.01.19
 * Time: 17:43
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestimonialSlider extends Model
{
    protected $fillable = [
        'id', 'title', 'description', 'status', 'show_image', 'show_company', 'start_date', 'end_date', 'created_at', 'updated_at',
    ];
}