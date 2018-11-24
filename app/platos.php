<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class platos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'precio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * platos belongs to Pedi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedidos()
    {
        // belongsTo(RelatedModel, foreignKey = pedi_id, keyOnRelatedModel = id)
        return $this->belongsTo(pedidos::class, 'id');
    }
}
