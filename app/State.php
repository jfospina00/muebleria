<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

	protected $table = 'states';

	protected $fillable = ['name_state', 'type'];
	//Product
	public function product()
	{
		return $this->hasOne('App\Product');
	}
	//Offer
	public function offer()
	{
		return $this->belongsTo('App\Offer');
	}
	//Order
	public function order()
	{
		return $this->belongsTo('App\Order');
	}
}
