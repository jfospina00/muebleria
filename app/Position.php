<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model {

	protected $table = 'categories';

	protected $fillable = ['name_position','tittle_position','message_position'];

}
