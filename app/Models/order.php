<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderItem;


class order extends Model
{
    use HasFactory;
	protected $table='orders';
	protected $fillable = [
        'user_id',
        'order_status',
        'tracking_no',
        'total_price',
        'Name',
        'Phone',
        'Email',
        'Address',
        
	
	  ];
	  
	public function orderItems(){
		
		return $this->hasMany(orderItem::class);
	}
	
	
}
