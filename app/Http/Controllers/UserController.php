<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\User;
class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
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

	public function edit($id)
	{	$user = User::find($id);
		// if(Auth::check()){
		// 	$count = 0;
		// 	if(Auth::user()->last_name == '') $count++;
		// 	if(Auth::user()->telephone == '') $count++;
		// 	if(Auth::user()->cellphone == '') $count++;
		// 	if(Auth::user()->address   == '') $count++;
		// 	$count;
		// 	return view('users.modify',['user'=>$user,'count'=>$count]);
		// }
		return view('users.modify',['user'=>$user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$user = User::find($id);
        $user->name      = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->telephone = $request->get('telephone');
        $user->cellphone = $request->get('cellphone');
        $user->address   = $request->get('address');
		$user->save();
        return redirect('home');
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
