<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childrens extends Model
{
    public function parents()
    {
        return $this->belongsTo(Parents::class);
    }

    protected $fillable = ['parentsId', 'name'];


}
