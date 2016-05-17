<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	protected $table = '';

	protected $fillable = ['first_name','last_name','telephone','cellphone','address','email','message'];

}
