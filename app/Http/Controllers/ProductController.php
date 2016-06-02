<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Category;
use App\Offer;

class ProductController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		if(Auth::user()->role == 1){
			$products   = Product::all();
			$categories = Category::all();
			$offers     = Offer::all();
			return view('products.list',['products'=>$products,'categories'=>$categories,'offers'=>$offers]);
		}
		if(Auth::user()->role == 2){
			$products   = Product::all();
			return view('products.list',['products'=>$products]);
		}else{
			return view('home')->with('message','¡Ingreso No Autorizado!');
		}
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
		$product = new Product;
		$product->state_id            = 1;
		$product->offer_id            = $request->get('offer_id');
		$product->material            = $request->get('material');
		// $product->price            = $request->get('price');
		$product->category_id         = $request->get('category_id');
		$product->description_product = $request->get('description_product');

		$product->save();
		return redirect('product');
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
