<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{

    protected $fillable = ['name'];

    /**
     * A pizza has many ingredients
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient');
    }

    public static function calculateTotal($pizzas)
    {
        foreach($pizzas as $key => $pizza)
        {
            $pizzas[$key]['total'] = 0;
            foreach($pizza['ingredients'] as $ingredients)
            {
                $pizzas[$key]['total'] += $ingredients['price'] + ($ingredients['price']/2);
            }
        }

        return $pizzas;
    }
}
