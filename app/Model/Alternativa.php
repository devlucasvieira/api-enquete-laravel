<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $fillable = ['titulo', 'questionarios_id',];

    public function questionarios(){
        return $this->belongsTo(Questionario::class);
    }
    
    public function respondentes(){
        return $this->hasMany(Respondentes::class);
    }
}
