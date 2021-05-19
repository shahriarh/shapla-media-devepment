<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'metadescription', 'description', 'meta_title', 'message', 'mission', 'vision',  'create_by', 'modified_by'
    ];
}
