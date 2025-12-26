@extends('layouts.user')
@section('page_h1', 'Contact')
@section('title', '') @section('description', '') @section('keywords', '') @section('og_title', '') @section('og_description', '') @section('og_image', '')

@section('content')
<div class="page-content">
	<!-- inner page banner -->
	<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Contact</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('page.show', ['page' => 'index']) }}"> Home</a></li>
						<li class="breadcrumb-item">Contact</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="content-inner-2 pt-0">
	<div class="map-iframe">
			<iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.7575639937313!2d77.07010107495688!3d28.637027283877558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04eeaa3b18bf%3A0x537b9f4947113437!2sUnnati%20Education!5e0!3m2!1sen!2sin!4v1759574387954!5m2!1sen!2sin" width="" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

	<section class="contact-wraper1" style="background-image: url(images/background/bg2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact-info">
						<div class="section-head text-white style-1">
							<h3 class="title text-white">Get In Touch</h3>
							<p>If you are interested in working with us, please get in touch.</p>
						</div>
						<ul class="no-margin">
							<li class="icon-bx-wraper text-white left m-b30">
								<div class="icon-md">
									<span class="icon-cell text-primary">
										<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
											<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
											<circle cx="12" cy="10" r="3"></circle>
										</svg>
									</span>
								</div>
								<div class="icon-content">
									<h5 class=" dz-tilte text-white">Our Address</h5>
									<p>1247/Plot No. 39, 15th Phase, Huab Colony, Kukatpally, Hyderabad</p>
								</div>
							</li>
							<li class="icon-bx-wraper text-white left m-b30">
								<div class="icon-md">
									<span class="icon-cell text-primary">
										<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
											<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
											<polyline points="22,6 12,13 2,6"></polyline>
										</svg>
									</span>
								</div>
								<div class="icon-content">
									<h5 class="dz-tilte text-white">Our Email</h5>
									<p>info@gmail<br>services@gmail.com</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-7 m-b40">
					 <div class="contact-area1 m-r20 m-md-r0">
        <div class="section-head style-1">
            <h6 class="sub-title text-primary">CONTACT US</h6>
            <h3 class="title m-b20">Get In Touch With Us</h3>
        </div>

        <div class="p-4 bg-light rounded">
            <p class="mb-4">Fill in your details and tap the WhatsApp button â€“ weâ€™ll reply instantly!</p>
            
            <form id="whatsappForm">
                <div class="input-group mb-3">
                    <input type="text" id="name" class="form-control" placeholder="Full Name *" required>
                </div>
                <div class="input-group mb-3">
                    <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="phone" class="form-control" placeholder="Phone Number">
                </div>
                <div class="input-group mb-4">
                    <textarea id="message" rows="4" class="form-control" placeholder="Your Message *"></textarea>
                </div>

                <button type="submit" class="btn btn-success btnhover w-100">
                    <i class="fab fa-whatsapp"></i> Send via WhatsApp
                </button>
            </form>
        </div>
    </div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Box -->
	<section class="content-inner">
		<div class="container">
			<div class="row sp15">
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="icon-bx-wraper style-2 m-b30 text-center">
						<div class="icon-bx-lg">
							<i class="fa-solid fa-users icon-cell"></i>
						</div>
						<div class="icon-content">
							<h2 class="dz-title counter m-b0">125,663</h2>
							<p class="font-20">Happy Customers</p>
						</div>
					</div>
				</div>
				<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="icon-bx-wraper style-2 m-b30 text-center">
						<div class="icon-bx-lg">
							<i class="fa-solid fa-book icon-cell"></i>
						</div>
						<div class="icon-content">
							<h2 class="dz-title counter m-b0">50,672</h2>
							<p class="font-20">Book Collections</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="icon-bx-wraper style-2 m-b30 text-center">
						<div class="icon-bx-lg">
							<i class="fa-solid fa-store icon-cell"></i>
						</div>
						<div class="icon-content">
							<h2 class="dz-title counter m-b0">1,562</h2>
							<p class="font-20">Our Stores</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6">
					<div class="icon-bx-wraper style-2 m-b30 text-center">
						<div class="icon-bx-lg">
							<i class="fa-solid fa-leaf icon-cell"></i>
						</div>
						<div class="icon-content">
							<h2 class="dz-title counter m-b0">457</h2>
							<p class="font-20">Famous Writers</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Box End -->

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
<script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('message').value.trim();
    
    if (!name || !message) {
        alert('Please fill in your Name and Message');
        return;
    }
    
    const text = `Hello! ðŸ‘‹%0AI am interested in your services.%0A%0A` +
                 `Name: ${encodeURIComponent(name)}%0A` +
                 (email ? `Email: ${encodeURIComponent(email)}%0A` : '') +
                 (phone ? `Phone: ${encodeURIComponent(phone)}%0A` : '') +
                 `%0AMessage:%0A${encodeURIComponent(message)}`;
    
    const whatsappURL = `https://wa.me/919899436384?text=${text}`;
    window.open(whatsappURL, '_blank');
});
</script>
@endsection