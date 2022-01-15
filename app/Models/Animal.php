<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
