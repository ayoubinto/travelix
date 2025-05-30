<!DOCTYPE html>
<html lang="en">
<head>
	<title>Travelix</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{url('style/bootstrap4/bootstrap.min.css')}}">
	<link href="{{url('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/main_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/about_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/about_responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/contact_styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/contact_responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/Voyage_per.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/reservation.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/Facture.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('style/master_style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="{{url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap')}}" rel="stylesheet">
</head>
@yield('scripts')
<body>

	<div class="super_container">
		
		<!-- Header -->

		<header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">+212 65 52 63 20 25</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item"><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="user_box ml-auto">
                                <div class="user_box_login user_box_link">
									<div class="user_box_login user_box_link" style="position: relative;">
										@if(Auth::guard('passenger')->check())
											<div class="mon_compte" onclick="toggleAccountMenu()" style="cursor: pointer;">
												<a href="#"><i class="fa-regular fa-circle-user"></i> {{session('nom_passeng')}}</a>
											</div>
											<!-- Menu déroulant -->
											<div id="accountMenu" class="acount_div" style="display:none">
												<p class="parag_account" style="margin-top: 12px;">{{session()->get('email_passeng')}}</p>
												<img src="{{ url('images/mann.png') }}" alt="user" class="user_img">
												<p class="parag_account">Bonjour {{session('nom_passeng')}}</p>
												<form action="{{ route('logout.passenger') }}" method="POST">
													@csrf
													<div class="account_buttons">
														<button type="submit" class="btn_user">Gérez votre compte</button>
														<button type="submit" class="btn_user">Se déconnecter</button>
													</div>
												</form>
											</div>
											@elseif(Auth::guard('admin')->check())
											<div class="mon_compte" onclick="toggleAccountMenu()" style="cursor: pointer;">
												<a href="#"><i class="fa-regular fa-circle-user"></i> {{session('nom_passeng')}}</a>
											</div>
											<!-- Menu déroulant -->
											<div id="accountMenu" class="acount_div" style="display:none">
												<p class="parag_account" style="margin-top: 12px;">{{session()->get('email')}}</p>
												<img src="{{ url('images/management.png') }}" alt="user" class="user_img">
												<p class="parag_account">Bonjour au Administrateur {{session('name')}}</p>
												<form action="{{ route('logout.passenger') }}" method="POST">
													@csrf
													<div class="account_buttons">
														<button class="btn_user"><a style="font-size:10px;margin:0px" href="/dashboard">aller au tableau de bord</a></button>
														<button type="submit" class="btn_user">Se déconnecter</button>
													</div>
												</form>
											</div>
										@else
											<a href="{{ route('login') }}">Se connecter <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
										@endif
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="/">Accueil</a></li>
                                    <li class="main_nav_item"><a href="/About">À propos de nous</a></li>
                                    <li class="main_nav_item"><a href="">Voyages organisés</a></li>
                                    <li class="main_nav_item"><a href="/Voyagepers">Voyages personelle</a></li>
                                    <li class="main_nav_item"><a href="/Contact">contact</a></li>
                                </ul>
                            </div>
                            <div class="content_search ml-lg-0 ml-auto">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                                s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                                C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                                M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                                c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                                c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                                C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <form id="search_form" class="search_form bez_1">
                                <input type="search" class="search_content_input bez_1">
                            </form>

                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>	
            </nav>

            </header>




@yield('content')




		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_content footer_about">
								<div class="logo_container footer_logo">
									<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
								</div>
								<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
								<ul class="footer_social_list">
									<li class="footer_social_item"><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
									<li class="footer_social_item"><a href="#"><i class="fa-brands fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_title">blog posts</div>
							<div class="footer_content footer_blog">
								
								<!-- Footer blog item -->
								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
										<div class="footer_blog_date">Nov 29, 2017</div>
									</div>
								</div>
								
								<!-- Footer blog item -->
								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
										<div class="footer_blog_date">Nov 29, 2017</div>
									</div>
								</div>

								<!-- Footer blog item -->
								<div class="footer_blog_item clearfix">
									<div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
									<div class="footer_blog_content">
										<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
										<div class="footer_blog_date">Nov 29, 2017</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_title">tags</div>
							<div class="footer_content footer_tags">
								<ul class="tags_list clearfix">
									<li class="tag_item"><a href="#">design</a></li>
									<li class="tag_item"><a href="#">fashion</a></li>
									<li class="tag_item"><a href="#">music</a></li>
									<li class="tag_item"><a href="#">video</a></li>
									<li class="tag_item"><a href="#">party</a></li>
									<li class="tag_item"><a href="#">photography</a></li>
									<li class="tag_item"><a href="#">adventure</a></li>
									<li class="tag_item"><a href="#">travel</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_column">
						<div class="footer_col">
							<div class="footer_title">contact info</div>
							<div class="footer_content footer_contact">
								<ul class="contact_info_list">
									<li class="contact_info_item d-flex flex-row">
										<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
										<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
										<div class="contact_info_text">2556-808-8613</div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
										<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
									</li>
									<li class="contact_info_item d-flex flex-row">
										<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
										<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</footer>
	</div>
	<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('style/bootstrap4/popper.js')}}"></script>
	<script src="{{url('style/bootstrap4/bootstrap.min.')}}"></script>
	<script src="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
	<script src="{{url('plugins/easing/easing.js')}}"></script>
	<script src="{{url('js/custom.js')}}"></script>
	<script src="{{url('style/bootstrap4/bootstrap.min.js')}}"></script>
	<script src="{{url('plugins/greensock/TweenMax.min.js')}}"></script>
	<script src="{{url('plugins/greensock/TimelineMax.min.js')}}"></script>
	<script src="{{url('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
	<script src="{{url('plugins/greensock/animation.gsap.min.js')}}"></script>
	<script src="{{url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
	<script src="{{url('plugins/parallax-js-master/parallax.min.js')}}"></script>
	<script src="{{url('js/about_custom.js')}}"></script>
	<script src="{{url('js/contact_custom.js')}}"></script>
	<script src="{{url('js/Voyage_rg.js')}}"></script>
	<script src="{{url('js/Master.js')}}"></script>
</body>
</html>