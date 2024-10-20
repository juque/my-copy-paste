<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Tags\HasTags;

class Snippet extends Model
{
  use HasTags;

  protected $fillable = ['title', 'content', 'note'];


  protected static function boot() 
  {

    parent::boot();

    static::addGlobalScope('order', function (Builder $builder) {
      $builder->orderBy('created_at', 'desc');
    });

  }
}
