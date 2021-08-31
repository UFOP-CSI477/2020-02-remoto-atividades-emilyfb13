<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'bairro', 'cidade', 'data_nascimento'];

    //1 pessoa possui muitos registros
    public function registros(){
        return $this->hasMany(Registro::class);
    }
    
}
