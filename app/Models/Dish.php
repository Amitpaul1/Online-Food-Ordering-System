<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
	public $timestamps = false;

	 protected $fillable = [
        'Dish_name',
        'Dish_Img',
        'price',
    ];
	

}
