<?php
include("header.php");
?>

<!-- content -->
<div class="content">
	<!-- curtain -->
	<div class="curtain"></div>
	<!-- top background -->
	<div class="top-bg">
		<!-- overlay -->
		<div class="top-bg-overlay"></div>
		<!-- overlay end -->
	</div>
	<!-- top background end -->
	<!-- main menu -->
	<div class="main-menu-box">
		<ul class="nav nav-tabs mt-3 main-menu" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
					<i class="fas fa-home"></i>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">
					<i class="fas fa-briefcase"></i>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">
					<i class="fas fa-tools"></i>
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<!-- language change -->
				<div class="nav-link language-change">
					<!-- language item -->
					<button class="language-switcher en">EN</button>
				</div>
				<!-- language change end -->
			</li>
		</ul>
	</div>
	<!-- main menu end -->
	<!-- swup container -->
	<div class="transition-fade" id="swup">
		<!-- scroll frame -->
		<div id="scrollbar" class="scroll-frame">
			<!-- container -->
			<div class="container-fluid">
				<div class="tab-content content-container" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-12">
									<!-- banner -->
									<div class="banner banner-header">
										<!-- banner back -->
										<div class="banner-back"></div>
										<!-- banner overlay -->
										<div class="banner-overlay">
											<!-- main title -->
											<div class="banner-title-frame">
												<!-- title -->
												<h1 class="banner-title" data-lang="header_banner_title">Greetings in my <br> Development World!</h1>
												<!-- suptitle -->
												<div class="cv-code">
													<code>code</code>
													<span data-lang="header_banner_desc">I working with</span>
													<span id="cv-code-text"></span>
													<code>code</code>
												</div>
												<div class="cv-btns">
													<!-- button -->
													<button type="button" class="btn" id="btn-portfolio">
														<span data-lang="header_banner_btn">Portfolio</span>
													</button>
													<!-- button -->
													<!-- button -->
													<a href="mailto:angelikaspecter@gmail.com?subject=Hire me" target="_blank" class="btn-link">
														<span data-lang="hire_btn">Write me</span> <i class="bi bi-chevron-right"></i>
													</a>
													<!-- button -->
												</div>
											</div>
											<!-- main title end -->
										</div>
										<!-- banner overlay end -->
									</div>
									<!-- banner end -->
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row row-cols-2 row-cols-xl-4 g-3">
								<!-- col -->
								<div class="col">
									<!-- couner frame -->
									<div class="counter-frame">
										<!-- counter -->
										<div class="counter-box">
											<!-- counter number -->
											<span class="counter" id="year"></span>.<span class="counter" id="month"></span>
										</div>
										<!-- counter end -->
										<!-- title -->
										<p class="desc" data-lang="counter_exp">Years Experience</p>
									</div>
									<!-- couner frame end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- couner frame -->
									<div class="counter-frame">
										<!-- counter -->
										<div class="counter-box">
											<!-- counter number -->
											<span class="counter">114</span>
										</div>
										<!-- counter end -->
										<!-- title -->
										<p class="desc" data-lang="counter_projects">Completed Projects</p>
									</div>
									<!-- couner frame end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- couner frame -->
									<div class="counter-frame">
										<!-- counter -->
										<div class="counter-box">
											<!-- counter number -->
											<span class="counter">9</span>
										</div>
										<!-- counter end -->
										<!-- title -->
										<p class="desc" data-lang="counter_customers">Happy Customers</p>
									</div>
									<!-- couner frame end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- couner frame -->
									<div class="counter-frame">
										<!-- counter -->
										<div class="counter-box">
											<!-- counter number -->
											<span class="counter">0</span>
										</div>
										<!-- counter end -->
										<!-- title -->
										<p class="desc" data-lang="counter_honors">Awards</p>
									</div>
									<!-- couner frame end -->
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- section title -->
							<h2 class="section-title" data-lang="bio_title">Hello! My name is Angelika Specter</h2>
							<!-- section title end -->
							<!-- section description -->
							<div class="about-box mb-4">
								<div class="nav nav-pills" id="about" role="tablist" aria-orientation="vertical">
									<button class="nav-link active" id="bio-tab" data-bs-toggle="pill" data-bs-target="#bio" type="button" role="tab" aria-controls="bio" aria-selected="true" data-lang="bio_about">About</button>
									<button class="nav-link" id="hobbie-tab" data-bs-toggle="pill" data-bs-target="#hobbie" type="button" role="tab" aria-controls="hobbie" aria-selected="false" data-lang="bio_hobbie">Hobbie</button>
								</div>
								<div class="tab-content" id="aboutContent">
									<div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="bio-tab">
										<p class="section-desc" data-lang="bio_about_desc">I'm Front End Developer based in Kiev, Ukraine, and I'm very
											passionate
											and dedicated to my work. I just starting my
											proffesional way of Front End Developing, and I upgrade a skills necessary to build
											great
											websites and interfaces, as well as 5 years
											of experience in website design, corporate identity and magazine development.</p>
									</div>
									<div class="tab-pane fade" id="hobbie" role="tabpanel" aria-labelledby="hobbie-tab">
										<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3">
											<div class="col hobbie-item">
												<i class="fas fa-motorcycle"></i>
												<p class="section-desc" data-lang="bio_hobbie_moto">
													Motorcycles
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-camera"></i>
												<p class="section-desc" data-lang="bio_hobbie_photo">
													Photography
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-route"></i>
												<p class="section-desc" data-lang="bio_hobbie_travel">
													Travel
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="bi bi-flower1"></i>
												<p class="section-desc" data-lang="bio_hobbie_flora">
													Floriculture
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-menorah"></i>
												<p class="section-desc" data-lang="bio_hobbie_handmade">
													DIY Decore. Macrame. Candle
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-code"></i>
												<p class="section-desc" data-lang="bio_hobbie_code">
													Coding
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-spa"></i>
												<p class="section-desc" data-lang="bio_hobbie_yoga">
													Yoga & Meditation
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-snowboarding"></i>
												<p class="section-desc" data-lang="bio_hobbie_lifestyle">
													Active lifestyle
												</p>
											</div>
											<div class="col hobbie-item">
												<i class="fas fa-music"></i>
												<p class="section-desc">
													Dance, Electro, Remix, Latino
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- section description end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- section title -->
							<h2 class="section-title" data-lang="service_title">My Services</h2>
							<!-- section title end -->
							<!-- row -->
							<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-4">
								<!-- col -->
								<div class="col">
									<!-- service -->
									<div class="service-content">
										<!-- title -->
										<h3 class="service-title">PSD/AI/PDF <i class="bi bi-arrow-right-short"></i>
											Html/Css/Js</h3>
										<!-- text -->
										<p class="service-desc">Clean Code / Bootstrap / Pixel Perfect</p>
										<!-- button -->
										<a href="mailto:angelikaspecter@protonmail.com?subject=PSD/AI/PDF > HTML/CSS/JS" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
									</div>
									<!-- service end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- service -->
									<div class="service-content">
										<!-- title -->
										<h3 class="service-title">Figma/Sketch/XD <i class="bi bi-arrow-right-short"></i>
											Html/Css/Js</h3>
										<!-- text -->
										<p class="service-desc">Clean Code / Bootstrap / Pixel Perfect</p>
										<!-- button -->
										<a href="mailto:angelikaspecter@protonmail.com?subject=Figma/Sketch/XD > HTML/CSS/JS" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
									</div>
									<!-- service end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- service -->
									<div class="service-content">
										<!-- title -->
										<h3 class="service-title">Html/Css/Js <i class="bi bi-arrow-right-short"></i>
											CMS</h3>
										<!-- text -->
										<p class="service-desc">WordPress / Elementor</p>
										<!-- button -->
										<a href="mailto:angelikaspecter@protonmail.com?subject=HTML/CSS/JS > CMS" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
									</div>
									<!-- service end -->
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<div class="container-fluid px-0">
							<div class="visually-hidden" id="portfolio"></div>
							<!-- section title -->
							<h2 class="section-title" data-lang="portfolio_title">My works</h2>
							<!-- section title end -->
							<!-- row -->
							<div class="row row-cols-1 mt-5">
								<!-- col -->
								<div class="col filter-box">
									<!-- filter -->
									<div class="filter filter-left" id="filter">
										<!-- filter link -->
										<button class="btn-link active" onclick="filterSelection('all')" data-lang="portfolio_filter_all">All Categories</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('blog')" data-lang="portfolio_filter_blog">Blog</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('cataloge')" data-lang="portfolio_filter_cataloge">Cataloge</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('corporate')" data-lang="portfolio_filter_corporate">Corporate</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('event')" data-lang="portfolio_filter_event">Event</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('info')" data-lang="portfolio_filter_info">Info</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('landing-page')" data-lang="portfolio_filter_lp">Landing Page</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('service')" data-lang="portfolio_filter_service">Service</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('site')" data-lang="portfolio_filter_site">Site</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('store')" data-lang="portfolio_filter_store">Store</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('admin-panel')" data-lang="portfolio_filter_panel">Admin Panel</button>
									</div>
									<!-- filter end -->
									<!-- filter -->
									<div class="filter filter-right" id="filter">
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('html-css')">HTML/CSS</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('bootstrap')">Bootstrap</button>
										<!-- filter link -->
										<button class="btn-link" onclick="filterSelection('word-press')">WordPress</button>
									</div>
									<!-- filter end -->
								</div>
								<!-- col end -->
								<div class="col portfolio-box mt-3">
									<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 portfolio-gallery">
										<div class="col filter html-css landing-page">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/Instabot" target="_blank">
														<img class="p-5" src="img/logo/instabot.svg" width="95" height="15" alt="Instabot">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap landing-page">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/JuliaVorman/" target="_blank">
														<img class="p-5" src="img/logo/JuliaVorman.svg" width="95" height="15" alt="Julia Vorman">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap admin-panel">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/Academ-Journal/" target="_blank">
														<i class="bi bi-mortarboard me-2"></i> Academ Journal
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap info">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/BinanceAcademy/" target="_blank">
														<img class="p-5" src="img/logo/Binance.webp" width="95" height="15" alt="Binance">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap info">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/Binance/" target="_blank">
														<img class="p-5" src="img/logo/Binance.webp" width="95" height="15" alt="Binance">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap landing-page">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/GosInvest/" target="_blank">
														<img class="p-5" src="img/logo/logo-invest.svg" width="95" height="15" alt="GosInvest">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap landing-page">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/Tinkoff/" target="_blank">
														<img class="p-5" src="img/logo/Tinkoff.svg" width="95" height="15" alt="Tinkoff">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap admin-panel">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/AffDash/" target="_blank">
														<i class="bi bi-bar-chart-steps me-2"></i> Dashbord
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap landing-page">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/Novateck/" target="_blank">
														<img class="p-5" src="img/logo/novateck.svg" width="95" height="15" alt="Novateck">
													</a>
												</div>
											</div>
										</div>
										<div class="col filter bootstrap info">
											<div class="portfolio-gallery-item">
												<div class="card">
													<a href="https://angelikaspecter.github.io/Alfa-Investment/" target="_blank">
														<img class="p-5" src="img/logo/alfa.png" width="95" height="15" alt="Alfa Investment">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- row end -->
						</div>
						<!-- container -->
						<div class="container-fluid px-0 mt-3">
							<!-- section title -->
							<h2 class="section-title" data-lang="price_title">Price Plans</h2>
							<!-- section title end -->
							<!-- row -->
							<div class="row row-cols-1 row-cols-xl-3 g-3">
								<!-- col -->
								<div class="col">
									<!-- price -->
									<div class="price-card">
										<div class="price-card-header">
											<h3 class="price-header" data-lang="price_plan_classic">Classic</h3>
											<p class="price-desc">HTML / CSS / JS / BS</p>
										</div>
										<div class="price-list">
											<ul class="nav nav-pills" id="Classic" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active" id="classic-basic-tab" data-bs-toggle="pill" data-bs-target="#classic-basic" type="button" role="tab" aria-controls="classic-basic" aria-selected="true" data-lang="price_basic">Basic</button>
												</li>
												<li class="nav-item mx-2" role="presentation">
													<button class="nav-link" id="classic-standart-tab" data-bs-toggle="pill" data-bs-target="#classic-standart" type="button" role="tab" aria-controls="classic-standart" aria-selected="false" data-lang="price_standart">Standart</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link" id="classic-premium-tab" data-bs-toggle="pill" data-bs-target="#classic-premium" type="button" role="tab" aria-controls="classic-premium" aria-selected="false" data-lang="price_premium">Premium</button>
												</li>
											</ul>
											<div class="tab-content" id="ClassicContent">
												<div class="tab-pane fade show active" id="classic-basic" role="tabpanel" aria-labelledby="classic-basic-tab">
													<p class="price-number">53.79
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															3 <span data-lang="price_day_delivery">Day(s) Delivery</span>
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															1 <span data-lang="price_revision">Revision</span>
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															1 <span data-lang="price_page">Page(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_responsive_design">Responsive Design</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_interactive_elements">Interactive Elements</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_integration_services">Integration Services</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_ecommerce_functionality">E-commerce Functionality</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															9 <span data-lang="price_products">Product(s)</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=Classic > Basic" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
												<div class="tab-pane fade" id="classic-standart" role="tabpanel" aria-labelledby="classic-standart-tab">
													<p class="price-number">85.16
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															5 <span data-lang="price_day_delivery">Day(s) Delivery</span>
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															1 <span data-lang="price_revision">Revision</span>
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															2 <span data-lang="price_page">Page(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_responsive_design">Responsive Design</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_interactive_elements">Interactive Elements</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_integration_services">Integration Services</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_ecommerce_functionality">E-commerce Functionality</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															9 <span data-lang="price_products"> Product(s)</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=Classic > Standart" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
												<div class="tab-pane fade" id="classic-premium" role="tabpanel" aria-labelledby="classic-premium-tab">
													<p class="price-number">125.50
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															5 <span data-lang="price_day_delivery">Day(s) Delivery</span>
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															2 <span data-lang="price_revision">Revision</span>
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															3 <span data-lang="price_page">Page(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_responsive_design">Responsive Design</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_interactive_elements">Interactive Elements</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_integration_services">Integration Services</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_ecommerce_functionality">E-commerce Functionality</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															9 <span data-lang="price_products">Product(s)</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=Classic > Premium" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- price end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- price -->
									<div class="price-card">
										<div class="price-card-header">
											<h3 class="price-header">CMS</h3>
											<p class="price-desc">WordPress / Elementor</p>
										</div>
										<div class="price-list">
											<ul class="nav nav-pills" id="CMS" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active" id="cms-basic-tab" data-bs-toggle="pill" data-bs-target="#cms-basic" type="button" role="tab" aria-controls="cms-basic" aria-selected="true" data-lang="price_basic">Basic</button>
												</li>
												<li class="nav-item mx-2" role="presentation">
													<button class="nav-link" id="cms-standart-tab" data-bs-toggle="pill" data-bs-target="#cms-standart" type="button" role="tab" aria-controls="cms-standart" aria-selected="false" data-lang="price_standart">Standart</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link" id="cms-premium-tab" data-bs-toggle="pill" data-bs-target="#cms-premium" type="button" role="tab" aria-controls="cms-premium" aria-selected="false" data-lang="price_premium">Premium</button>
												</li>
											</ul>
											<div class="tab-content" id="CMSContent">
												<div class="tab-pane fade show active" id="cms-basic" role="tabpanel" aria-labelledby="cms-basic-tab">
													<p class="price-number">44.82
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															3 <span data-lang="price_day_delivery">Day(s) Delivery</span>
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															2 <span data-lang="price_revision">Revision</span>
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															1 <span data-lang="price_page">Page(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_responsive_design">Responsive Design</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_interactive_elements">Interactive Elements</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															3 <span data-lang="price_plugins">Plugin(s) / Extension(s)</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_ecommerce_functionality">E-commerce Functionality</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															15 <span data-lang="price_products">Product(s)</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=CMS > Basic" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
												<div class="tab-pane fade" id="cms-standart" role="tabpanel" aria-labelledby="cms-standart-tab">
													<p class="price-number">143.43
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															4 <span data-lang="price_day_delivery">Day(s) Delivery</span>
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															5 <span data-lang="price_revision">Revision</span>
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															2 <span data-lang="price_page">Page(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_responsive_design">Responsive Design</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_interactive_elements">Interactive Elements</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															3 <span data-lang="price_plugins">Plugin(s) / Extension(s)</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span data-lang="price_ecommerce_functionality">E-commerce Functionality</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															15 <span data-lang="price_products">Product(s)</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=CMS > Standart" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
												<div class="tab-pane fade" id="cms-premium" role="tabpanel" aria-labelledby="cms-premium-tab">
													<p class="price-number">268.93
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															7 <span data-lang="price_day_delivery">Day(s) Delivery</span>
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															<i class="bi bi-infinity"></i> <span data-lang="price_revision">Revision</span>
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															5 <span data-lang="price_page">Page(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_responsive_design">Responsive Design</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_interactive_elements">Interactive Elements</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															6 <span data-lang="price_plugins">Plugin(s) / Extension(s)</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_ecommerce_functionality">E-commerce Functionality</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															15 <span data-lang="price_products">Product(s)</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=CMS > Premium" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- price end -->
								</div>
								<!-- col end -->
								<!-- col -->
								<div class="col">
									<!-- price -->
									<div class="price-card">
										<div class="price-card-header">
											<h3 class="price-header" data-lang="price_plan_else">Else</h3>
											<p class="price-desc">
												<span data-lang="price_plan_hourly">Hourly Payment</span> / <span data-lang="price_plan_fulltime">Full Time</span>
											</p>
										</div>
										<div class="price-list">
											<ul class="nav nav-pills" id="else" role="tablist">
												<li class="nav-item me-2" role="presentation">
													<button class="nav-link active" id="hourly-basic-tab" data-bs-toggle="pill" data-bs-target="#hourly-basic" type="button" role="tab" aria-controls="hourly-basic" aria-selected="true" data-lang="price_plan_hourly">Hourly Payment</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link" id="full-standart-tab" data-bs-toggle="pill" data-bs-target="#full-standart" type="button" role="tab" aria-controls="full-standart" aria-selected="false" data-lang="price_plan_fulltime">Full Time</button>
												</li>
											</ul>
											<div class="tab-content" id="elseContent">
												<div class="tab-pane fade show active" id="hourly-basic" role="tabpanel" aria-labelledby="hourly-basic-tab">
													<p class="price-number">10
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>/<span data-lang="per_hour">hour</span>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															-
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															-
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>HTML/CSS/JS/BS</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>JS/ES6+/jQuery/JSON/AJAX</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span>Node.js/React/Angular</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>PHP/MySQL/Laravel/Yii</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>WordPress/Elementor</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_integration_services">Integration Services</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=Hourly Payment" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
												<div class="tab-pane fade" id="full-standart" role="tabpanel" aria-labelledby="full-standart-tab">
													<p class="price-number">1500
														<span class="price-span">
															<i class="bi bi-currency-dollar"></i>/<span data-lang="per_month">month</span>
														</span>
													</p>
													<div class="deadline-panel">
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-clock"></i>
															</span>
															-
														</p>
														<p class="deadline-title">
															<span class="deadline-span">
																<i class="bi bi-arrow-repeat"></i>
															</span>
															-
														</p>
													</div>
													<ul class="list-unstyled tool-list">
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>HTML/CSS/JS/BS</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>JS/ES6+/jQuery/JSON/AJAX</span>
														</li>
														<li class="tool-list-item list-item-disabled">
															<i class="bi bi-x"></i>
															<span>Node.js/React/Angular</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>PHP/MySQL/Laravel/Yii</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span>WordPress/Elementor</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_browser_compatibility">Browser Compatibility</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_w3c_validate">W3C Validated Code</span>
														</li>
														<li class="tool-list-item">
															<i class="bi bi-check"></i>
															<span data-lang="price_integration_services">Integration Services</span>
														</li>
													</ul>
													<!-- button -->
													<a href="mailto:angelikaspecter@protonmail.com?subject=Full Time" target="_blank" class="btn-link visually-hidden"><span data-lang="order_btn">Order now</span> <i class="bi bi-chevron-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- price end -->
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row skills-banner mt-4">
								<div class="col-12">
									<!-- banner -->
									<div class="banner banner-footer">
										<!-- banner overlay -->
										<div class="banner-overlay">
											<!-- main title -->
											<div class="banner-title-frame">
												<!-- title -->
												<h2 class="banner-title mb-3" data-lang="footer_banner_title">Ready to order your project?</h2>
												<!-- suptitle -->
												<div class="cv-code" data-lang="footer_banner_desc">
													Let's work together!
												</div>
												<!-- button -->
												<a href="mailto:angelikaspecter@gmail.com?subject=Let's work together!" target="_blank" class="btn" data-lang="footer_banner_btn">
													<span>Contact me</span>
												</a>
											</div>
											<!-- main title end -->
										</div>
										<!-- banner overlay end -->
									</div>
									<!-- banner end -->
								</div>
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-6 col-lg-3 py-3">
									<!-- brand -->
									<img class="brand" src="img/brands/dumtek.webp" alt="brand">
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
					</div>
					<div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row row-cols-1 row-cols-lg-2 g-3 mt-3">
								<!-- col -->
								<div class="col">
									<!-- section title -->
									<h3 class="section-title" data-lang="education_title">Education</h3>
									<!-- section title end -->
									<!-- timeline -->
									<div class="timeline gallery">
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="january">jan</span> 2022
												<hr>
												<span data-lang="january">jan</span> 2023
											</div>
											<div class="timeline-content">
												<div class="card-header">
													<h3 class="card-title" data-lang="education_title_one">IT Step</h3>
													<p class="service-desc">Front-End Developer</p>
												</div>
												<p class="section-desc" data-lang="education_one_desc">HTML5. CSS3. Materialize. LESS. JS. OOP. DOM. BOM. Cookie. Canvas. JSON. Ajax. EC6+. MVC. jQuery. Animation. NodeJS. Webpack. Angular. React.</p>
												<a data-fancybox="diplome" data-no-swup href="#" class="link d-none"><span data-lang="education_diplome">Diplome</span> <i class="bi bi-caret-right-fill"></i></a>
												<a data-fancybox="diplome" data-no-swup href="#" class="link d-none"><span data-lang="education_certificate">Certificate</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												2016
												<hr>
												2022
											</div>
											<div class="timeline-content">
												<div class="card-header">
													<h3 class="card-title">HTML academy</h3>
													<p class="service-desc" data-lang="education_subtitle_two">Interactive Basic</p>
												</div>
												<p class="section-desc" data-lang="education_two_desc">HTML5. CSS3. Flex. Grid. Effects. SVG. JS. BOM. DOM. PHP.</p>
												<a data-fancybox="diplome" data-no-swup href="#" class="link d-none"><span data-lang="education_diplome">Diplome</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="december">dec</span> 2014
												<hr>
												<span data-lang="april">apr</span> 2016
											</div>
											<div class="a timeline-content">
												<div class="card-header">
													<h3 class="card-title" data-lang="education_title_one">IT Step</h3>
													<p class="service-desc" data-lang="education_subtitle_three">Computer Graphics and Design</p>
												</div>
												<p class="section-desc" data-lang="education_three_desc">Adobe Photoshop. Adobe Illustrator. Adobe InDesign. Digital Photography. Design theory. Corporate identity and branding. Advertising design. Typography. Prepress. HTML5. CSS3. Autodesk 3ds Max. Autodesk Maya.</p>
												<a data-fancybox="diplome" data-no-swup href="#" class="link d-none"><span data-lang="education_diplome">Diplome</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="june">jun</span> 2007
												<hr>
												<span data-lang="may">may</span> 2012
											</div>
											<div class="a timeline-content">
												<div class="card-header">
													<h3 class="card-title" data-lang="education_title_four">Academy of Advocacy of Ukraine</h3>
													<p class="service-desc" data-lang="education_subtitle_four">Student</p>
												</div>
												<p class="section-desc" data-lang="education_four_desc">Correspondence department of the Faculty of Law</p>
												<a data-fancybox="diplome" data-no-swup href="#" class="link d-none"><span data-lang="education_diplome">Diplome</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
									</div>
									<!-- timeline end -->
								</div>
								<div class="col">
									<!-- section title -->
									<h3 class="section-title" data-lang="experience_title">Experience</h3>
									<!-- section title end -->
									<!-- timeline -->
									<div class="timeline">
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="may">may</span> 2021
												<hr>
												<span data-lang="present">present</span>
											</div>
											<div class="timeline-content">
												<div class="card-header">
													<h3 class="card-title">Dream Team</h3>
													<p class="el-suptitle card-desc">Front-end Web Integrator</p>
												</div>
												<p class="section-desc" data-lang="experience_one_desc">Buying and keeping records of domains. Connecting and configuring domains to hosting. Connection of additional services and provision of minimal domain protection. Development / editing / creation and maintenance of pages or sites. Integration of various services or development of separate functionality (sending messages to mail / phone, determining the country by IP address, etc.). Web content managment.</p>
												<a data-fancybox="recommendation" data-no-swup href="#" class="link d-none"><span data-lang="experience_recommendation">Recommendation</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="march">mar</span> 2017
												<hr>
												<span data-lang="april">apr</span> 2021
											</div>
											<div class="timeline-content">
												<div class="card-header">
													<h3 class="card-title" data-lang="experience_title_two">Self-Employed</h3>
													<p class="el-suptitle card-desc" data-lang="experience_subtitle_two">Web & Graphic Designer</p>
												</div>
												<p class="section-desc" data-lang="experience_two_desc">Design Landing Pages, online stores, corporate sites, interactive prototyping.</p>
												<a data-fancybox="recommendation" data-no-swup href="#" class="link d-none"><span data-lang="experience_recommendation">Recommendation</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="july">jul</span> 2017
												<hr>
												<span data-lang="march">mar</span> 2018
											</div>
											<div class="timeline-content">
												<div class="card-header">
													<h3 class="card-title" data-lang="experience_title_three">KievProekt</h3>
													<p class="el-suptitle card-desc" data-lang="experience_subtitle_two">Web & Graphic Designer</p>
												</div>
												<p class="section-desc" data-lang="experience_three_desc">Branding, Website Design, SMM.</p>
												<a data-fancybox="recommendation" data-no-swup href="#" class="link d-none"><span data-lang="experience_recommendation">Recommendation</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-mark-light"></div>
											<div class="timeline-mark"></div>
											<div class="date">
												<span data-lang="june">jun</span> 2010
												<hr>
												<span data-lang="september">sep</span> 2019
											</div>
											<div class="timeline-content">
												<div class="card-header">
													<h3 class="card-title" data-lang="experience_title_two">Self-Employed</h3>
													<p class="el-suptitle card-desc" data-lang="experience_subtitle_four">Pro Photography</p>
												</div>
												<p class="section-desc" data-lang="experience_four_desc">Photographing of music festivals, city events, sports competitions. Studio photography - boudoir and nude photography.</p>
												<a data-fancybox="recommendation" data-no-swup href="#" class="link d-none"><span data-lang="experience_recommendation">Recommendation</span> <i class="bi bi-caret-right-fill"></i></a>
											</div>
										</div>
									</div>
									<!-- timeline end -->
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-6 col-lg-3 py-3">
									<!-- brand -->
									<img class="brand" src="img/brands/dumtek.webp" alt="brand">
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
					</div>
					<div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- section title -->
							<h3 class="section-title mt-5" data-lang="skills_title">Skills</h3>
							<!-- section title end -->
							<!-- row -->
							<div class="row row-cols-1 row-cols-lg-2 g-3 mb-3">
								<!-- col -->
								<div class="col">
									<!-- sub title -->
									<h4 class="sub-title" data-lang="skills_soft">Soft Skill</h4>
									<!-- sub title end -->
									<!-- soft skills -->
									<div class="soft-skills">
										<!-- skill -->
										<div class="soft-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h5 class="soft-skills-title" data-lang="skills_soft_one">Communication</h5>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="softskill1"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="soft-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h5 class="soft-skills-title" data-lang="skills_soft_two">Teamwork</h5>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="softskill2"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="soft-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h5 class="soft-skills-title" data-lang="skills_soft_three">Self-motivation</h5>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="softskill3"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="soft-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h5 class="soft-skills-title" data-lang="skills_soft_four">Time management & Planning</h5>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="softskill4"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="soft-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h5 class="soft-skills-title" data-lang="skills_soft_five">Work-life Balance</h5>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="softskill5"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
									</div>
									<!-- soft skills end -->
								</div>
								<div class="col">
									<!-- sub title -->
									<h4 class="sub-title" data-lang="skills_hard">Hard Skill</h4>
									<!-- sub title end -->
									<!-- hard skills -->
									<div class="hard-skills">
										<!-- skill -->
										<div class="hard-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h6 class="hard-skills-title">HTML / CSS / BS</h6>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="hardskill1"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="hard-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h6 class="hard-skills-title">JS / ES6+ / jQuery / JSON / AJAX</h6>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="hardskill2"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="hard-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h6 class="hard-skills-title text-disabled">Node.js / React / Angular</h6>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="hardskill3"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="hard-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h6 class="hard-skills-title">PHP / MySQL <span class="text-disabled">/ Laravel / Yii</span></h6>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="hardskill4"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
										<!-- skill -->
										<div class="hard-skills-item">
											<div class="skill-heading">
												<!-- title -->
												<h6 class="hard-skills-title">WordPress / Elementor</h6>
											</div>
											<!-- progressbar frame -->
											<div class="line-progress">
												<!-- progressbar -->
												<div id="hardskill5"></div>
											</div>
											<!-- progressbar frame end -->
										</div>
										<!-- skill end -->
									</div>
									<!-- hard skills end -->
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
							<!-- sub title -->
							<h3 class="sub-title" data-lang="skills_pro">Pro Skill</h3>
							<!-- sub title end -->
							<!-- row -->
							<div class="row row-cols-1 row-cols-lg-2 g-3">
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_one">
										Creating semantic markup by layout
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_two">
										Export parameters and graphics from PSD-layouts
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_three">
										Creation of grids on flex according to the layout
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_four">
										Export parameters and graphics from Figma
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_five">
										Layout of text content of pages
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_six">
										Creation of layout on grid according to the layout
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_seven">
										Layout of navigation interface elements
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_eight">
										Layout of multilayer interface elements
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_nine">
										Layout of card interface elements
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_ten">
										BEM markup
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_eleven">Working with the DOM in JavaScript</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills" data-lang="skills_pro_twelve">
										BEM component layout
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_thirteen">Animation for frontend developers</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_fourteen">Layout of email newsletters</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_fivteen">HTML templating engines</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_sixteen">Regular expressions for frontend developers</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_seventeen">Algorithms and data structures</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_eighteen">PHP. Professional web development</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_nineteen">PHP & Yii. Complex web services architecture</span>
									</h4>
								</div>
								<div class="col">
									<h4 class="pro-skills">
										<span data-lang="skills_pro_twenty">Anatomy of a CSS Cascade</span>
									</h4>
								</div>
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
						<!-- container -->
						<div class="container-fluid px-0">
							<!-- row -->
							<div class="row">
								<!-- col -->
								<div class="col-6 col-lg-3 py-3">
									<!-- brand -->
									<img class="brand" src="img/brands/dumtek.webp" alt="brand">
								</div>
								<!-- col end -->
							</div>
							<!-- row end -->
						</div>
						<!-- container end -->
					</div>
				</div>
			</div>
			<!-- container end -->
			<!-- container -->
			<div class="container-fluid">
				<!-- footer -->
				<footer>
					<!-- copyright -->
					<?php
					include("copyright.php");
					?>
					<!-- copyright end -->
				</footer>
				<!-- footer end -->
			</div>
			<!-- container end -->
		</div>
		<!-- scroll frame end -->
	</div>
	<!-- swup container end -->
</div>
<!-- content end -->

<?php
include("footer.html");
?>