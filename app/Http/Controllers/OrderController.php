<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		if(Auth::check())
		{
			if(Auth::user()->role == 2)
			{	
				$count = 0;
				if(Auth::user()->last_name == '') $count++;
				if(Auth::user()->telephone == '') $count++;
				if(Auth::user()->cellphone == '') $count++;
				if(Auth::user()->address   == '') $count++;
				$count;
				if($count == 0 )
					return view('orders.list');
				else		
					return redirect('home');
			}
		}
	}

	public function create()
	{
		if(Auth::check())
		{
			if(Auth::user()->role == 2)
			{	
				$count = 0;
				if(Auth::user()->last_name == '') $count++;
				if(Auth::user()->telephone == '') $count++;
				if(Auth::user()->cellphone == '') $count++;
				if(Auth::user()->address   == '') $count++;
				$count;
				if($count == 0 )
					return view('orders.create');
				else		
					return redirect('home');
			}
		}
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
