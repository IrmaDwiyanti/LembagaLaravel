<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Berita extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $casts = [
        'status' => 'string', 
    ];

    protected $attributes = [
        'status' => '0', 
    ];

    public function translations()
    {
        return $this->hasMany(BeritaTranslation::class, 'berita_id');
    }
    

    public function getTranslatedAttribute($field)
    {
    $translation = $this->translations->where('locale', app()->getLocale())->first();
    return $translation ? $translation->$field : $this->$field;
    }
    
    
}
