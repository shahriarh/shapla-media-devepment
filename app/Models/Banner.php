<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'short_description', 'year', 'age_limit', 'image', 'cinebazurl',
        'trailler_button_url', 'menu_show', 'page_show', 'home_show', 'is_active', 'create_by', 'modified_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
