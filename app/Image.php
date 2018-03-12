<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $guarded=[];

  public function publication()
  {
      return $this->belongsTo(Publication::class);
  }
}
