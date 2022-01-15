<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;

    protected $table = 'donates';
    protected $fillable = [
        'amount',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
