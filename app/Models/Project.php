<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'created',
        'categories',
        'technologies',
        'image_url',
    ];

    public static function generateSlug($name)
    {
        $slug = Str::slug($name, '-');
        $count = 1;
        while (Project::where('slug', $slug)->first()) {
            $slug = Str::slug($name . '-' . $count, '-');
            $count++;
        }
        return $slug;
    }
}
