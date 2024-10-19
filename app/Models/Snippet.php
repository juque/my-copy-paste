<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Snippet extends Model
{
  use HasTags;

  protected $fillable = ['title', 'content', 'note'];

}
