<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mesas', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * User belongs to Pedidos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurante()
    {
        // belongsTo(RelatedModel, foreignKey = pedidos_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class, 'id');
    }
}
