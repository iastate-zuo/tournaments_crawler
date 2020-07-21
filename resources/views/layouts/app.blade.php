<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>WebDev Contact App</title>

	<link href="https://cdn.theme.iastate.edu/nimbus-sans/css/nimbus-sans.css" rel="stylesheet">
	<link href="https://cdn.theme.iastate.edu/merriweather/css/merriweather.css" rel="stylesheet">
	<link href="https://html.theme.iastate.edu/iastate/css/iastate.min.css?v=2.0.16" rel="stylesheet">
	<link href="https://cdn.theme.iastate.edu/favicon/favicon.ico" rel="icon" type="image/x-icon">
	<link href="https://cdn.theme.iastate.edu/favicon/apple-touch-icon.png" rel="icon">

	<script src="https://cdn.theme.iastate.edu/fontawesome/5.0/js/all.min.js"></script>

	@stack('scripts')
</head>
<body>
<header>
	<!-- navbar-iastate -->
	<nav class="navbar-iastate">
		<div class="container">

			<!-- navbar-iastate-left -->
			<ul class="nav navbar-nav navbar-iastate-left">
				<li><a href="http://www.iastate.edu">iastate.edu</a></li>
				<li class="dropdown dropdown-hover isu-index">
					<a href="http://www.iastate.edu/index/A" class="" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">Index<svg class="svg-inline--fa fa-angle-down fa-w-8 label-dropdown-toggle" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"></path></svg><!-- <span class="fal fa-angle-down label-dropdown-toggle"></span> --></a>
					<ul class="dropdown-menu isu-index-alpha">
						<li><a href="http://www.iastate.edu/index/A/">A</a></li>
						<li><a href="http://www.iastate.edu/index/B/">B</a></li>
						<li><a href="http://www.iastate.edu/index/C/">C</a></li>
						<li><a href="http://www.iastate.edu/index/D/">D</a></li>
						<li><a href="http://www.iastate.edu/index/E/">E</a></li>
						<li><a href="http://www.iastate.edu/index/F/">F</a></li>
						<li><a href="http://www.iastate.edu/index/G/">G</a></li>
						<li><a href="http://www.iastate.edu/index/H/">H</a></li>
						<li><a href="http://www.iastate.edu/index/I/">I</a></li>
						<li><a href="http://www.iastate.edu/index/J/">J</a></li>
						<li><a href="http://www.iastate.edu/index/K/">K</a></li>
						<li><a href="http://www.iastate.edu/index/L/">L</a></li>
						<li><a href="http://www.iastate.edu/index/M/">M</a></li>
						<li><a href="http://www.iastate.edu/index/N/">N</a></li>
						<li><a href="http://www.iastate.edu/index/O/">O</a></li>
						<li><a href="http://www.iastate.edu/index/P/">P</a></li>
						<li><a href="http://www.iastate.edu/index/Q/">Q</a></li>
						<li><a href="http://www.iastate.edu/index/R/">R</a></li>
						<li><a href="http://www.iastate.edu/index/S/">S</a></li>
						<li><a href="http://www.iastate.edu/index/T/">T</a></li>
						<li><a href="http://www.iastate.edu/index/U/">U</a></li>
						<li><a href="http://www.iastate.edu/index/V/">V</a></li>
						<li><a href="http://www.iastate.edu/index/W/">W</a></li>
						<li><a href="http://www.iastate.edu/index/X/">X</a></li>
						<li><a href="http://www.iastate.edu/index/Y/">Y</a></li>
						<li><a href="http://www.iastate.edu/index/Z/">Z</a></li>
					</ul>
				</li>
			</ul>
			<!-- /navbar-iastate-left -->

			<!-- navbar-iastate-right -->
			<ul class="nav navbar-nav navbar-right navbar-iastate-right">
				<li><a href="http://info.iastate.edu/">Directory</a></li>
				<li><a href="http://www.fpm.iastate.edu/maps/">Maps</a></li>
				<li><a href="http://web.iastate.edu/safety/">Safety</a></li>
				<li class="dropdown dropdown-hover">
					<a href="//web.iastate.edu/signons/" class="" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false">Sign Ons<svg class="svg-inline--fa fa-angle-down fa-w-8 label-dropdown-toggle" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z"></path></svg><!-- <span class="fal fa-angle-down label-dropdown-toggle"></span> --></a>
					<ul class="dropdown-menu">
						<li><a href="https://accessplus.iastate.edu/">AccessPlus</a></li>
						<li><a href="https://canvas.iastate.edu/">Canvas</a></li>
						<li><a href="https://iastate.box.com/">CyBox</a></li>
						<li><a href="http://cymail.iastate.edu/">CyMail</a></li>
						<li><a href="https://login.iastate.edu/">Okta</a></li>
						<li><a href="https://outlook.iastate.edu/">Outlook</a></li>
						<li><a href="https://web.iastate.edu/signons/">More Sign Ons...</a></li>
					</ul>
				</li>
			</ul>
			<!-- /navbar-iastate-right -->

		</div>
	</nav>
	<!-- /navbar-iastate -->

	<!-- navbar-site -->
	<nav class="navbar-site">
		<div class="container">

			<div class="navbar-site-wordmark">
				<a href="/" title="Home" class="wordmark-unit">
					<span class="wordmark-isu">Iowa State University</span>
					<span class="wordmark-unit-title">Department of Lorem Ipsum</span>
				</a>
			</div>

			<div class="navbar-header visible-xs visible-sm">
				<button id="navbar-menu-button" type="button" class="navbar-toggle navbar-toggle-left collapsed" data-toggle="collapse" data-target="#navbar-menu-collapse, #navbar-site-links-collapse" aria-expanded="false">
				<span class="navbar-toggle-icon menu-icon">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</span>
					<span class="navbar-toggle-label">
					Menu <span class="sr-only">Toggle</span>
				</span>
				</button>
				<button id="navbar-search-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-site-search-collapse" aria-expanded="false">
					<span class="navbar-toggle-icon search-icon"></span>
					<span class="navbar-toggle-label">
					Search <span class="sr-only">Toggle</span>
				</span>
				</button>
			</div>

			<div class="navbar-site-info collapse navbar-collapse" id="navbar-site-search-collapse">
				<form action="//google.iastate.edu/search" class="navbar-site-search" method="GET" role="search">
					<label for="search-input" class="sr-only">Search</label>
					<input name="output" type="hidden" value="xml_no_dtd">
					<input name="client" type="hidden" value="default_frontend">
					<input name="sitesearch" type="hidden" value="html.theme.iastate.edu">
					<input name="proxystylesheet" type="hidden" value="default_frontend">
					<input name="q" id="search-input" aria-label="Text input for search" title="Search" placeholder="Search" tabindex="0" type="text" class="form-control">
					<input class="hidden" title="Submit" type="submit" value="Search">
					<span class="search-icon"></span>
				</form>
			</div>

			<div class="navbar-site-info collapse navbar-collapse navbar-caps" id="navbar-site-links-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="http://theme.iastate.edu" class="target-offset">

							<span class="label-text">IASTATE Theme</span>
						</a>
					</li>
					<li>
						<a href="mailto:theme@iastate.edu" class="target-offset">
							<svg class="svg-inline--fa fa-paper-plane fa-w-16 label-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg><!-- <span class="label-icon fas fa-paper-plane" aria-hidden="true"></span> -->
							<span class="label-text">Send Feedback</span>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
	<!-- /navbar-site -->
</header>

<main role="main" id="main-content">
	<div class="container">
		@yield('content')
	</div>
</main>

<footer role="contentinfo">
	<div class="container">
		<div class="row">

			<!-- footer-associates -->
			<section class="footer-associates col-sm-12 col-md-3">
				<ul>
					<li><a href="http://www.iastate.edu"><img src="//cdn.theme.iastate.edu/img/isu-stacked.svg" class="wordmark-isu" alt="Iowa State University"></a></li>
					<li><a href="/">College of Nimbus Sans</a></li>
					<li><a href="/">Department of Lorem Ipsum</a></li>
				</ul>
			</section>

			<section class="footer-contact col-sm-12 col-md-3">
				<p>
					<strong>Department of Lorem Ipsum</strong><br>
					<a href="https://goo.gl/maps/QmU4A2fHop32">2221 Wanda Daley Dr<br>
						Room 2922<br>
						Ames, IA 50011</a>
				</p>
				<a href="mailto:theme@iastate.edu">theme@iastate.edu</a> <br>
				<a href="tel:515-294-6654">515-294-6654 phone</a>
			</section>

			<!-- footer-social -->
			<section class="footer-social labeled col-sm-12 col-md-3">
				<ul>
					<li>
						<a href="http://web.iastate.edu/social/"><svg class="svg-inline--fa fa-share-alt-square fa-w-14 footer-social-icon" aria-label="hidden" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 80v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48zM304 296c-14.562 0-27.823 5.561-37.783 14.671l-67.958-40.775a56.339 56.339 0 0 0 0-27.793l67.958-40.775C276.177 210.439 289.438 216 304 216c30.928 0 56-25.072 56-56s-25.072-56-56-56-56 25.072-56 56c0 4.797.605 9.453 1.74 13.897l-67.958 40.775C171.823 205.561 158.562 200 144 200c-30.928 0-56 25.072-56 56s25.072 56 56 56c14.562 0 27.823-5.561 37.783-14.671l67.958 40.775a56.088 56.088 0 0 0-1.74 13.897c0 30.928 25.072 56 56 56s56-25.072 56-56C360 321.072 334.928 296 304 296z"></path></svg><!-- <span class="footer-social-icon fas fa-share-alt-square" aria-label="hidden"></span> -->Social Media Directory</a>
					</li>
					<li>
						<a href="http://facebook.com/iowastateu/"><svg class="svg-inline--fa fa-facebook-square fa-w-14 footer-social-icon" aria-label="hidden" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg><!-- <span class="footer-social-icon fab fa-facebook-square" aria-label="hidden"></span> -->Facebook</a>
					</li>
					<li>
						<a href="http://twitter.com/iowastateu/"><svg class="svg-inline--fa fa-twitter-square fa-w-14 footer-social-icon" aria-label="hidden" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg><!-- <span class="footer-social-icon fab fa-twitter-square" aria-label="hidden"></span> -->Twitter</a>
					</li>
					<li>
						<a href="http://instagram.com/iowastateu/"><svg class="svg-inline--fa fa-instagram fa-w-14 footer-social-icon" aria-label="hidden" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <span class="footer-social-icon fab fa-instagram" aria-label="hidden"></span> -->Instagram</a>
					</li>
				</ul>
			</section>

			<!-- footer-legal -->
			<section class="footer-legal col-sm-12 col-md-3">
				<p>
					Copyright © 1995-<script>document.write(new Date().getFullYear())</script>2020<br>
					Iowa State University<br>
					of Science and Technology<br>
					All rights reserved.
				</p>
				<ul>
					<li><a href="http://www.policy.iastate.edu/policy/discrimination">Non-discrimination Policy</a></li>
					<li><a href="http://www.policy.iastate.edu/electronicprivacy">Privacy Policy</a></li>
					<li><a href="http://digitalaccess.iastate.edu">Digital Access &amp; Accessibility</a></li>
				</ul>
			</section>

		</div>
	</div>
</footer>
</body>
</html>
