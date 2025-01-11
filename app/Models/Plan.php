<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
