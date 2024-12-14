<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    protected $fillable = ["first_name", "last_name", "email", "phone", "text", "meta_data"];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return $this->first_name . " ". $this->last_name;
    }
}
