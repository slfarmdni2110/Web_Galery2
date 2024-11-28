<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Mendefinisikan field yang boleh diisi
    protected $fillable = ['title', 'content', 'category_id', 'petugas_id', 'status', 'description'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class); // Jika relasi menggunakan Petugas
    }

    //Relasi ke Gallery
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
