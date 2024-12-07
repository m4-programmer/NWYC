<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class VideoTag extends Model
{
    protected $guarded = [];

    public function scopeActive(Builder $q, $active = true): void
    {
        $q->where("status", "active");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
