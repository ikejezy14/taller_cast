<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libreria extends Model
{
    protected $fillable = [
        'id', 'nombre', 'descripcion',
    ];

    protected $hidden = [
        'updated_at','created_at','user_id'
    ];

    public function usuario(){
        return $this->belongsTo('App\User');
    }

}
