<?php

namespace App;

use App\pedidos;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo',
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
    public function pedidos()
    {
        // belongsTo(RelatedModel, foreignKey = pedidos_id, keyOnRelatedModel = id)
        return $this->belongsTo(pedidos::class, 'id');
    }


    /**
     * User belongs to clientes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
        return $this->belongsTo(Cliente::class, 'user_id');
    }

    /**
     * User belongs to restaurante.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurante()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
        return $this->belongsTo(Restaurante::class, 'user_id');
    }

}
