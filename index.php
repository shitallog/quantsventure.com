<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quants Venture - Stock Broking</title>
	<!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comme:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon2.png" sizes="180x180">
    <link rel="icon" href="assets/img/favicon2.png">
</head>
<body class="bg-light">
	<nav id="navbar-fixed" class="navbar navbar-expand-xl bg-white py-0" data-bs-theme="light">
		<div class="container">
			<a class="navbar-brand" href="./">
				<img src="assets/img/logo2.png" class="img-fluid" width="180">
			</a>
			<button class="navbar-toggler btn text-bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="bi bi-list fs-1"></span>
			</button>
			<div class="collapse navbar-collapse mb-3 mb-lg-0" id="main-navigation">
				<ul class="navbar-nav my-3 my-lg-0 ms-auto navbar-nav-scroll" style="--bs-scroll-height: 250px;">
					<li class="nav-item active"><a class="nav-link px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0" aria-current="page" href="index.php">Home</a></li>
					<li class="nav-item "><a class="nav-link px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0" href="packages.php">Packages</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0" href="wealth-management-services.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Wealth Management Services</a>
						<ul class="dropdown-menu text-bg-light text-capitalize p-0 my-3 my-lg-0 shadow-sm rounded-0 list-group-flush">
							<li><a class="dropdown-item py-2" href="wealth-management-services.html#equity-derivatives">Equity (Derivatives)</a></li>
							<li><a class="dropdown-item py-2" href="wealth-management-services.html#currency">Currency</a></li>
							<li><a class="dropdown-item py-2" href="wealth-management-services.html#commodity">Commodity</a></li>
							<li><a class="dropdown-item py-2" href="wealth-management-services.html#corporate-fd">Corporate FD</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#bonds">Bonds</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#mutual-funds">Mutual Funds</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#insurance">Insurance</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#wealth-calculator">Wealth Calculator</a></li>
						</ul>						
					</li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0" href="portfolio-management-services.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio Management Services</a>
                        <ul class="dropdown-menu text-bg-light text-capitalize p-0 my-3 my-lg-0 shadow-sm rounded-0 list-group-flush">
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#individual-portfolio-tracking">Individual Portfolio Tracking</a></li>
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#hni-services">HNI Services</a></li>
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#portfolio-clinic">Portfolio Clinic</a></li>
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#day-to-day-guidance">Day to Day Guidance</a></li>
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#research-support-on-client-recommendation">Research Support on Client Recommendation</a></li>
                        </ul>
                    </li>
					
					<li class="nav-item"><a class="nav-link px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0" href="contact-us.php">Contact</a></li>

				</ul>
              	<a class="btn btn-dark fw-light px-2 px-md-3" href="https://ekyc.motilaloswal.com/Partner/?diyid=38aeb2f3-7b00-45d0-962b-3ad4818e5c94" target="_blank">Demat A/C Opening</a>
			</div>
		</div>
	</nav>

	<!-- Sticky header -->

	<section id="home-banner" class="section-padding-50" style="background-image: url(assets/img/home-banner-2.jpg);">
		<div class="container">
			<div class="row gy-5 align-items-center">
				<div class="col-xxl-6 col-xl-7 col-lg-7 col-md-10">
					<div class="card border-0 rounded-0 bg-transparent text-light">
						<div class="card-body p-5">
							<div class="section-title text-center pb-3">
								<h1 class="card-title fw-bold">Contact with us</h1>
								<span class="d-block mx-auto border border- border-dark my-3" style="width: 100px;"></span>
							</div>
						    <form id="home-contact" class="form row gy-4" action="demo_processing.php" method="POST">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
									<input type="text" name="fname" class="form-control rounded-0 shadow-sm" placeholder="Enter Full Name" required>
								</div>
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
									<input type="tel" name="mobile" class="form-control rounded-0 shadow-sm" placeholder="Enter Mobile" required>
								</div>
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
									<input type="email" name="email" class="form-control rounded-0 shadow-sm" placeholder="Enter Email" required>
								</div>
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
									<select name="state" class="form-control rounded-0 shadow-sm" required>
										<option value="">State</option>
										<option value="Andhra Pradesh">Andhra Pradesh</option>
										<option value="Arunachal Pradesh">Arunachal Pradesh</option>
										<option value="Chhattisgarh">Chhattisgarh</option>
										<option value="Delhi">Delhi</option>
										<option value="Bihar">Bihar</option>
										<option value="Goa">Goa</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Haryana">Haryana</option>
										<option value="Himachal Pradesh">Himachal Pradesh</option>
										<option value="Jammu & Kashmir">Jammu & Kashmir</option>
										<option value="Jharkhand">Jharkhand</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Kerala">Kerala</option>
										<option value="Madhya Pradesh">Madhya Pradesh</option>
										<option value="Maharashtra">Maharashtra</option>
										<option value="Manipur">Manipur</option>
										<option value="Meghalaya">Meghalaya</option>
										<option value="Mizoram">Mizoram</option>
										<option value="Nagaland">Nagaland</option>
										<option value="Odisha">Odisha</option>
										<option value="Punjab">Punjab</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Sikkim">Sikkim</option>
										<option value="Tamil Nadu">Tamil Nadu</option>
										<option value="Telangana">Telangana</option>
										<option value="Tripura">Tripura</option>
										<option value="Uttarakhand">Uttarakhand</option>
										<option value="Uttar Pradesh">Uttar Pradesh</option>
										<option value="West Bengal">West Bengal</option>
									</select>
								</div>
								<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
									<textarea name="msg" class="form-control rounded-0 shadow-sm" placeholder="Enter Message(Optional)"></textarea>
								</div>
								<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
									<button type="submit" name="demo" class="btn btn-dark text-shadow form-control rounded-pill shadow-sm text-uppercase">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-8">
					<div id="shapes">
						<div id="shape-one"></div>
						<img src="assets/img/banner.jpg" class="img-fluid">
						<div id="shape-two"></div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
  
  	<section id="conditions" class="bg-body py-3">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xxl-12">
					<marquee>
                        Investment in stock market is subject to market risk. We DO NOT offer any guaranteed profit services or Fixed Return services.
					</marquee>
					<!-- <marquee>
						Investing and Trading in stock market is risky. It Involves both profit and loss, Due to leverage both profit and loss are exaggerated, our research service gives research alerts for trading ideas in which both target and stop loss is mentioned, however execution of trade is solely the responsibility of the client. We DO NOT provide any trade execution services. All our research alerts are to be considered only as a reference tool and clients should not consider our research alerts as Personal Investment/Trading Advice in any condition. We DO NOT take any responsibility for any losses that the User may incur.
					</marquee> -->
				</div>
			</div>
		</div>
	</section>

	<section id="about-company" class="bg-body-secondary py-5">
		<div class="container">
			<div class="row gy-4">
				<div class="col-xxl-12">
					<div class="section-title text-center">
						<h3 class="fs-1 text-uppercase">About Our Company</h3>
					</div>
				</div>
				<div class="col-xxl-12">
					<!-- <p class="lead text-muted text-center">Owner & Chief Analyst at Stock Bazaar Expert. Stock Bazaar Expert is a professionals consultancy services firm managed by persons having experience of over 26 years in the stock market.</p> -->
                    <p class="lead text-muted text-center">Seize Investment Opportunities: Your Trusted Ally in Stock Broking.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="golden-rules" class="section-padding-100">
		<div class="container">
			<div class="row g-4">
				<div class="col-xxl-12">
					<div class="section-title text-center mb-5">
						<h3 class="fs-1">Why Choose Us</h3>
					</div>
				</div>
				<!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/16-years-of-trust.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">16 years of trust</h6>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/9000-plus-satisfied-clients.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">9000+ satisfied Clients</h6>
						</div>
					</div>
				</div> -->

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
                    <div class="card rounded-0 border-0 shadow-sm w-100">
                        <div class="card-body px-4 px-lg-5">
                            <img src="assets/img/illustrations/wealth-mgnt.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
                            <h6 class="text-center">Wealth Management</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
                    <div class="card rounded-0 border-0 shadow-sm w-100">
                        <div class="card-body px-4 px-lg-5">
                            <img src="assets/img/illustrations/option-strategies.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
                            <h6 class="text-center">Option Strategies (Stradles & Triangles)</h6>
                        </div>
                    </div>
                </div>
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/highest-accuracy.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">Highest Accuracy</h6>
						</div>
					</div>
				</div>

				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/qualified-consultants.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">Qualified Consultants</h6>
						</div>
					</div>
				</div>
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/strategic-undertaking.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">Strategic Undertaking</h6>
						</div>
					</div>
				</div>
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/customer-support.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">Customer Support</h6>
						</div>
					</div>
				</div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
                    <div class="card rounded-0 border-0 shadow-sm w-100">
                        <div class="card-body px-4 px-lg-5">
                            <img src="assets/img/illustrations/data-driven-analysis.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
                            <h6 class="text-center">Data Driven Analysis</h6>
                        </div>
                    </div>
                </div>

				<!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/SEBI-registered-research-analyst.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">SEBI Registered Research Analyst</h6>
						</div>
					</div>
				</div> -->
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/currency-certified-experts.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">Currency Certified Experts</h6>
						</div>
					</div>
				</div>
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-flex">
					<div class="card rounded-0 border-0 shadow-sm w-100">
						<div class="card-body px-4 px-lg-5">
							<img src="assets/img/illustrations/portfolio-management-services.jpg" width="250" height="250" class="img-fluid d-block mx-auto mb-3 object-fit-cover">
							<h6 class="text-center">Portfolio Management Services (Personalised)</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="pro-banner" class="section-padding-100">
		<div class="container">
			<div class="row gy-5 justify-content-center align-items-center">
				<div class="col-xxl-6 col-xl-7 col-lg-6 col-md-6">					
					<h3 class="fw-normal mb-5">Now Invest Like a Pro With Quants Venture</h3>
					<ul class="ps-0">
						<li class="d-table">
							<span class="d-table-cell"><i class="bi bi-check fs-3 me-2"></i></span>
							<span class="d-table-cell">Unlocking investment potential.</span>
						</li>
						<li class="d-table">
							<span class="d-table-cell"><i class="bi bi-check fs-3 me-2"></i></span>
							<span class="d-table-cell">Build your financial future with premiere Wealth Management expertise.</span>
						</li>
						<li class="d-table">
							<span class="d-table-cell"><i class="bi bi-check fs-3 me-2"></i></span>
							<span class="d-table-cell">Maximizing investment opportunities.</span>
						</li>
						<li class="d-table">
							<span class="d-table-cell"><i class="bi bi-check fs-3 me-2"></i></span>
							<span class="d-table-cell">Empowering your financial journey with your trusted companion in stock broking.</span>
						</li>
					</ul>
				</div>
				<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
					<div id="shapes">
						<div id="shape-one"></div>
						<img src="assets/img/pro-banner.jpg" class="img-fluid">
						<div id="shape-two"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="section-padding-80 text-bg-dark">
		<div class="container">
			<div class="row gy-5 justify-content-center mb-5">
				<div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12">					
                  	<img src="assets/img/logo2-white.png" width="250" class="img-fluid d-block mx-auto shadow-sm">
				</div>
				<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5">
                    <h4 class="fw-bold mb-4">Quick Links</h4>
					<div class="list-group">
                        <a href="./" class="list-group-item bg-transparent border-0 px-0 pt-0">Home</a>
						<a href="wealth-management-services.html" class="list-group-item bg-transparent border-0 px-0 pt-0">Wealth Management Services</a>
                        <a href="portfolio-management-services.html" class="list-group-item bg-transparent border-0 px-0 pt-0">Portfolio Management Services</a>
                        <a href="contact-us.html" class="list-group-item bg-transparent border-0 px-0 pt-0">Contact Us</a>
                          <a href="Disclaimer.html" class="list-group-item bg-transparent border-0 px-0 pt-0">Disclaimer </a>
					</div>
				</div>				
				<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <h4 class="fw-bold mb-4">Connect with us</h4>
					<ul class="list-group">
						<li class="list-group-item bg-transparent border-0 px-0 pt-0 mb-2">
							<div class="d-table">
								<span class="d-table-cell"><i class="bi bi-geo-alt-fill text-secondary fs-4 align-middle me-3"></i></span>
								<span class="d-table-cell">Sector - 1, Ghansoli, Navi Mumbai, Mumbai, Maharashtra, India.</span>
							</div>
						</li>
						<li class="list-group-item bg-transparent border-0 px-0 pt-0 mb-2">
							<div class="d-table">
								<span class="d-table-cell"><i class="bi bi-telephone-fill text-secondary fs-4 align-middle me-3"></i></span>
								<span class="d-table-cell">
                                  <a href="tel:+917045329073" class="pb-2">91 7045329073</a><br>
                                  
                              	</span>
							</div>
						</li>
						<a href="mailto: support@quantsventure.com" class="list-group-item bg-transparent border-0 px-0 pt-0">
							<div class="d-table">
								<span class="d-table-cell"><i class="bi bi-envelope-fill text-secondary fs-4 align-middle me-3"></i></span>
								<span class="d-table-cell">support@quantsventure.com</span>
							</div>
						</a>
					</ul>
				</div>
			</div>
			<div class="row gy-5 justify-content-center copyrights">
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="fw-medium text-center">Copyright&nbsp;<i class="bi bi-c-circle fs-6 me-1 align-middle"></i> <span id="copy-year"></span>. <b class="fw-bold">Quants Venture - Stock Broking</b>&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved.</div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <h4 class="text-center">Follow Us:</h4>
                    <div class="list-group list-group-horizontal justify-content-center">
                        <a href="https://www.facebook.com/profile.php?id=61551530296003&mibextid=ZbWKwL" target="_blank"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>
                        <a href="https://instagram.com/quants_venture_stock_broking?igshid=NGVhN2U2NjQ0Yg==" target="_blank"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-twitter fs-4"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/quants-venture-729661296" target="_blank"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-linkedin fs-4"></i>
                        </a>
                        <a href="#"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-youtube fs-4"></i>
                        </a>
                        <a href="https://wa.me/917045329073" target="_blank"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-whatsapp fs-4"></i>
                        </a>
                        <a href="https://t.me/+za-GD_5_FChjYjQ1" target="_blank"
                            class="list-group-item list-group-item-action ps-0 pe-3 w-auto bg-transparent border-0 link-light">
                            <i class="bi bi-telegram fs-4"></i>
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</footer>
  
  	<!-- <a href="user-consent.html" id="user-consent" class="btn btn-primary px-4 py-2">User Consent</a> -->
  
  	<a href="complaint-board.html" id="complaint-board" class="btn btn-danger px-4 py-2">Complaint Board</a>

	<a href="https://wa.me/917045329073" target="_blank" id="whatsapp-icon" class="animate__animated animate__pulse animate__infinite animate__fast png-shadow">
        <img src="assets/img/whatsapp.png" class="img-fluid" width="50">
    </a>

	<a href="#" id="scroll-top" class="btn shadow border rounded-circle">
        <i class="bi bi-chevron-up fs-5"></i>
    </a>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <script src="assets/js/script.js"></script>
</body>
</html>