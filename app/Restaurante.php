<?php

namespace App;

use App\bebidas;
use App\platos;
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

    /**
     * Restaurante belongs to Platos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function platos()
    {
        // belongsTo(RelatedModel, foreignKey = platos_id, keyOnRelatedModel = id)
        return $this->belongsTo(platos::class, 'user_id');
    }

    /**
     * Restaurante belongs to Bebidas.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bebidas()
    {
        // belongsTo(RelatedModel, foreignKey = bebidas_id, keyOnRelatedModel = id)
        return $this->belongsTo(bebidas::class, 'user_id');
    }
}
