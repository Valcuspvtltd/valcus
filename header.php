<?php
if(isset ($_POST['submit']))
{

	if ( $_POST['telephone'] == "" ||$_POST['emailaddress'] == "") 
	{
		echo "<script language='javascript'>alert('Email and Mobile Number are required');
		window.location.href='index.php';
		</script>";
	} 
	else 
	{
		@extract($_POST);
		$to = "valcuspvtltd@gmail.com";
		$subject = "Valcus Website Enquiry";
		$txt = "Name : " . $sendername . "\r\n";
		$txt .= "Contact Number : " . $telephone . "\r\n";
		$txt .= "Address : " . $emailaddress . "\r\n";
		$txt .= "Enquiry Topic : " . $select . "\r\n";
		$txt .= "Message : " . $sendermessage;
      
		$mail= mail($to,$subject,$txt);
    
		if($mail){
		echo "<script language='javascript'>alert('Your Enquiry Submitted sucessfully and This mail should be responded within 12 hours.');
		window.location.href='index.php';
		</script>";
 		}
 	}
}
?>

<?php
if(isset ($_POST['register']))
{

	if ($_POST['emailaddress'] == "") 
	{
		echo "<script language='javascript'>alert('Email required');
		window.location.href='index.php';
		</script>";
	} 
	else 
	{
		@extract($_POST);
		$to = "valcuspvtltd@gmail.com";
		$subject = "Valcus Website Enquiry";
		$txt = "Name : " . $sendername . "\r\n";
		$txt .= "Contact Number : " . $telephone . "\r\n";
		$txt .= "Address : " . $emailaddress . "\r\n";
		$txt .= "Enquiry Topic : " . $select . "\r\n";
		$txt .= "Message : " . $sendermessage;
      
		$mail= mail($to,$subject,$txt);
    
		if($mail){
		echo "<script language='javascript'>alert('Your Enquiry Submitted sucessfully and This mail should be responded within 12 hours.');
		window.location.href='index.php';
		</script>";
 		}
 	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"  content="IE=edge">
<title> <?php echo $title; ?></title>
<meta name="keywords" content="Valcus: GST, GST Registration, Accounting, Registration" />
<meta name="description" content="Valcus is one of the best accounting firm in the India that provides various accounting and financial services to its valuable customers">
<meta name="author" content="valcus">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon --> 
<link rel="shortcut icon" href="images/fav.png">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

<!-- Google fonts  -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 


<!-- Template's stylesheets -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="css/theme-default.css" type="text/css">
<link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="css/corporate.css" type="text/css">
<link rel="stylesheet" href="css/shortcodes.css" type="text/css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/navigation.css">
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
<link href="js/accordion/css/smk-accordion.css" rel="stylesheet">
<link rel="stylesheet" href="js/ytplayer/ytplayer.css" />
<link href="js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="js/jFlickrFeed/style.css" />
<link rel="stylesheet" href="js/parallax/main.css">
<link rel='stylesheet' type='text/css' href='js/offcanvas/offcanvas.css' />
<link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css">
<link rel="stylesheet" href="js/popup/novicell.css">
<link rel="stylesheet" href="js/popup/popup.css">
<!-- Template's stylesheets END -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->
<link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">
<link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">
<link rel="stylesheet/less" type="text/css" href="less/skin.less">
<!-- Style Customizer's stylesheets END -->

<link rel="stylesheet" type="text/css" href="css/custom.css">

<!-- Skin stylesheet -->

</head>


<body>

<div class="wrapper-boxed">
  <div class="site-wrapper">
  
  <div class="topbar light topbar-padding">
      <div class="container">
      <div class="row nopadding">
	  
        <div class="topbar-left-items">
          <ul class="toplist toppadding pull-left paddtop1 roboto">
            <li class="rightl"><i class="fa fa-phone"></i>&nbsp; <a href="tel:9999761122">9999761122</a>&nbsp;&nbsp;</li>
            <li class="rightl"><i class="fa fa-envelope"></i>&nbsp; <a href="mailto:valcuspvtltd@gmail.com">valcuspvtltd@gmail.com</a></li>
          </ul>
	  </div>
        <!--end left-->
        
        <div class="topbar-right-items pull-right">
          <ul class="toplist toppadding">
            <li><a target="_blank" href="https://www.facebook.com/valcusprivatelimited/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/valcuspvtltd"><i class="fa fa-twitter"></i></a></li>
            <li class="last"><a href="https://www.linkedin.com/in/valcus-pvt-ltd-15578817b/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div><!-- end top bar -->
  
    <div class="col-md-12 nopadding">
      <div class="header-section white style1 links-dark pin-style">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="index.php" title="" class="logo style-2 mar-4"> <img src="images/logo/logo.png" alt=""> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                  <ul class="nav navbar-nav top-nav">
                    <li class="search-parent"> <a href="javascript:void(0)" title="" class="m-link"><i aria-hidden="true" class="fa fa-search"></i></a>
                      <div class="search-box ">
                        <div class="content">
                          <div class="form-control">
                            <input type="text" placeholder="Type to search" />
                            <a href="#" class="search-btn mar-2"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                          <a href="#" class="close-btn mar-1">x</a> </div>
                      </div>
                    </li>
                    <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                  </ul>
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
                    
                      <li class="active"> <a href="start-a-business.php" class="m-link">START A BUSINESS</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                          <li> <a href="company-registration.php" class="linkcaps">COMPANY REGISTRATION <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="proprietorship.php">Proprietorship</a> </li>
                              <li> <a href="partnership.php">Partnership</a> </li>
                              <li> <a href="limited-liability-partnership.php">Limited Liability Partnership</a> </li>
                              <li> <a href="one-person-company.php">One Person Company</a> </li>
                              <li> <a href="private-limited-company.php">Private Limited Company</a> </li>
                            </ul>
                          </li>
                          <li> <a href="ngo-registration.php" class="linkcaps">NGO REGISTRATION <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="trust-registration.php">Trust Registration</a> </li>
                              <li> <a href="society-registration.php">Society Registration</a> </li>
                              <li> <a href="section-8-company.php">Section 8 Company</a> </li>
                              <li> <a href="niti-aayog-registration.php">Niti Aayog Registration</a> </li>
                              
                              <li> <a href="12ARegistration.php">12A Registration</a> </li>
                              <li> <a href="80GRegistration.php">80G Registration</a> </li>
                              <li> <a href="FCRARegistration.php">FCRA Registration</a> </li>
                            </ul>
                          </li>
                         
                        </ul>
                      </li>
                      <li> <a href="licenses.php" class="m-link">LICENSES</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                          <li> <a href="mandatory-registration.php" class="linkcaps">MANDATORY REGISTRATION <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="msme-registration.php">MSME Registration</a> </li>
                              <li> <a href="shops-establishment-registration.php">Shops & Establishment Registration</a> </li>
                              <li> <a href="professional-tax-registration.php">Professional Tax Registration</a> </li>
                              <li> <a href="trade-license.php">Trade License</a> </li>
                            </ul>
                          </li>
                          <li> <a href="need-based-registrations-licenses.php" class="linkcaps">NEED BASED REGISTRATIONS & LICENSES <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="import-export-code.php">Import Export Code (IEC)</a> </li>
                              <li> <a href="drug-license.php">Drug License</a> </li>
                              <li> <a href="fssai.php">FSSAI (Food License)</a> </li>
                              <li> <a href="barcode-registration.php">BarCode Registration</a> </li>
                            </ul>
                          </li>
                          <li> <a href="other.php" class="linkcaps">OTHER<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="private-security-license.php">Private Security License(PSARA)</a> </li>
                              <li> <a href="apeda-registration.php">APEDA Registration</a> </li>
                              <li> <a href="provident-fund-registration.php">Provident Fund Registration</a> </li> 
							  <li> <a href="esic-registration.php">ESIC Registration</a> </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    
                      <li class="right"> <a href="income-tax-gst.php" class="m-link">INCOME TAX & GST</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                          <li> <a href="income-tax.php" class="linkcaps">INCOME TAX <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="income-tax-return-filing.php">Income Tax Return Filing</a> </li>
                              <li> <a href="tds-return-filing.php">TDS Return Filing</a> </li>
                              <li> <a href="advance-payment-of-income-tax.php">Advance Payment of Income Tax</a> </li>
							  <li> <a href="tax-assessment-representation.php">Tax Assessment & Representation</a> </li>
							  <li> <a href="tax-audit-under-income-tax.php">Tax Audit Under Income Tax</a> </li>
                            </ul>
                          </li>
                          <li> <a href="gst.php" class="linkcaps">GST <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>
                            <ul>
                              <li> <a href="gst-registration.php">GST Registration</a> </li>
                              <li> <a href="gst-return-compliance.php">GST Return & Compliance</a> </li>
                              <li> <a href="gst-invoice-e-way-bill.php">GST Invoice & E Way Bill</a> </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
					  
                       <li class="right"> <a href="trademark-patent.php" class="m-link">TRADEMARK / PATENT</a> <span class="arrow"></span>
                        <ul class="dm-align-2">
                          <li> <a href="trademark-registration.php" class="linkcaps">Trademark Registration </a> </li>
                          <li> <a href="patent-registration.php" class="linkcaps">Patent Registration</a></li>
						  <li> <a href="copyright-registration.php" class="linkcaps">Copyright Registration</a> </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
      
    </div>
    <!--end menu-->
    
    <div class="clearfix"></div>
	
	
	<div class="icon-bar">
	  <a href="https://api.whatsapp.com/send?phone=919999761122" class="whatsapp" target="_blank"><i class="fa fa-whatsapp"></i></a>
	  <a href="tel:9999761122" class="phone" target="_blank"><i class="fa fa-phone"></i></a>
    </div>
	
	<script>

	var r_mo=/^(0|91|\+91)?([0-9]{10})$/;

	function one()
	{
		var mo=document.getElementById('telephone').value;
		 
		if(!mo.match(r_mo))
		{
			document.getElementById('pmsg').innerHTML="Type proper Mobile Number";
			document.getElementById('telephone').focus();
			return false;
		}
		else{
			return true;
		}
		
	$("#telephone").keydown(function(event) {
	  k = event.which;
	  if ((k >= 96 && k <= 105) || k == 8) {
		if ($(this).val().length == 10) {
		  if (k == 8) {
			return true;
		  } else {
			event.preventDefault();
			return false;

		  }
		}
	  } else {
		event.preventDefault();
		return false;
	  }

	});
	}

	</script>