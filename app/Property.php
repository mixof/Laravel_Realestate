<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description', 'rent_type','price', 'price_type','location_id','street','rooms_count','area','bedrooms_count','bathrooms_count',
        'images','category_id','phone','phone_2','email',
    ];

}
