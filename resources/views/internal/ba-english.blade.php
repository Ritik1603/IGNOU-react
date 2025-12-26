@extends('layouts.user')
@section('page_h1', 'Subscribe our newsletter for newest books updates')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')
<!-- Card 4 -->
<div class="product-grid container-fluid mt-5 mb-5">
	<div class="product-card">
		<div class="product-image">
			<span class="sale-badge">Sale!</span>
			<a href="{{ route('page.show', ['page' => 'shop-detail']) }}">
				<img src="./images/books/book16.png" alt="Product Image">
			</a>
		</div>
		<div class="product-content">
			<h3 class="product-title">BEGC 104 </h3>
			<p class="product-subtitle">British Poetry and Drama : 14th- 17th Centuries</p>
			<label>Type</label>
			<select>
				<option>Typed</option>
				<option>Soft Copy</option>
				<option>Handwritten Soft Copy</option>
				<option>Handwritten Hard Copy</option>
			</select>
			<label>Select Medium</label>
			<select>
				<option>English</option>
				<option>Hindi</option>
			</select>
			<label>Session</label>
			<select>
				<option>Jul 24 - Jan 25</option>
				<option>Jan 25 - Jul 25</option>
			</select>
			<div class="price-box">
				<span class="old-price">₹120.00</span>
				<span class="new-price">₹75.00</span>
				<span class="discount">Save ₹40.00 (33%)</span>
			</div>
			<a href="{{ route('page.show', ['page' => 'shop-cart']) }}">
				<button class="add-btn">ADD TO CART</button>
			</a>
		</div>
	</div>

	<div class="product-card">
		<div class="product-image">
			<span class="sale-badge">Sale!</span>
			<a href="{{ route('page.show', ['page' => 'shop-detail']) }}">
				<img src="./images/books/book16.png" alt="Product Image">
			</a>
		</div>
		<div class="product-content">
			<h3 class="product-title">BEGC 105 </h3>
			<p class="product-subtitle">American Literature</p>
			<label>Type</label>
			<select>
				<option>Typed</option>
				<option>Soft Copy</option>
				<option>Handwritten Soft Copy</option>
				<option>Handwritten Hard Copy</option>
			</select>
			<label>Select Medium</label>
			<select>
				<option>English</option>
				<option>Hindi</option>
			</select>
			<label>Session</label>
			<select>
				<option>Jul 24 - Jan 25</option>
				<option>Jan 25 - Jul 25</option>
			</select>
			<div class="price-box">
				<span class="old-price">₹120.00</span>
				<span class="new-price">₹75.00</span>
				<span class="discount">Save ₹40.00 (33%)</span>
			</div>
			<a href="{{ route('page.show', ['page' => 'shop-cart']) }}">
				<button class="add-btn">ADD TO CART</button>
			</a>
		</div>
	</div>

	<div class="product-card">
		<div class="product-image">
			<span class="sale-badge">Sale!</span>
			<a href="{{ route('page.show', ['page' => 'shop-detail']) }}">
				<img src="./images/books/book16.png" alt="Product Image">
			</a>
		</div>
		<div class="product-content">
			<h3 class="product-title">BEGC 107 </h3>
			<p class="product-subtitle">British Poetry and Drama: 17th & 18th Centuries</p>
			<label>Type</label>
			<select>
				<option>Typed</option>
				<option>Soft Copy</option>
				<option>Handwritten Soft Copy</option>
				<option>Handwritten Hard Copy</option>
			</select>
			<label>Select Medium</label>
			<select>
				<option>English</option>
				<option>Hindi</option>
			</select>
			<label>Session</label>
			<select>
				<option>Jul 24 - Jan 25</option>
				<option>Jan 25 - Jul 25</option>
			</select>
			<div class="price-box">
				<span class="old-price">₹120.00</span>
				<span class="new-price">₹75.00</span>
				<span class="discount">Save ₹40.00 (33%)</span>
			</div>
			<a href="{{ route('page.show', ['page' => 'shop-cart']) }}">
				<button class="add-btn">ADD TO CART</button>
			</a>
		</div>
	</div>
</div>



<!-- Newsletter -->
<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
	<div class="container">
		<div class="subscride-inner">
			<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
				<div class="col-xl-7 col-lg-12">
					<div class="section-head mb-0">
						<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<form class="dzSubscribe style-1" action="" method="post">
						<div class="dzSubscribeMsg"></div>
						<div class="form-group">
							<div class="input-group mb-0">
								<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
								<div class="input-group-addon">
									<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
										<span>SUBSCRIBE</span>
										<i class="fa-solid fa-paper-plane"></i>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Newsletter End -->

</div>
@endsection