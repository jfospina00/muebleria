<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Order;

class OrderController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		if(Auth::user()->role == 1){
			$orders = Order::all()->where('state_id', 3);
			return view('orders.list',['orders'=>$orders]);
		}
		if(Auth::user()->role == 2){	
			$id = Auth::user()->id;
			$order = Order::all()->where('user_id', $id)
								->where('state_id', 3);

			$orderR = Order::all()->where('user_id', $id)
								  ->where('state_id', 4);
			$count = Session::get('count_field');
			if($count == 0){
				return view('orders.list',['order'=>$order, 'orderR'=>$orderR]);
			}
			else{
				return redirect('home');
			}
		}
		else{
			return redirect('logout');
		}
	}

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
