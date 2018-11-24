<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use Notifiable;

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usuario($id)
    {
        return User::where('id', '=', $id)->get()->name;

    }

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
