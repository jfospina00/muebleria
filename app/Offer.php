<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {

	protected $table = 'offer';

	protected $fillable = ['name_offer','description_offer','discount','start_date','finish_date'];

	public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
