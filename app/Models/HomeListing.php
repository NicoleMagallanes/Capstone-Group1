<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeListing extends BaseModel
{
  

    protected $fillable = [
        'title',
        'description',
        'price',
    ];
    public function status(){
        return $this->belongsTo('\App\Models\Option', 'status_id');
    }

    public function getAuthorNameAttribute(){
        return $this->createdBy->name;
    }

    public function getStatusNameAttribute(){
        return $this->status->name;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
