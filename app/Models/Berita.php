<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'author',
        'date',
        'content',
        'user_id',
        'status',  
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'status' => 'string', 
    ];

    protected $attributes = [
        'status' => '0', 
    ];
    
}
