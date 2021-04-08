<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = "post";   
    // protected $fillable = ['title','body'];
      
    protected $table = "abdu";   
    protected $fillable = ['Name', 'Surname','Email','Photo'];
}
