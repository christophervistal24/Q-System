<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable = ['number'];

    public function next($number)
    {
        return $this->where('number', '>', $number)->orderBy('number','asc')->first();
    }
}
