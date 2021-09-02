<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cidade_id'];
    //protected $guarded = [ 'admin' ];

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }
    public function compra() {
        return $this->hasMany(Compra::class);
    }
}
