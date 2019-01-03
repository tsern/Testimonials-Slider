<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 02.01.19
 * Time: 14:20
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name'];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}