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
     
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }


      
     if (!empty($error)) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {

	     $headers = "From: info@youragencydomain.com" . "\r\n";
         $mailed = mail("info@youragencydomain.com", "Contact Message for Marketing",

                     "Name: ".$_POST['name']."
        Email: ".$_POST['email']."
        Phone: ".$_POST['phone']." 
        Website: ".$_POST['websiteurl']." 
        Your City: ".$_POST['city'],$headers);


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
   
    <meta name="description" content="Dentist Marketing: About Us. Find out more about our company and how we operate."/>
   
    <title>SEO for Dentist Practices</title>
    
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

                       
                  
                              <p class="tagline" align="center">SEO for Dentist Practices</p>
    
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
 
  	
  	
  	
  	 <div class="seo-background">
  	
  	
  	<div class="container question-responsive" align="center">
  	
  	<p class="wd-heading-question" align="center">SEO for Dentist Practices</p>  
  	
		 </div>
		 
	  </div>
	  
	<br>
	  
	
	 <div class="container-fluid" align="center">
	  
	  <div style="max-width: 700px">
	  	
	  	<br><br>
	  	
		  <p class="text-padding">Being in the top 3 positions on Google can often mean the difference between an overbooked Dentist Practice and one that is struggling to get more patients.</p>
		  
		  <br>
		  
		  <p>Through long-term SEO strategies and proven results, we help Dentists rank higher on Google to get more patients.</p>
	  	
	  	<br><br>
	  	
	  	
	  	<div class="row">
	  	
	  	<p><img class="img-responsive" src="images/local-seo-dentists.jpg" alt="local-seo-dentists" /></p>
	  	
	  	
	  	
	  	</div>
	  	
	  	<br><br>
	  	
	  	
		<p>SEO is not only limited to the common searches like "Dentist in [your city]".</p>
  	
  		<br>
  		
		  <p align="left">Overlooked SEO terms to rank for are:</p>
		  <p align="left">- "wisdom teeth removal"</p>
		  <p align="left">- "root canals"</p>
		  <p align="left">- "dentures"</p>
		  <p align="left">- "teeth whitening"</p>
		  <p align="left">and many others</p>
	  	
	  	<br><br>
	  	
	  	<p align="left">Effective SEO can result in a significant increase in patients which means higher profits for the Dentist partners.</p>
	  	
	  	<br><br>
	  	
	  	<h3 align="center">The Importance of SEO</h3>
	  	
	  	<p align="left">To understand the potential of SEO, if your Dentistry Practice ranks in the top 3 positions for "root canals [your city]" which receives over 200+ searches per month, your practice could easily receive a minimum of 2-3 patients every month.</p>
	  	
	  	<br>
	  	
	  	<p align="left">Even if we work on a small amount of $2,000 for a root canal x 2 patients = $4,000 per month and $48,000 extra per annum.</p>
  	
  		<br>
	  	
	  	<p align="left">It's important to note that this is a minor example. Effective SEO bundled with various <a href="https://youragencydomain.com/marketing-solutions.html" target="_blank">marketing strategies</a> can yield significantly higher returns.</p>
	  	
	  	
		 </div></div>

	  	
	  	<br><br>
	  	
	  
	  <div class="container-fluid"  style="max-width: 900px">
	  
	  <h3 align="center">How We Grow Your Practice With SEO:</h3>
	  
	  <br><br>
	  	
	  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/keyword-analysis.png" alt="keyword-analysis" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Keyword Analysis</strong></p>
			<p class="ppc-text" align="left">Investigating keyword searches that have the highest potential for converting into patients.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/title-change.png" alt="title-change" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Title Optimization</strong></p>
			<p class="ppc-text" align="left">Relevant use of title tags focused on ideal searches.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	 
	  	
	  		  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/keyword-url.png" alt="keyword-url" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Keyword-Rich URLs</strong></p>
			<p class="ppc-text" align="left">Optimizing of the URL website structure.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/conversion-copy-writing.png" alt="conversion-copy-writing" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>SEO Content Writing</strong></p>
			<p class="ppc-text" align="left">Targeted SEO content creation for Google to understand better.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	  
	  	
	  		  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/internal-links.png" alt="internal-links" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Internal Linking</strong></p>
			<p class="ppc-text" align="left">Search engines look for roadmaps in your website which is provided by an effective inter-linking structure.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/link-building.png" alt="link-building" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Link Building</strong></p>
			<p class="ppc-text" align="left">Strategic links to your Dentist Practice will help it rank on Google.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	  		  		  <div class="row">
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/local-seo.png" alt="local-seo" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Local SEO</strong></p>
			<p class="ppc-text" align="left">Rank in Google Maps, Google Business, local listings and other effective platforms.</p>
	  		
	  	</div>
	  		
	  	<div class="col-sm-2" align="center">
	  		
	  		<img class="img-responsive ppc-icons" src="images/press-release.png" alt="press-release" />
	  		
	  	</div>
			  	 
	  	<div class="col-sm-4">
	  		
	  		<p align="left"><strong>Press Releases</strong></p>
			<p class="ppc-text" align="left">Press releases assist with brand awareness, promotions and link building.</p>
	  		
	  	</div>  		
	  		
	  	</div>
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	
	  	</div>
	  	
	  	
	  	<br><br><br><br><br>
	  	
	  	<div class="container-fluid center-block" align="center" style="max-width: 900px">
	  	
	  
	  <div class="col-md-6" align="center">
	  	
	  	
	  <p align="center"><strong>If you don't have a website</strong>, complete this short form and we will get back to you:</p>
	  
	  <br>



<form method="post" class="web-design-form">
<br />

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
        
	</div>

	  	
	  <div class="col-md-6" align="center">
	  	
	  	
	  <p align="center"><strong>If you have a website</strong>, get a free marketing analysis worth $399 (<em>done by people - not software</em>):</p>
	  
	  <!-- Trigger/Open The Modal -->
        <p class="feedback-cta free-analysis" data-toggle="modal" data-target="#myModal"><a href="#">Get My Free Website Analysis</a></p>
	
  
  	
  	</div>
  	
  	</div>
	
	<br>
	<br>
	<br>
	

  
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