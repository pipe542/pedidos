<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_platos', 'id_bebidas','id_users',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];

}
