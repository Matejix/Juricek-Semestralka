<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $fillable = [
        'text',
        'animal_id',
    ];

    public function animal(){
        return $this->belongsTo(Animal::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
