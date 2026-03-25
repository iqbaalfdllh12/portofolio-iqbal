<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    // Tambahkan kolom baru ke fillable agar bisa diinput lewat form/Filament
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'github_link',
        'live_link',
        'tech_stack',
    ];

    /**
     * Casting: Mengubah string JSON di database menjadi array secara otomatis.
     */
    protected $casts = [
        'tech_stack' => 'array',
    ];

    /**
     * Boot function: Otomatis bikin slug kalau lupa diisi.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->name);
            }
        });
    }
}