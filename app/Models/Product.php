<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "clothes";
    public $timestamps = false;
    protected $fillable = ['thumbpainel','title','subtitle','IsFav','discount'];
}
