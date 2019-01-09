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
        'id', 'user_id', 'title', 'description', 'img_id', 'status', 'start_date', 'end_date', 'created_at', 'updated_at',
    ];

    public function image() {
        return $this->belongsTo('App\Testimonial','img_id');
    }

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
}