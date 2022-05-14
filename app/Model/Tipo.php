<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = ['tipo', 'descricao'];

    public function questionarios(){
        $this->hasMany(Questionario::class);
    }
}
