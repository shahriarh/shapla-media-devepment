<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name', 'is_active', 'create_by', 'modified_by'];

    public function banner()
    {
        return $this->hasMany(Banner::class);
    }

    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
}
