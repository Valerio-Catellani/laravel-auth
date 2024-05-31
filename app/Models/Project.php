<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'created',
        'programming_languages',
        'frameworks',
        'images',
        'url'
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
