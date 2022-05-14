<?php

namespace App\Model;

use App\Alternativa;
use Illuminate\Database\Eloquent\Model;

class Respondente extends Model
{
    protected $fillable = ['nome', 'email', 'alternativas_id'];

    public function alternativas(){
        return $this->belongsTo(Alternativa::class);
    }
}
