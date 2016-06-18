<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';

	protected $fillable = ['name_product', 'material','description_product', 'category_id','offer_id', 'state_id','imageProduct_id'];

	//Offer
	public function offer()
	{
		return $this->hasOne('App\Offer', 'offer_id');
	}
	//State
	public function state()
	{
		return $this->belongsTo('App\State', 'state_id');
	}
	//Category
	public function category()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}
}
