@extends('homepage.home')
 @section('main')
 <div class="col-md-12">
	<div class="row">
		<div class="products-tabs">
			<!-- tab -->
			<div id="tab1" class="tab-pane active">
				<div class="products-slick" data-nav="#slick-nav-1">
					<!-- product -->
				@foreach($watch as $rs)	
				<div class="product">
						
						<div class="product-img">
							
							<img src="/uploads/{{ $rs->image }}" alt="">
							
						</div>
						<div class="product-body">
							
							<h3 class="product-name"><a href="#"></a>{{ $rs->name }}</h3>
							<h4 class="product-price">{{ $rs->price }}</h4>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product-btns">
								<p class="btn-holder"><a href="{{ route('watch.detail', $rs->id) }}" class="btn btn-primary btn-block text-center" role="button">Detail</a></p>
						</div>
						<div class="add-to-cart">
							<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
						</div>
					</div>
					<!-- /product -->

					
				</div>
				@endforeach
				<div id="slick-nav-1" class="products-slick-nav"></div>
			</div>
			<!-- /tab -->
		</div>
	</div>
</div>
<!-- Products tab & slick -->
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
 @endsection