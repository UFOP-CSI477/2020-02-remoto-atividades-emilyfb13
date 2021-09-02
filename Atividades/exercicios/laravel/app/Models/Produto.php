<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'um'];
    //protected $guarded = [ 'admin' ];

    // 1-estado -> tem muitas cidades;
    public function compras() {
        return $this->hasMany(Compra::class);
    }


}
