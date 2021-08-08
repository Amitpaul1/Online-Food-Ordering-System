<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Dish;


class orderItem extends Model
{
    use HasFactory;
	public $timestamps = false;
	  protected $fillable = [
        'order_id',
        'dish_id',
        'dish_name',
        'quantity',
        'price',
    ];
	
	
	
	public function dishes()
	
	{
		
		
		 return $this->belongsTo(Dish::class,'dish_id','id');
	}
	
	
}
