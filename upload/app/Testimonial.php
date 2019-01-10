<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 04.01.19
 * Time: 13:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'id', 'title', 'status', 'description', 'name', 'lastname', 'company', 'website', 'linkedin', 'image', 'slider_id',
    ];

    public function slider() {
        return $this->belongsTo('App\TestimonialSlider','slider_id');
    }
}