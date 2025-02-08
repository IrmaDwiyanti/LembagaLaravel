<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_id',
        'locale',
        'title',
        'content',
        'date',
    ];

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
    
}
