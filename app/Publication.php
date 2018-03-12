<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $guarded=[];

    public function image()
    {
      return $this->hasMany(Image::class);
    }
}
