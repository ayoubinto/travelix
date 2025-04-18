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
					<!-- Image by https://unsplash.com/@anikindimitry -->
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
							<select name="adults" id="adults_1" class="dropdown_item_select search_input">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Où allez vous ?</div>
						<select name="adults" id="adults_2" class="dropdown_item_select search_input">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Départ</div>
							<input type="date" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>Retour</div>
							<input type="date" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>adultes</div>
							<select name="children" id="children_1" class="dropdown_item_select search_input">
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
							<select name="children" id="children_1" class="dropdown_item_select search_input">
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
							<select name="adults" id="adults_1" class="dropdown_item_select search_input">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Où allez vous ?</div>
						<select name="adults" id="adults_2" class="dropdown_item_select search_input">
							@foreach($airports as $ville)
								<option value="{{ $ville->id }}">{{ $ville->city }}</option>
							@endforeach
							</select>
						</div>
						<div class="search_item">
							<div>Départ</div>
							<input type="date" class="check_out search_input" placeholder="YYYY-MM-DD">
						</div>
						<div class="search_item">
							<div>adultes</div>
							<select name="children" id="children_1" class="dropdown_item_select search_input">
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
							<select name="children" id="children_1" class="dropdown_item_select search_input">
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

<div class="cta">
	<!-- Image by https://unsplash.com/@thanni -->
	<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
	
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- CTA Slider -->

				<div class="cta_slider_container">
					<div class="owl-carousel owl-theme cta_slider">

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center">
							<div class="cta_title">maldives deluxe package</div>
							<div class="rating_r rating_r_4">
								<i></i>
								<i></i>
								<i></i>
								<i></i>
								<i></i>
							</div>
							<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#">réservez maintenant<span></span><span></span><span></span></a></div>
						</div>

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center">
							<div class="cta_title">maldives deluxe package</div>
							<div class="rating_r rating_r_4">
								<i></i>
								<i></i>
								<i></i>
								<i></i>
								<i></i>
							</div>
							<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#">réservez maintenant<span></span><span></span><span></span></a></div>
						</div>

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center">
							<div class="cta_title">maldives deluxe package</div>
							<div class="rating_r rating_r_4">
								<i></i>
								<i></i>
								<i></i>
								<i></i>
								<i></i>
							</div>
							<p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#">réservez maintenant<span></span><span></span><span></span></a></div>
						</div>
						
					</div>

					<!-- CTA Slider Nav - Prev -->
					<div class="cta_slider_nav cta_slider_prev">
						<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='cta_grad_prev'>
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
					
					<!-- CTA Slider Nav - Next -->
					<div class="cta_slider_nav cta_slider_next">
						<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='cta_grad_next'>
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

<!-- offres -->

<div class="offres">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">the best offres with rooms</h2>
			</div>
		</div>
		<div class="row offres_items">

			<!-- offres Item -->
			<div class="col-lg-6 offres_col">
				<div class="offres_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offres_image_container">
								<!-- Image by https://unsplash.com/@kensuarez -->
								<div class="offres_image_background" style="background-image:url(images/offer_1.jpg)"></div>
								<div class="offer_name"><a href="#">grand castle</a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offres_content">
								<div class="offres_price">$70<span>per night</span></div>
								<div class="rating_r rating_r_4 offres_rating">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="offres_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								<div class="offres_icons">
									<ul class="offres_icons_list">
										<li class="offres_icons_item"><img src="images/post.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/compass.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/bicycle.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/sailboat.png" alt=""></li>
									</ul>
								</div>
								<div class="offres_link"><a href="offres.html">read more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- offres Item -->
			<div class="col-lg-6 offres_col">
				<div class="offres_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offres_image_container">
								<!-- Image by Egzon Bytyqi -->
								<div class="offres_image_background" style="background-image:url(images/offer_2.jpg)"></div>
								<div class="offer_name"><a href="#">turkey hills</a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offres_content">
								<div class="offres_price">$50<span>per night</span></div>
								<div class="rating_r rating_r_4 offres_rating">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="offres_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								<div class="offres_icons">
									<ul class="offres_icons_list">
										<li class="offres_icons_item"><img src="images/post.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/compass.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/bicycle.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/sailboat.png" alt=""></li>
									</ul>
								</div>
								<div class="offres_link"><a href="offres.html">read more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- offres Item -->
			<div class="col-lg-6 offres_col">
				<div class="offres_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offres_image_container">
								<!-- Image by https://unsplash.com/@nevenkrcmarek -->
								<div class="offres_image_background" style="background-image:url(images/offer_3.jpg)"></div>
								<div class="offer_name"><a href="#">island dream</a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offres_content">
								<div class="offres_price">$90<span>per night</span></div>
								<div class="rating_r rating_r_4 offres_rating">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="offres_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								<div class="offres_icons">
									<ul class="offres_icons_list">
										<li class="offres_icons_item"><img src="images/post.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/compass.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/bicycle.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/sailboat.png" alt=""></li>
									</ul>
								</div>
								<div class="offres_link"><a href="offres.html">read more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- offres Item -->
			<div class="col-lg-6 offres_col">
				<div class="offres_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offres_image_container">
								<!-- Image by https://unsplash.com/@mantashesthaven -->
								<div class="offres_image_background" style="background-image:url(images/offer_4.jpg)"></div>
								<div class="offer_name"><a href="#">travel light</a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offres_content">
								<div class="offres_price">$30<span>per night</span></div>
								<div class="rating_r rating_r_4 offres_rating">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="offres_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								<div class="offres_icons">
									<ul class="offres_icons_list">
										<li class="offres_icons_item"><img src="images/post.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/compass.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/bicycle.png" alt=""></li>
										<li class="offres_icons_item"><img src="images/sailboat.png" alt=""></li>
									</ul>
								</div>
								<div class="offres_link"><a href="offres.html">read more</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

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

<div class="trending">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">trending now</h2>
			</div>
		</div>
		<div class="row trending_container">

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">grand hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">mars hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">queen hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">mars hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">grand hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">mars hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">queen hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
					</div>
				</div>
			</div>

			<!-- Trending Item -->
			<div class="col-lg-3 col-sm-6">
				<div class="trending_item clearfix">
					<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
					<div class="trending_content">
						<div class="trending_title"><a href="#">mars hotel</a></div>
						<div class="trending_price">À partir de $182</div>
						<div class="trending_location">madrid, spain</div>
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
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

