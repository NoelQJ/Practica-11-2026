<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'productos';
  protected $primaryKey = 'id_productos'; 
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'productos',
        'precio',
        'categoria',
        'stock'
    ];    

}
