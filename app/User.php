<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','direccion', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at','created_at','remember_token','email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'direccion'=>'array'
    ];
    public function librerias(){
        return $this->hasMany('App\Libreria');
    }
    public function getFullNameAttribute(){
        return "{$this->name}-{$this->email}";
    }
    public function getPassNameAttribute(){
        return "{$this->name}-{$this->password}";
    }
    public function getLibroUserAttribute(){
        return $this->librerias;
    }
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
    protected $appends=[
        'full_name','pass_name','libro_user'
    ];


}
