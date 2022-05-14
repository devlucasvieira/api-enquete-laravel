<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    protected $fillable = ['titulo', 'descricao', 'users_id', 'tipos_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function tipos(){
        return $this->belongsTo(Tipo::class);
    }
    public function alternativas(){
        return $this->hasMany(Alternativa::class);
    }
}
