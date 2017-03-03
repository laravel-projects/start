<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait; 
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fullname(){
        return $this->firstname.' '.$this->lastname;
    }

    public function img(){
        $defultUserImg = "assets/app/img/default/";
        $defultUserImg .= (!empty($this->gender)&&($this->gender == false))? "default_avatar_w.jpg" :"default_avatar_m.jpg";
        return (!empty($this->img))?$this->img: $defultUserImg ;
    }


}
