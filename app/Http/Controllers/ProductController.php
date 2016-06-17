<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\ImageProduct;
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
		$product->state_id            = 5;
		$product->offer_id            = $request->get('offer_id');
		$product->material            = $request->get('material');
		$product->price               = $request->get('price');
		$product->category_id         = $request->get('category_id');
		$product->description_product = $request->get('description_product');
		// Image 1
		if (!empty($request->file('imageProduct1'))) {
			$file           = $request->file('imageProduct1');
	        $nameData       = $file->getClientOriginalName();
	        $product->imageProduct1 = $nameData;
	        \Storage::disk('imagesProduct')->put($nameData,\File::get($file));
		}else{
	        $product->imageProduct1 = 'no-product-image.jpg';
		}
		// Image 2
		if (!empty($request->file('imageProduct2'))) {
			$file2           = $request->file('imageProduct2');
	        $nameData2       = $file2->getClientOriginalName();
	        $product->imageProduct2 = $nameData2;
	        \Storage::disk('imagesProduct')->put($nameData2,\File::get($file2));
		}
		// Image 3
		if (!empty($request->file('imageProduct3'))) {
			$file3           = $request->file('imageProduct3');
	        $nameData3       = $file3->getClientOriginalName();
	        $product->imageProduct3 = $nameData3;
	        \Storage::disk('imagesProduct')->put($nameData3,\File::get($file3));
		}
		// Image 4
		if (!empty($request->file('imageProduct4'))) {
			$file4           = $request->file('imageProduct4');
	        $nameData4       = $file4->getClientOriginalName();
	        $product->imageProduct4 = $nameData4;
	        \Storage::disk('imagesProduct')->put($nameData4,\File::get($file4));
		}
		// Image 5
		if (!empty($request->file('imageProduct5'))) {
			$file5           = $request->file('imageProduct5');
	        $nameData5       = $file5->getClientOriginalName();
	        $product->imageProduct5 = $nameData5;
	        \Storage::disk('imagesProduct')->put($nameData5,\File::get($file5));
		}
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
