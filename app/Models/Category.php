<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cover',
    ];

    public function Albums()
    {
        return $this->hasMany('App\Models\Album', 'category');
    }

}
