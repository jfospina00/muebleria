<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table = 'orders';

	protected $fillable = ['total_priece', 'state_id', 'user_id', 'product_id'];

	public function state()
	{
		return $this->hasOne('App\State', 'state_id');
	}
	public function user()
	{
		return $this->hasOne('App\User', 'user_id');
	}
	public function product()
	{
		return $this->hasMany('App\Product', 'product_id');
	}
}
