<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function writer()
    {
       return $this->belongsTo('App\Models\Admin', 'user_id', 'id');
    }

}
