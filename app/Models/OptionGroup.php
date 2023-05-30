<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionGroup extends Model
{
    use HasFactory;

    public function options(){
        return $this->hasMany('App\Models\Option','group_id');
    }
}
