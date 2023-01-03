<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "Category";
    public $timestamps = false;
    protected $fillable = ['CategoryId', 'CategoryName'];
    public function Product($value='')
    {
    return $this->hasMany(Product::class,"CategoryId","CategoryId");
    }
}
