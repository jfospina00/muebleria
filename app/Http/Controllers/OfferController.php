<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Offer;
use App\User;
use Auth;

class OfferController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$offers = Offer::where('id','!=',1)->get();
		return view('offers.list', ['offers'=>$offers]);
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
	public function store(Request $request)
	{
		$offer = new Offer;
		
		$offer->name_offer        = $request->get('name_offer');
		$offer->name_real_offer   = $request->get('name_real_offer');
		$offer->description_offer = $request->get('description_offer');
		$offer->discount          = $request->get('discount');
		$offer->start_date        = $request->get('start_date');
		$offer->finish_date       = $request->get('finish_date');
		// $offer->state_id = ?;
		$offer->save();
		return redirect('offer');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(request $request)
	{
		$id    = $request->get('id');
		$offer = Offer::find($id);
        return view('offers.show',['offer'=>$offer]);
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
