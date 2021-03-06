<?php namespace App\Http\Controllers;
use Auth;
use App\Offer;
use App\Product;
use App\User;
use Session;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$offers = Offer::where('id','!=',1)->get();
		$produs = Product::all();
		$users  = User::all();
		if (Auth::user()->role == 0) {
			$id = Auth::user()->id;
			$user = User::find($id);
			$user->role = 2;
			$user->save();
		}
		if(Auth::check()){
			$count = 0;
			if(Auth::user()->last_name == '') $count++;
			if(Auth::user()->telephone == '') $count++;
			if(Auth::user()->cellphone == '') $count++;
			if(Auth::user()->address   == '') $count++;
			Session::put('count_field',$count);
			return view('home',['offers'=>$offers, 'produs'=>$produs, 'users'=>$users]);
		}
	}

}
