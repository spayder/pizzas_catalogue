<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $fillable = ['name', 'price'];

    /**
     * An ingredient belongs to many pizzas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza');
    }
}
