<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    /**
     * Kolom yang bisa diisi secara massal.
     * Sesuaikan dengan field yang ada di migration tadi.
     */
    protected $fillable = [
        'name',
        'issuer',
        'issued_at',
        'image',
    ];
}