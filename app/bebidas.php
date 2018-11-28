<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bebidas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'precio', 'estado', 'restaurante_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * bebidas belongs to Pedidos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedidos()
    {
        // belongsTo(RelatedModel, foreignKey = pedidos_id, keyOnRelatedModel = id)
        return $this->belongsTo(pedidos::class, 'id');
    }

    /**
     * bebidas belongs to Resta.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurante()
    {
        // belongsTo(RelatedModel, foreignKey = resta_id, keyOnRelatedModel = id)
        return $this->belongsTo(restaurante::class, 'restaurante_id');
    }
}
