<?php

namespace App;

use App\bebidas;
use App\platos;
use App\User;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plato_id', 'bebida_id', 'user_id', 'restaurante_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function plato()
    {
        return $this->belongsTo(platos::class, 'plato_id');
    }

    public function bebida()
    {
        return $this->belongsTo(bebidas::class, 'bebida_id');
    }

    public function dueño()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
