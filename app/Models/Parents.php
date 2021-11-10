<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public function comments()
    {
        return $this->hasMany(Childrens::class);
    }

    protected $fillable = ['name_father', 'name_mother'];

}
