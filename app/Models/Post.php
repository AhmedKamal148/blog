<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements TranslatableContract
{
    use HasFactory, Translatable;


    public array $translatedAttributes = ['title', 'content', 'smallDesc'];
    protected $fillable = ['user_id'];
}
