<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari default (optional)
    protected $table = 'categories';

    // Kolom yang boleh di-mass-assign
    protected $fillable = ['title'];

    // Relasi Category ke post (One to Manny)
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // Tentukan primary key jika bukan 'id' (optional)
    // protected $primaryKey = 'id';

    // Disable timestamps jika tidak menggunakan created_at dan updated_at (optional)
    // public $timestamps = false;
}
