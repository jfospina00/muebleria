<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'categories';

	protected $fillable = ['name_product', 'material','description_product', 'category_id','offer_id', 'state_id','imageProduct_id'];

	public function offer()
	{
		return $this->hasOne('App\Offer', 'offer_id');
	}
	public function state()
	{
		return $this->hasOne('App\State', 'state_id');
	}
	public function category()
	{
		return $this->hasOne('App\Category', 'category_id');
	}
	public function imageProducts()
	{
		return $this->hasMany('App\ImageProduct', 'imageProduct_id');
	}
}
