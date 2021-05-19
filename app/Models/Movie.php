<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'description', 'link', 'potraitimage', 'landscapeimage', 'create_by', 'modified_by'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
