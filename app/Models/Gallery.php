<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';
    protected $fillable = [
        'image',
        'animal_id',
    ];

    public function animal(){
        return $this->belongsTo(Animal::class);
    }
}
