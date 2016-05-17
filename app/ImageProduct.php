<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model {

	protected $table = 'categories';

	protected $fillable = ['product_id'];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}
}