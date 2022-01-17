<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animals';
    protected $fillable = [
            'latin_name',
            'slovak_name',
            'lifespan',            
            'number',
            'species',
            'occurrence',
            'endangered',
            'image',
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
}
