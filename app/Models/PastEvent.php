<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PastEvent extends Model
{
    //
    public function organizer(){
        return $this->belongsTo(User::class);
    }
    public function participators(){
        return $this->belongsToMany(User::class);
    }
}
