<?php
error_reporting(0);
$result = "";
$error = "";

if (isset($_POST["submit"])) {

      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
	
	if ($_POST['option']) {
		
		$selected_val = $_POST['option'];
	}
     
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }


      
     if (!empty($error)) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {

	     $headers = "From: info@youragencydomain.com" . "\r\n";
         $mailed = mail("info@youragencydomain.com", "Pricing for Marketing",

        "Option for pricing: ".$_POST['option']."\nName: ".$_POST['name']."\nEmail: ".$_POST['email']."\nPhone: ".$_POST['phone']."\nWebsite: ".$_POST['websiteurl']."\nYour City: ".$_POST['city'],$headers);


         if ($mailed) {

        $result='<div class="alert alert-success" align="center"> <strong> Thanks for contacting us</strong> - We\'ll get back to you shortly.</div>';
        } else {
                $error='<div class="alert alert-danger" align="center">Sorry, there was
                an error sending your message. Please try again later.</div>';
            }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="Dentist Marketing pricing options."/>
   
    <title>Dentist Marketing Pricing Options</title>
   

	   <!--CSS Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />

    <!--Font Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <!--Favicon -->
  <link rel="icon" href="images/dentist-marketing-favicon.jpg">


  </head>
  

  <body>
  
   <div class="container-fluid" id="banner">

    <div class="top-banner">
         
     <br>
       
       <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Free Website Analysis (worth $399)</h4>
      </div>
      <div class="modal-body">
       
    
        <p>We will go through your website and provide you with actionable advice to get more patients.</p>
        

          <form class="modal-form" method="post">
        <label>Website URL</label><input type="text" name="websiteurl" class="form-control" placeholder="eg. www.example.com" value="" />
        
        <br>
        
         <label>Email</label><input type="email" name="email" class="form-control" placeholder="We will send the report to this email address" value="" />
        
        <br>
        
        <label>Name</label><input type="text" name="name" class="form-control" placeholder="Your Name" value="" />
        
        <br>
                   
        <label>Contact</label><input type="number" name="phone" class="form-control" placeholder="Contact Number" value="" />
        
        <br>
                    
        <button type="submit" name="submit" class="btn btn-success modal-button">Continue</button>
        
        <br><br>


          </form>
        
      </div>
      
    </div>

  </div>
</div>
<!-- End of Modal -->
        
        
         
                 <div class="row">
                 
                 	<div class="col-xs-6">
                		 
                		 
                 		 <p class="top-cta"><a href="https://youragencydomain.com/contact.php">Request An Appointment</a> </p>
                 		
                 	</div>
                 	
                 	
                 	<div class="col-xs-6">
                		 
                		 <!-- Trigger/Open The Modal -->
                 		 <p class="top-cta" data-toggle="modal" data-target="#myModal" align="right"><a href="#">Free Website Analysis</a></p>
                 		
                 	</div>
                 	
                 	
                 	                	
                 </div>
                 
                 <br>
                 
                 
                  <div class="center-block" align="center">
                         
          
                            <a href="https://youragencydomain.com"><p class="logo-image" align="center">&nbsp;</p></a>

                       
                  
                             
    
                  </div>


    </div><!--top-banner-->

  </div><!--end of banner-->
  
  <nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">
  
           <div class="navbar-header">
      
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      
                      <span class="sr-only">Toggle navigation </span>
          
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
          
                 </button>
      
          </div>

    
          <div class="collapse navbar-collapse" align="center">
      
                   <ul class="nav navbar-nav">
          
                    <li> <a href="https://youragencydomain.com/marketing-solutions.php"><span class="center-underline">Marketing Solutions</span></a></li>
                     <li> <a href="https://youragencydomain.com/our-work.php"><span class="center-underline">Our Work</span></a></li>
                     <li> <a href="https://youragencydomain.com/blog.php"><span class="center-underline">Growth Tips</span></a></li>
                     <li> <a href="https://youragencydomain.com/about.php"><span class="center-underline">About Us</span></a></li>
                     <li> <a href="https://youragencydomain.com/contact.php"><span class="center-underline">Contact Us</span></a></li>
                     
              
              
                  </ul>
           </div>  

     
    </nav>
 

   <?php echo $result; ?>


  	<div class="pricing-background">
  	
  	
  	<div class="container question-responsive" align="center">
  	
  	<p class="wd-heading-question" align="center">Dentist Marketing Pricing Options</p>  
  	
		 </div>
		 
	  </div>

	  
	<br><br><br>
  
	  
	
	 <div class="container-fluid" align="center">
	  
	  <div style="max-width: 1000px">
	  	
	  	<div class="row">
	  	
	  	<div class="col-sm-6" style="max-width: 480px">
	  	
	  	<p class="pricing-name"><strong><span style="font-size: 18px"><u>Standard</u></span></strong></p>
	  	
	  	<br>
	  	
	  	<div style="max-width: 340px">
	  	
	  	<p align="center"><em><span style="font-size: 12px">For Dentists who already have a website and are only interested in effective online marketing</span></em></p>
	  	
	  	<br>
	  	
		</div>
	  	
	  	<br>
	  	
		<p>1999 <span class="per-month">pm</span></p>
	  	<p><span class="per-month"><strong>No once-off or hidden fees</strong></span></p>
	  	<br><br>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Advanced SEO</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Advanced AdWords Management & Reporting</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Online Advertisement Management & Reporting</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Ongoing Website Support (1 hour)</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Daily (weekday) Social Media Posts/Engagement</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>AB Testing & Landing Page Improvements</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Monthly ROI assessment</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>1 Detailed Blog Article Every Week (1,200+ words)</p>	 


	  	
	  	</div>
	  	

	  	
	  	<div class="col-sm-6" style="max-width: 480px">
	  	
	  	<p class="pricing-name"><strong><span style="font-size: 18px"><u>Premium</u></span></strong></p>
	  	
	  	<br>
	  	
	  	<div style="max-width: 340px">
	  	
	  	<p align="center"><em><span style="font-size: 12px">For Dentists who don't have a website and are interested in effective online marketing</span></em></p>
	  	
	  	<br>
	  	
		</div>
	  	
	  	<br>
	  	
	  	<p>2799 <span class="per-month">pm x 12</span></p>
	  	<p><span class="per-month"><strong>No once-off or hidden fees</strong></span></p>
	  	<br><br>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Conversion-centered Website Design</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Advanced SEO</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Advanced AdWords Management & Reporting</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Online Advertisement Management & Reporting</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Ongoing Website Support (1 hour)</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Daily (weekday) Social Media Posts/Engagement</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>AB Testing & Landing Page Improvements</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>Monthly ROI assessment</p>
	  	<p class="price-text"><span class="glyphicon glyphicon-ok price-glyph"></span>1 Detailed Blog Article Every Week (1,200+ words)</p>	  	
	  	
	  	
	  	</div>	  	
	  	
	  	</div>
	  	
	  	
	  	
	  	<br>
	  	
	  	
	  	

	  	<br><br>
	  	
	  			 </div></div>
	  	
	  	<div class="grey-background" align="center">
	  	
	  	<div style="max-width: 800px">
	  	
		  <p><strong><span style="font-size: 18px">Frequently Asked Questions</span></strong></p>
	  	
	  	<br>
	  	
	  	<div class="row">
	  	
	  	<div class="col-sm-6">
	  		
	  	<p class="faq-question"><strong>How long is the contract?</strong></p>
	  	
	  	<p><span style="font-size: 14px">The <em>Standard</em> option is month-to-month and the <em>Premium</em> option is for 12 months as it includes a conversion-centered website.</span></p>
	  		
	  	</div>
	  	
	  	<div class="col-sm-6">
	  		
	  	<p class="faq-question"><strong>What if I just want a website?</strong></p>
	  	
	  	<p><span style="font-size: 14px">Contact us and we can assist you with this. Remember, a website without targeted traffic is as good as a business without customers.</span></p>
	  		
	  	</div>
	  	
	  	</div>
	  	
	  	<br>	  		  	
	  		  		  		  		  	
	  	<div class="row">
	  	
	  	<div class="col-sm-6">
	  		
	  	<p class="faq-question"><strong>What if I have a higher budget?</strong></p>
	  	
	  	<p><span style="font-size: 14px">Contact us to discuss a custom plan that works for your practice to see better results.</span></p>
	  		
	  	</div>
	  	
	  	<div class="col-sm-6">
	  		
	  	<p class="faq-question"><strong>Do you have any cheaper options?</strong></p>
	  	
	  	<p><span style="font-size: 14px">Not at this moment. We are dedicated to growing your Dentist practice and this is the smallest budget needed to see long-term growth.</span></p>
	  		
	  	</div>
	  	
	  	</div>
  		  		  		  		  		  		  		  		  	
	 	</div>	  		  		  		  		  		  		  	
	  		  		  		  		  		  		  		  		  	
	  	<br><br>	  		  		  		  		  		  		  		  		  		  		  		  		  	
	  	
	  	
	  	<p><span style="font-size: 12px"><em>Have any additional questions? &nbsp;<a href="#" target="_blank">Contact us</a></em></span></p>
	  	
	  	<br>
	  	
		  <p><span style="font-size: 12px">(Pricing in USD)</span></p>
	  	
	  	
		</div></div>

	  	
	  	<br><br><br>
	  	
	  	<div class="container-fluid center-block" align="center" style="max-width: 500px">
	  	
	  
	  <div class="col-md-12" align="center">
	  	
	  	
	  <p align="center">Select the option you are interested in below and we will get back to you:</p>
	  
	  <br>



<form method="post" class="web-design-form">
<br />
        <form class="form-basic" method="post" action="#">

 
          
          <div align="center" class="form-group center-block">
                
              <select name="option" required class="form-control option" value="<?php echo $_POST['option']; ?>" />
              <option disabled selected>Marketing Option</option>
              <option value="Standard">Standard</option>
              <option value="Premium">Premium</option>
              </select>
               
              
                
            </div>
          
          
          
           <div align="center" class="form-group center-block">
              
            <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST['name']; ?>" />
                   
             
           </div> 
                                                                                                    

            <div align="center" class="form-group center-block">
               
                      <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" />
                      
                
            </div>

            <div align="center" class="form-group center-block">
                
                    <input type="tel" name="phone" class="form-control" placeholder="Contact Number" value="<?php echo $_POST['phone']; ?>" />
                    
                
            </div>



             <div align="center" class="form-group center-block">
                
                    <input type="text" name="city" class="form-control" placeholder="Your City" value="<?php echo $_POST['city']; ?>" />
                    
                
            </div><!--end city-->

                    <p align="center"><input type="submit" name="submit" class="btn btn-success btn-lg submit websitesubmit" value="Submit Form" /> </p><br /><br /><br />

        </form>
        
        </form>
        
			</div>

  	
  	</div>
	

  
   <div class="analysis-cta" align="center">
	 
	  	
	  	<br>
	  	
	  	<p class="analysis-heading text-padding" align="center">We focus on getting you more patients,<br>while you focus on running your practice</p>
	  	
	  	<br><br><br><br>
	  	
	  	
	  </div>
	  

  
  <footer>
  
  <div class="footer-links" align="center">
<a href="https://youragencydomain.com/marketing-solutions.php">Dentist Marketing Solutions</a>
<a href="https://youragencydomain.com/our-work.php">Our Work</a>
<a href="https://youragencydomain.com/blog.php">Growth Tips</a>
<a href="https://youragencydomain.com/pricing.php">Pricing</a>
<a href="https://youragencydomain.com/about.php">About Us</a>
<a href="https://youragencydomain.com/contact.php">Contact Us</a>



</div>



<div class="social-links" align="center">



<a href="https://linkedin.com" target="_blank"><svg  width="30" height="30" viewBox="0 0 24 24"><path fill="#BDBDBD" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>


<a href="https://www.facebook.com/youragencydomain/" target="_blank"><svg style="width:30px; height:30px" viewBox="0 0 24 24"><path fill="#BDBDBD"  d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" />
</svg></a>

</div> <!--end social-link-->


<div class="policy-links" align="center">

    <a href="https://youragencydomain.com/privacy-policy.php" rel="nofollow">Privacy Policy</a> &nbsp;&nbsp;&nbsp; 
    <a href="https://youragencydomain.com/terms.php" rel="nofollow">Terms &amp; Conditions</a> &nbsp;&nbsp;&nbsp; 


</div>

<br>


<p align="center" id="copyright">&copy; youragencydomain.com</p> 


</footer>



   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    

   <!--FIXED NAVBAR SCRIPT-->
     <script> $('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }   
}); </script>


  </body>

</html>