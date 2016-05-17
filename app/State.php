<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

	protected $table = 'states';

	protected $fillable = ['name_state', 'type'];

	public function offer()
	{
		return $this->belongsTo('App\Product');
	}
	public function order()
	{
		return $this->belongsTo('App\Order');
	}
}
