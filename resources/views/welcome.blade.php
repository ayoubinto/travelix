@extends('Layout.master')
@section('content')
<div class="menu trans_500">
	<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
		<div class="menu_close_container"><div class="menu_close"></div></div>
		<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
		<ul>
			<li class="menu_item"><a href="#">home</a></li>
			<li class="menu_item"><a href="about.html">À propos de nous</a></li>
			<li class="menu_item"><a href="offres.html">offres</a></li>
			<li class="menu_item"><a href="blog.html">nouvelles</a></li>
			<li class="menu_item"><a href="contact.html">contact</a></li>
		</ul>
	</div>
</div>

<!-- Home -->

<div class="home1">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explorer maintenant<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/12.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Wander</h1>
							<h1>the globe</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explorer maintenant<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/12.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>See the world,</h1>
							<h1>live the journey</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explorer maintenant<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

<!-- Search -->

<div class="search">
	

	<!-- Search Contents -->
	
	<div class="container fill_height">
		<div class="row fill_height">
			<div class="col fill_height">

				<!-- Search Tabs -->

				<div class="search_tabs_container">
					<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						<!-- <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div> -->
						<!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div> -->
						<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">Voyages personnelle</div>
						<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">Voyages organisés</div>
						<!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">Croisières</div> -->
						<!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div> -->
					</div>		
				</div>

				<!-- Search Panel -->

				<div class="search_panel active">
					<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						<div class="search_item">
							<div>D'où partez-vous ?</div>
							<!-- <input type="text" class="destination search_input" required="required"> -->
							<select name="adults" id="adults_1" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Où allez vous ?</div>
						<select name="adults" id="adults_2" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Départ</div>
							<input type="date" class="check_out search_input" placeholder="YYYY-MM-DD" style="background-color:white;padding:13px">
						</div>
						<div class="search_item">
							<div>Retour</div>
							<input type="date" class="check_out search_input" placeholder="YYYY-MM-DD" style="background-color:white;padding:13px">
						</div>
						<div class="search_item">
							<div>adultes</div>
							<select name="children" id="children_1" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
						<div class="search_item">
							<div>Enfants</div>
							<select name="children" id="children_1" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
						<button class="button search_button">recherche<span></span><span></span><span></span></button>
					</form>
				</div>

				<!-- Search Panel -->

				<div class="search_panel">
					<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
					<div class="search_item">
							<div>D'où partez-vous ?</div>
							<!-- <input type="text" class="destination search_input" required="required"> -->
							<select name="adults" id="adults_1" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Où allez vous ?</div>
						<select name="adults" id="adults_2" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Départ</div>
							<input type="date" class="check_out search_input" placeholder="YYYY-MM-DD" style="background-color:white;padding:13px">
						</div>
						<div class="search_item">
							<div>adultes</div>
							<select name="children" id="children_1" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
						<div class="search_item">
							<div>Enfants</div>
							<select name="children" id="children_1" class="dropdown_item_select search_input" style="background-color:white;padding:13px">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
						<button class="button search_button">recherche<span></span><span></span><span></span></button>
					</form>
				</div>

				<!-- Search Panel -->

				<div class="search_panel">
					<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						<div class="search_item">
							<div>D'où partez-vous ?</div>
							<input type="text" class="destination search_input" required="required">
						</div>
						<div class="search_item">
							<div>check in</div>
							<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>check out</div>
							<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>adults</div>
							<select name="adults" id="adults_3" class="dropdown_item_select search_input">
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<div class="search_item">
							<div>Enfants</div>
							<select name="children" id="children_3" class="dropdown_item_select search_input">
								<option>0</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<button class="button search_button">recherche<span></span><span></span><span></span></button>
					</form>
				</div>

				<!-- Search Panel -->

				<div class="search_panel">
					<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						<div class="search_item">
							<div>D'où partez-vous ?</div>
							<input type="text" class="destination search_input" required="required">
						</div>
						<div class="search_item">
							<div>check in</div>
							<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>check out</div>
							<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>adults</div>
							<select name="adults" id="adults_4" class="dropdown_item_select search_input">
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<div class="search_item">
							<div>Enfants</div>
							<select name="children" id="children_4" class="dropdown_item_select search_input">
								<option>0</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<button class="button search_button">recherche<span></span><span></span><span></span></button>
					</form>
				</div>

				<!-- Search Panel -->

				<div class="search_panel">
					<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						<div class="search_item">
							<div>D'où partez-vous ?</div>
							<input type="text" class="destination search_input" required="required">
						</div>
						<div class="search_item">
							<div>check in</div>
							<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>check out</div>
							<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>adults</div>
							<select name="adults" id="adults_5" class="dropdown_item_select search_input">
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<div class="search_item">
							<div>Enfants</div>
							<select name="children" id="children_5" class="dropdown_item_select search_input">
								<option>0</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<button class="button search_button">recherche<span></span><span></span><span></span></button>
					</form>
				</div>

				<!-- Search Panel -->

				<div class="search_panel">
					<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
						<div class="search_item">
							<div>D'où partez-vous ?</div>
							<input type="text" class="destination search_input" required="required">
						</div>
						<div class="search_item">
							<div>check in</div>
							<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>check out</div>
							<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>adults</div>
							<select name="adults" id="adults_6" class="dropdown_item_select search_input">
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<div class="search_item">
							<div>Enfants</div>
							<select name="children" id="children_6" class="dropdown_item_select search_input">
								<option>0</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
						<button class="button search_button">recherche<span></span><span></span><span></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>		
</div>

<!-- Intro -->

<div class="intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="intro_title text-center">Nous avons les meilleurs circuits</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="intro_text text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
				</div>
			</div>
		</div>
		<div class="row intro_items">

			<!-- Intro Item -->

			<div class="col-lg-4 intro_col">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@dnevozhai -->
					<div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">Voir plus<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Mauritius</h1>
							<div class="intro_price">À partir de $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Intro Item -->

			<div class="col-lg-4 intro_col">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@hellolightbulb -->
					<div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">Voir plus<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Greece</h1>
							<div class="intro_price">À partir de $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Intro Item -->

			<div class="col-lg-4 intro_col">
				<div class="intro_item">
					<div class="intro_item_overlay"></div>
					<!-- Image by https://unsplash.com/@willianjusten -->
					<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
					<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">May 25th - June 01st</div>
						<div class="button intro_button"><div class="button_bcg"></div><a href="#">Voir plus<span></span><span></span><span></span></a></div>
						<div class="intro_center text-center">
							<h1>Scotland</h1>
							<div class="intro_price">À partir de $1450</div>
							<div class="rating rating_4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- CTA -->



<!-- offres -->



<!-- Testimonials -->

<div class="testimonials">
	<div class="test_border"></div>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">Ce que nos clients disent de nous</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				
				<!-- Testimonials Slider -->

				<div class="test_slider_container">
					<div class="owl-carousel owl-theme test_slider">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
								<div class="test_icon"><img src="images/backpack.png" alt=""></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">Jilali</div>
											<div class="test_date">May 24, 2017</div>
										</div>
										<div class="test_quote_title">" Best holliday ever "</div>
										<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
								<div class="test_icon"><img src="images/island_t.png" alt=""></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">Tomas Shelby</div>
											<div class="test_date">May 24, 2017</div>
										</div>
										<div class="test_quote_title">" Best holliday ever "</div>
										<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
								<div class="test_icon"><img src="images/kayak.png" alt=""></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">Brahim</div>
											<div class="test_date">May 24, 2017</div>
										</div>
										<div class="test_quote_title">" Best holliday ever "</div>
										<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="images/test_2.jpg" alt=""></div>
								<div class="test_icon"><img src="images/island_t.png" alt=""></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">Jilali</div>
											<div class="test_date">May 24, 2017</div>
										</div>
										<div class="test_quote_title">" Best holliday ever "</div>
										<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="images/test_1.jpg" alt=""></div>
								<div class="test_icon"><img src="images/backpack.png" alt=""></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">Tomas Shelby</div>
											<div class="test_date">May 24, 2017</div>
										</div>
										<div class="test_quote_title">" Best holliday ever "</div>
										<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="images/test_3.jpg" alt=""></div>
								<div class="test_icon"><img src="images/kayak.png" alt=""></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">Brahim</div>
											<div class="test_date">May 24, 2017</div>
										</div>
										<div class="test_quote_title">" Best holliday ever "</div>
										<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Testimonials Slider Nav - Prev -->
					<div class="test_slider_nav test_slider_prev">
						<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='test_grad_prev'>
									<stop offset='0%' stop-color='#fa9e1b'/>
									<stop offset='100%' stop-color='#8d4fff'/>
								</linearGradient>
							</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
							11.042,18.219 "/>
						</svg>
					</div>
					
					<!-- Testimonials Slider Nav - Next -->
					<div class="test_slider_nav test_slider_next">
						<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='test_grad_next'>
									<stop offset='0%' stop-color='#fa9e1b'/>
									<stop offset='100%' stop-color='#8d4fff'/>
								</linearGradient>
							</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
						M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
						C22.545,2,26,5.541,26,9.909V23.091z"/>
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
						17.046,15.554 "/>
						</svg>
					</div>

				</div>
				
			</div>
		</div>

	</div>
</div>
<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">entrer en contact</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Nom" required="required" data-error="Le nom est obligatoire.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email est obligatoire.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Sujette" required="required" data-error="Sujette est obligatoire.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Veuillez nous écrire un message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">envoyer un message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

