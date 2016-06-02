@if (Auth::user()->role == 2 || Auth::guest())
	<h4 class="text-center">{{ $offer->name_offer }} Descuento del <span>{{ $offer->discount }}%</span></h4>
	<div class="col-md-6  text-center">{{ $offer->start_date }}</div>
	<div class="col-md-6  text-center">{{ $offer->finish_date }}</div>
	<div class="col-m-12">{{ $offer->description_offer }}</div>
@endif