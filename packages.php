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
	<link href="assets/css/stylee.css" rel="stylesheet">
  <link href="assets/css/stylees.css" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
  rel="stylesheet"
/>


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon2.png" sizes="180x180">
    <link rel="icon" href="assets/img/favicon2.png">
    <style>
  


.highlight {
    color: #e74c3c;
    font-weight: bold;
}
       .bank-details {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .bank-details h3 {
            margin-bottom: 20px;
        }
        .bank-details p {
            font-size: 1.1em;
            margin: 5px 0;
        }
        .bank-details .icon {
            color: #17a2b8;
            margin-right: 10px;
        }
       .popup {
  display: none;
  position: fixed;
  z-index: 9;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
}

.popup-content {
  background-color: #fff;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 400px;
  border-radius: 10px;
  text-align: center;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.popup-content label {
  display: block;
  margin: 15px 0 5px;
}

.popup-content input,
.popup-content select {
  width: calc(100% - 20px);
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.popup-content button {
  background-color: #ff0000;
  width: 350px;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

.popup-content button:hover {
  background-color: #0056b3;
}
.terms {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .terms input {
            margin-right: 3px;
        }
  /* Initial text color */
  .text-center.text-white h4 {
    color: black;
}

.text-center.text-white h4:hover {
    color: white;
}
.policy {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .policy input {
            margin-right: 10px;
        }
        .flex-form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .flex-form .form-group {
            flex: 1 1 100%;
        }
        @media (min-width: 576px) {
            .flex-form .form-group {
                flex: 1 1 45%;
            }
        }
    </style>
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
                  <li class="nav-item"><a class="nav-link px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0"
                    aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item "><a class="nav-link px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0" href="packages.php">Packages</a></li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0"
                            href="wealth-management-services.html" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Wealth Management Services</a>
                        <ul
                            class="dropdown-menu text-bg-light text-capitalize p-0 my-3 my-lg-0 shadow-sm rounded-0 list-group-flush">
                            <li><a class="dropdown-item py-2"
                                    href="wealth-management-services.html#equity-derivatives">Equity (Derivatives)</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#currency">Currency</a>
                            </li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#commodity">Commodity</a>
                            </li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#corporate-fd">Corporate
                                    FD</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#bonds">Bonds</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#mutual-funds">Mutual
                                    Funds</a></li>
                            <li><a class="dropdown-item py-2" href="wealth-management-services.html#insurance">Insurance</a>
                            </li>
                            <li><a class="dropdown-item py-2"
                                    href="wealth-management-services.html#wealth-calculator">Wealth Calculator</a></li>
                       
                                  </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0"
                            href="portfolio-management-services.html" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Portfolio Management Services</a>
                        <ul
                            class="dropdown-menu text-bg-light text-capitalize p-0 my-3 my-lg-0 shadow-sm rounded-0 list-group-flush">
                            <li><a class="dropdown-item py-2"
                                    href="portfolio-management-services.html#individual-portfolio-tracking">Individual
                                    Portfolio Tracking</a></li>
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#hni-services">HNI
                                    Services</a></li>
                            <li><a class="dropdown-item py-2"
                                    href="portfolio-management-services.html#portfolio-clinic">Portfolio Clinic</a></li>
                            <li><a class="dropdown-item py-2" href="portfolio-management-services.html#day-to-day-guidance">Day
                                    to Day Guidance</a></li>
                            <li><a class="dropdown-item py-2"
                                    href="portfolio-management-services.html#research-support-on-client-recommendation">Research
                                    Support on Client Recommendation</a></li>
                        </ul>
                    </li>
				
                        
                    <li class="nav-item"><a class="nav-link px-2 px-lg-3 py-2 py-lg-3 mb-2 mb-lg-0"
                            href="contact-us.php">Contact </a></li>
                </ul>
                <a class="btn bg-dark btn-dark fw-light px-2 px-md-3" href="https://ekyc.motilaloswal.com/Partner/?diyid=38aeb2f3-7b00-45d0-962b-3ad4818e5c94" target="_blank">Demat A/C
                    Opening</a>
            </div>
        </div>
    </nav>

	<!-- Sticky header -->

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
	
	

	<section id="insurance" class="section-padding-100">
		<div class="container">
			<div class="row g-5 justify-content-center">
				
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
				    <!-- Pricing-area start -->
      <section class="pricing-area pt-100 pb-70">
          
          
        
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="col-xxl-12">
              <div class="section-title text-center">
                <h3 class="fs-1 text-uppercase fw-bold mb-5">Packages</h3>
              </div>
            </div>
            <div class="tabs-navigation tabs-navigation-2 text-center mb-40" data-aos="fade-up">
               <ul class="nav nav-tabs rounded-pill bg-danger" data-hover="fancyHover">
                                                  <li class="nav-item active">
                    <button class="nav-link hover-effect rounded-pill "
                      data-bs-toggle="tab" data-bs-target="#monthly" type="button">
                      PREMIUM
                    </button>
                  </li>
                                  <li class="nav-item active">
                    <button class="nav-link hover-effect rounded-pill active"
                      data-bs-toggle="tab" data-bs-target="#yearly" type="button">
                      STANDARD
                    </button>
                  </li>
                                  <li class="nav-item  active">
                    <button class="nav-link hover-effect rounded-pill"
                      data-bs-toggle="tab" data-bs-target="#lifetime" type="button">
                      COMBO
                    </button>
                  </li>
                 
 </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="tab-content">
                   <div class="tab-pane fade"
                    id="monthly" >
                    <div class="row justify-content-center show active">
                           <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                          <div class="pricing-item radius-lg  mb-30">
                            <div class="d-flex align-items-center">
                              <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                              <div class="label">
                                <h3> 
                                  Monthly</h3>
                                
                              </div>
                            </div>
                         
                            <p class="text"></p>
                            <div class="d-flex align-items-center">
                              <span class="price">₹29,999 -/</span>
                             
                                                          </div>
                                                          <p></p>
                                                          <p style="text-align:center ;"><span  class="period "> Monthly</span></p>
                                                          <P></P>
                            <ul class="item-list list-unstyled p-0 pricing-list">

                              <li><i class="fa fa-check" aria-hidden="true"></i>

                                 High conviction calls                                 
                                                              </li>

                              <li><i class="fa fa-check" aria-hidden="true"></i>

                                                                  Alpha option call
                                                              </li>
                              <li>
                                <i class="fa fa-check" aria-hidden="true"></i>

                                         Directional  Treads Nifty and bank Nifty  option Tread 
                              </li>

                              <li>
                               <i class="fa fa-check" aria-hidden="true"></i>

                                           Entry and exist level with Target and stopless 
                              </li>

                              <li><i class="fa fa-check" aria-hidden="true"></i>
                                         1 to 2 Trad Nifty and Bank Nifty 
                                                                                                </li>

                              <li><i class="fa fa-check" aria-hidden="true"></i>
                                           Live Market customer support Available 

                                                                                                      
                                                                                                </li>
                              <li><i class="fa fa-check" aria-hidden="true"></i>
                                  1 Quality Stock option 
                                
                                                                                                   
                                                                                                </li>
                              
                              
                            </ul>
     
                            <a href="#" class="btn btn-outline btn-lg purchase-btn"  target="_self" id="contact" title="Purchase" data-package="85">GET STARTED</a>
    

     
                                                      </div>
                        </div>
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                          <div class="pricing-item radius-lg active mb-30">
                            <div class="d-flex align-items-center">
                              <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                              <div class="label">
                                <h3> Half Yearly</h3>
                              
                                
                              </div>
                            </div>
                             <!-- Discount Icon -->
    <div class="discount-icon" style="position: absolute; top: 10px; right: 10px; background-color: #ff6347; color: white; padding: 5px 10px; border-radius: 5px;">
      <i class="fas fa-tag"></i> 10% OFF
    </div>
                            <p class="text"></p>
                            <div class="d-flex align-items-center">
                              <span class="price">₹1,59,999-/</span>
                            
                                                             
                                                          </div>
                                                          <p></p>
                                                          <p style="text-align:center ;"><span  class="period "> Half yearly</span></p>
                          <h4 class="text-center text-white"><s>₹1,59,999</s></h4>   
                         <P></P>
                                                    <ul class="item-list list-unstyled p-0 pricing-list">

                                                      <li><i class="fa fa-check" aria-hidden="true"></i>

                                                        High conviction calls                                 
                                                                                     </li>
                       
                                                     <li><i class="fa fa-check" aria-hidden="true"></i>
                       
                                                                                         Alpha option call
                                                                                     </li>
                                                     <li>
                                                       <i class="fa fa-check" aria-hidden="true"></i>
                       
                                                     Directional  Treads Nifty and bank Nifty  option Tread 
                                                     </li>
                       
                                                     <li>
                                                      <i class="fa fa-check" aria-hidden="true"></i>
                       
                                                       Entry and exist level with Target and stopless 
                                                     </li>
                       
                                                     <li><i class="fa fa-check" aria-hidden="true"></i>
                       1 to 2 Trad Nifty and Bank Nifty 
                                                                                                                       </li>
                       
                                                     <li><i class="fa fa-check" aria-hidden="true"></i>
                                                     Live Market customer support Available 
                       
                                                                                                                             
                                                                                                                       </li>
                                                     <li><i class="fa fa-check" aria-hidden="true"></i>
                                                         1 Quality Stock option 
                                                       
                                                                                                                          
                                                                                                                       </li>

                              
                            </ul>
                            <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="85">Get Started</a>
                            
                                                      </div>
                         </div>
                        
<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                          <div class="pricing-item radius-lg   active mb-30">
                            <div class="d-flex align-items-center">
                              <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                              <div class="label">
                                <h3> Yearly</h3>
                                
                              </div>
                            </div>
                             <!-- Discount Icon -->
    <div class="discount-icon" style="position: absolute; top: 10px; right: 10px; background-color: #ff6347; color: white; padding: 5px 10px; border-radius: 5px;">
      <i class="fas fa-tag"></i> 10% OFF
    </div>
                            <p class="text"></p>
                            <div class="d-flex align-items-center">
                              <span class="price">₹3,29,999-/</span>
                             
                                                            
                                                          </div>
                                                          <p></p>
                                                          <p style="text-align:center ;"><span  class="period "> yearly</span></p>
                                                          <h4 class="text-center text-white"><s>₹3,29,999</s></h4>  
                                                          <P></P>
                                                       <ul class="item-list list-unstyled p-0 pricing-list">

                                                        <li><i class="fa fa-check" aria-hidden="true"></i>

                                                          High conviction calls                                 
                                                                                       </li>
                         
                                                       <li><i class="fa fa-check" aria-hidden="true"></i>
                         
                                                                                           Alpha option call
                                                                                       </li>
                                                       <li>
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                         
                                                       Directional  Treads Nifty and bank Nifty  option Tread 
                                                       </li>
                         
                                                       <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                         
                                                         Entry and exist level with Target and stopless 
                                                       </li>
                         
                                                       <li><i class="fa fa-check" aria-hidden="true"></i>
                                                        1 to 2 Trad Nifty and Bank Nifty 
                                                                                                                         </li>
                         
                                                       <li><i class="fa fa-check" aria-hidden="true"></i>
                                                       Live Market customer support Available 
                         
                                                                                                                               
                                                                                                                         </li>
                                                       <li><i class="fa fa-check" aria-hidden="true"></i>
                                                           1 Quality Stock option 
                                                         
                                                                                                                            
                                                        </li>


                              
                            </ul>
                            <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="85">Get Started</a>
                          </div>
</div>

</div>
</div>
<!-- Popup Login Form -->
<div id="loginPopup" class="popup">
  <div class="popup-content">
      <span class="close">&times;</span>
      <h3>Get Your Free Trial </h3>
      
      <form class="container-fluid" action="packages_processing.php" method="post">
        <div class="form-group">
           
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
           
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
       
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="form-group">
          
            <select id="state" name="state" class="form-control" required>
                <option value="" disabled selected>State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhan">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
            </select>
        </div>
        <div class="form-group">
           
            <select id="investment" name="investment" class="form-control" required>
                <option value="" disabled selected>Select your investment</option>
                <option value="below_1_lakh">Below ₹1 Lakh</option>
                <option value="1_to_5_lakh">₹1 Lakh - ₹5 Lakh</option>
                <option value="5_to_10_lakh">₹5 Lakh - ₹10 Lakh</option>
                <option value="10_to_25_lakh">₹10 Lakh - ₹25 Lakh</option>
                <option value="25_to_50_lakh">₹25 Lakh - ₹50 Lakh</option>
                <option value="above_1_crore">Above ₹1 Crore</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>



<div class="tab-pane fade show active" id="yearly">
  <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item radius-lg mb-30">
              <div class="d-flex align-items-center">
                  <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                  <div class="label">
                      <h3> Monthly</h3>
                  </div>
              </div>
              <p class="text"></p>
              <div class="d-flex align-items-center">
                  <span class="price">₹19,999/-</span>
              </div>
              <p></p>
              <p style="text-align:center ;"><span class="period "> Monthly</span></p>
              <p></p>
              <ul class="item-list list-unstyled p-0 pricing-list">
                  <li><i class="fa fa-check" aria-hidden="true"></i> Directional Treads Nifty and bank Nifty option Tread </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Entry and exit level with Target and stoploss </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 to 2 Trade Nifty and Bank Nifty </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Live Market customer support Available </li>
              </ul>
              <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="85">Get Started</a>
          </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item radius-lg active mb-30">
              <div class="d-flex align-items-center">
                  <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                  <div class="label">
                      <h3> Half Yearly</h3>
                  </div>
              </div>
              <!-- Discount Icon -->
              <div class="discount-icon" style="position: absolute; top: 10px; right: 10px; background-color: #ff6347; color: white; padding: 5px 10px; border-radius: 5px;">
                  <i class="fas fa-tag"></i> 10% OFF
              </div>
              <p class="text"></p>
              <div class="d-flex align-items-center">
                  <span class="price">₹1,09,999/-</span>
              </div>
              <p style="text-align:center ;"><span class="period ">Half yearly</span></p>
              <h4 class="text-center text-white"><s>₹1,09,999</s></h4>
              <p></p>
              <ul class="item-list list-unstyled p-0 pricing-list">
                  <li><i class="fa fa-check" aria-hidden="true"></i> Directional Treads Nifty and bank Nifty option Tread </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Entry and exit level with Target and stoploss </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 to 2 Trade Nifty and Bank Nifty </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Live Market customer support Available </li>
              </ul>
              <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="86">Get Started</a>
          </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item radius-lg  active mb-30">
              <div class="d-flex align-items-center">
                  <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                  <div class="label">
                      <h3> Yearly</h3>
                  </div>
              </div>
              <!-- Discount Icon -->
              <div class="discount-icon" style="position: absolute; top: 10px; right: 10px; background-color: #ff6347; color: white; padding: 5px 10px; border-radius: 5px;">
                  <i class="fas fa-tag"></i> 10% OFF
              </div>
              <p class="text"></p>
              <div class="d-flex align-items-center">
                  <span class="price">₹2,09,999/-</span>
              </div>
              <p style="text-align:center ;"><span class="period "> Yearly</span></p>
              <h4 class="text-center text-white"><s>₹2,09,999</s></h4>
              <p></p>
              <ul class="item-list list-unstyled p-0 pricing-list">
                  <li><i class="fa fa-check" aria-hidden="true"></i> Directional Treads Nifty and bank Nifty option Tread </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Entry and exit level with Target and stoploss </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 to 2 Trade Nifty and Bank Nifty </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Live Market customer support Available </li>
              </ul>
              <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="87">Get Started</a>
          </div>
      </div>
  </div>
</div>

<!-- Popup Login Form -->
<div id="loginPopup" class="container-fluid popup">
  <div class="container popup-content">
      <span class="close">&times;</span>
      <h2>Get Your Free Trial </h2>
      <p></p>
      <form class="container-fluid" action="packages_processing.php" method="post">
        <div class="form-group">
           
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
           
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
       
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="form-group">
          
            <select id="state" name="state" class="form-control" required>
                <option value="" disabled selected>State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhan">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
            </select>
        </div>
        <div class="form-group">
           
            <select id="investment" name="investment" class="form-control" required>
                <option value="" disabled selected>Select your investment</option>
                <option value="below_1_lakh">Below ₹1 Lakh</option>
                <option value="1_to_5_lakh">₹1 Lakh - ₹5 Lakh</option>
                <option value="5_to_10_lakh">₹5 Lakh - ₹10 Lakh</option>
                <option value="10_to_25_lakh">₹10 Lakh - ₹25 Lakh</option>
                <option value="25_to_50_lakh">₹25 Lakh - ₹50 Lakh</option>
                <option value="above_1_crore">Above ₹1 Crore</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


<div class="tab-pane fade" id="lifetime">
  <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item radius-lg mb-30">
              <div class="d-flex align-items-center">
                  <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                  <div class="label">
                      <h3> Monthly</h3>
                  </div>
              </div>
              <p class="text"></p>
              <div class="d-flex align-items-center">
                  <span class="price">₹34,999/-</span>
              </div>
              <p style="text-align:center ;"><span class="period "> Monthly</span></p>
              <p></p>
              <ul class="item-list list-unstyled p-0 pricing-list">
                  <li><i class="fa fa-check" aria-hidden="true"></i> High conviction calls </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Alpha option call </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Directional Treads Nifty and bank Nifty option Tread </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Entry and exit level with Target and stop-loss </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 to 2 Trade Nifty and Bank Nifty </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Live Market customer support Available </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 Quality Stock option </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Get 1 & 2 Research Level of Finnifty Every week </li>
              </ul>
              <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="85">Get Started</a>
          </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item radius-lg active mb-30">
              <div class="d-flex align-items-center">
                  <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                  <div class="label">
                      <h3>Half Yearly</h3>
                  </div>
              </div>
              <!-- Discount Icon -->
              <div class="discount-icon" style="position: absolute; top: 10px; right: 10px; background-color: #ff6347; color: white; padding: 5px 10px; border-radius: 5px;">
                  <i class="fas fa-tag"></i> 10% OFF
              </div>
              <p class="text"></p>
              <div class="d-flex align-items-center">
                  <span class="price">₹1,79,999/-</span>
              </div>
              <p style="text-align:center ;"><span class="period "> Half yearly</span></p>
              <h4 class="text-center text-white"><s>₹1,79,999</s></h4>
              <p></p>
              <ul class="item-list list-unstyled p-0 pricing-list">
                  <li><i class="fa fa-check" aria-hidden="true"></i> High conviction calls </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Alpha option call </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Directional Treads Nifty and bank Nifty option Tread </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Entry and exit level with Target and stop-loss </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 to 2 Trade Nifty and Bank Nifty </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Live Market customer support Available </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 Quality Stock option </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Get 1 & 2 Research Level of Finnifty Every week </li>
              </ul>
              <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="86">Get Started</a>
          </div>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing-item radius-lg  active mb-30">
              <div class="d-flex align-items-center">
                  <div class="icon"><i class="fas fa-gift iconpicker-component"></i></div>
                  <div class="label">
                      <h3> Yearly</h3>
                  </div>
              </div>
              <!-- Discount Icon -->
              <div class="discount-icon" style="position: absolute; top: 10px; right: 10px; background-color: #ff6347; color: white; padding: 5px 10px; border-radius: 5px;">
                  <i class="fas fa-tag"></i> 10% OFF
              </div>
              <p class="text"></p>
              <div class="d-flex align-items-center">
                  <span class="price">₹3,79,999/-</span>
              </div>
              <p style="text-align:center ;"><span class="period ">Yearly</span></p>
              <h4 class="text-center" style="color: white;"><s>₹3,79,999</s></h4>
              
              <p></p>
              <ul class="item-list list-unstyled p-0 pricing-list">
                  <li><i class="fa fa-check" aria-hidden="true"></i> High conviction calls </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Alpha option call </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Directional Treads Nifty and bank Nifty option Tread </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Entry and exit level with Target and stop-loss </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 to 2 Trade Nifty and Bank Nifty </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Live Market customer support Available </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> 1 Quality Stock option </li>
                  <li><i class="fa fa-check" aria-hidden="true"></i> Get 1 & 2 Research Level of Finnifty Every week </li>
              </ul>
              <a href="#" class="btn btn-outline btn-lg purchase-btn" title="Purchase" data-package="87">Get Started</a>
          </div>
      </div>
  </div>
</div>

<!-- Popup Login Form -->
<div id="loginPopup" class="container-fluid popup">
  <div class="container popup-content">
      <span class="close">&times;</span>
      <h2>Get Your Free Trial </h2>
      <form class="container-fluid" action="packages_processing.php" method="post">
        <div class="form-group">
           
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
           
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
       
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="form-group">
          
            <select id="state" name="state" class="form-control" required>
                <option value="" disabled selected>State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhan">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
            </select>
        </div>
        <div class="form-group">
           
            <select id="investment" name="investment" class="form-control" required>
                <option value="" disabled selected>Select your investment</option>
                <option value="below_1_lakh">Below ₹1 Lakh</option>
                <option value="1_to_5_lakh">₹1 Lakh - ₹5 Lakh</option>
                <option value="5_to_10_lakh">₹5 Lakh - ₹10 Lakh</option>
                <option value="10_to_25_lakh">₹10 Lakh - ₹25 Lakh</option>
                <option value="25_to_50_lakh">₹25 Lakh - ₹50 Lakh</option>
                <option value="above_1_crore">Above ₹1 Crore</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>



                                          </div>
          </div>
        </div>
      </div>
      <!-- Bg Shape -->
      
    </section>
    <!-- Pricing-area end -->
				</div>
			</div>
		</div>
	</section>
  <div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bank-details text-center">
                <h3>AU Small Finance Bank</h3>
                <p><i class="fas fa-user icon"></i>Account Holder: Quants Venture</p>
                <p><i class="fas fa-university icon"></i>Account Number: 2402251556434260</p>
                <p><i class="fas fa-code icon"></i>IFSC Code: AUBL0002515</p>
                <p><i class="fas fa-mobile-alt icon"></i>UPI ID: quantsventure2187@aubank</p>
            </div>
        </div>
    </div>
</div>
  <p></p>
    <footer class="section-padding-80 text-bg-dark">
        <div class="container">
            <div class="row gy-5 justify-content-center mb-5">
                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12">
                    <img src="assets/img/logo2-white.png" width="250" class="img-fluid d-block mx-auto shadow-sm">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-5">
                    <h4 class="fw-bold text-white mb-4">Quick Links</h4>
                    <div class="list-group">
                        <a href="./" class="list-group-item bg-transparent border-0 px-0 pt-0">Home</a>
                        <a href="wealth-management-services.html"
                            class="list-group-item bg-transparent border-0 px-0 pt-0">Wealth Management Services</a>
                        <a href="portfolio-management-services.html"
                            class="list-group-item bg-transparent border-0 px-0 pt-0">Portfolio Management Services</a>
                        <a href="contact-us.html" class="list-group-item bg-transparent border-0 px-0 pt-0">Contact Us</a>
                         <a href="Disclaimer.html" class="list-group-item bg-transparent border-0 px-0 pt-0">Disclaimer </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <h4 class="fw-bold text-white mb-4">Connect with us</h4>
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
                        <a href="mailto:support@quantsventure.com" class="list-group-item bg-transparent border-0 px-0 pt-0">
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
                    <div class="fw-medium text-center">Copyright&nbsp;<i class="bi bi-c-circle fs-6 me-1 align-middle"></i>
                        <span id="copy-year"></span>.
                        <b class="fw-bold">Quants Venture - Stock Broking</b>&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved.
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <h4 class="text-center text-white">Follow Us:</h4>
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

	<a href="https://wa.me/917045329073" target="_blank" id="whatsapp-icon" class="animate__animated animate__pulse animate__infinite animate__fast png-shadow">
        <img src="assets/img/whatsapp.png" class="img-fluid" width="50">
    </a>

	<a href="#" id="scroll-top" class="btn shadow border rounded-circle">
        <i class="bi bi-chevron-up fs-5"></i>
    </a>

    <!-- Modal -->
	<div class="modal fade" id="GetStartedModal" tabindex="-1" aria-labelledby="GetStartedModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header p-4">
					<h1 class="modal-title fs-3" id="GetStartedModalLabel">Contact Us.</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-5">
					<form class="form row gy-3" action="demo_processing.php" method="POST">
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
							<input type="text" name="fname" class="form-control bg-body-secondary border-0 rounded-0 shadow-sm" placeholder="Enter Full Name" required>
						</div>
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
							<input type="tel" name="mobile" class="form-control bg-body-secondary border-0 rounded-0 shadow-sm" placeholder="Enter Mobile" required>
						</div>
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
							<input type="email" name="email" class="form-control bg-body-secondary border-0 rounded-0 shadow-sm" placeholder="Enter Email" required>
						</div>
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
							<select name="state" class="form-select bg-body-secondary border-0 rounded-0 shadow-sm" required>
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
						<!--<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">-->
						<!--	<select name="segment" class="form-control bg-body-secondary border-0 rounded-0 shadow-sm" required>-->
						<!--	    <option value="">Segment</option>-->
						<!--	    <option value="Equity Cash / Intraday">Equity Cash / Intraday</option>-->
						<!--	    <option value="Option (Call - Put)">Option (Call - Put)</option>-->
						<!--	    <option value="Future (Derivatives)">Future (Derivatives)</option>-->
						<!--	    <option value="Index">Index</option>-->
						<!--	</select>-->
						<!--</div>-->
						<!--<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">-->
						<!--	<select name="investment" class="form-control bg-body-secondary border-0 rounded-0 shadow-sm" required>-->
						<!--	    <option value="">Investment</option>-->
						<!--	    <option value="Above Rs 50000">Above Rs 50000</option>-->
						<!--	    <option value="Above Rs 1 lac">Above Rs 1 lac</option>-->
						<!--	    <option value="Above 3 Lac">Above 3 Lac</option>-->
						<!--	    <option value="Above 5 Lac">Above 5 Lac</option>-->
						<!--	</select>-->
						<!--</div>-->
                      	<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <textarea name="msg" class="form-control bg-body-secondary border-0 rounded-0 shadow-sm" placeholder="Enter Message(Optional)"></textarea>
                        </div>
						<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
							<!--<div class="form-check">-->
							<!--	<input class="form-check-input border-1 rounded-0 shadow-sm" type="checkbox" value="" id="flexCheckDefault1" required>-->
							<!--	<label class="form-check-label" for="flexCheckDefault1">I accept <a href="#" class="text-danger">terms and conditions</a></label>-->
							<!--</div>-->
							<!--<p>Note: Expert Research alerts will be Provided only after successful acceptance of User Consent.</p>-->
							<button type="submit" name="demo" class="btn btn-dark text-shadow form-control rounded-pill shadow-sm text-uppercase">submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      // Get the popup
      var popup = document.getElementById('loginPopup');
    
      // Get the button that opens the popup
      var purchaseButtons = document.querySelectorAll('.purchase-btn');
    
      // Get the <span> element that closes the popup
      var span = document.getElementsByClassName('close')[0];
    
      // When the user clicks the button, open the popup
      purchaseButtons.forEach(button => {
        button.onclick = function(event) {
          event.preventDefault();
          popup.style.display = 'block';
        }
      });
    
      // When the user clicks on <span> (x), close the popup
      span.onclick = function() {
        popup.style.display = 'none';
      }
    
      // When the user clicks anywhere outside of the popup, close it
      window.onclick = function(event) {
        if (event.target == popup) {
          popup.style.display = 'none';
        }
      }
    });
    </script>
     <!-- Bootstrap JS and dependencies -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="assets/js/scripts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <script src="assets/js/script.js"></script>
</body>
</html>