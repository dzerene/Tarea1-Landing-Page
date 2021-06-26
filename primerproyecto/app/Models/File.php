<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'title',
      'path',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

}