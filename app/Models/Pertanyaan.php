<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    
    protected $table = 'pertanyaan';
    protected $fillable = ['nama', 'pertanyaan', 'jawaban', 'nama_penjawab', 'gambar'];
}