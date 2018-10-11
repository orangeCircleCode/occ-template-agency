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

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Privacy Policy for Dentist Marketing</title>

      <!--CSS Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/navbar.css" />
  <link rel="stylesheet" type="text/css" href="css/blog-post-styling.css" />

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
  
  <br><br>

  

  <div class="jumbotron blogtext blog-content">

      <div class="row">

          <div class="col-md-8 col-md-offset-2">





              <h2 align="center">Privacy Policy</h2><br />

<p>The following Privacy Policy governs the online information collection practices of www.youragencydomain.com&nbsp;(&ldquo;we&rdquo; or &ldquo;us&rdquo; or &ldquo;Site&rdquo;). By visiting and using the Site, you agree that your use of our Site, and any dispute over privacy, is governed by this Privacy Policy.</p>

<p>This Site strives to offer its visitors the many advantages of Internet technology and to provide an interactive and personalized experience. We may use Personally Identifiable Information (your name and/or e-mail address) subject to the terms of this privacy policy.</p>
<p>We may collect and store personal or other information that you voluntarily supply to us online while using the Site (e.g., while on the Site or in responding via email to a feature provided on the Site). This Site only contacts individuals who specifically request that we do so or in the event that they have signed up to one of our products.</p>

<p>This Site collects personally identifying information from our users during online registration and online purchasing. All of this information is provided to us by you.</p>

<p>We also collect and store information that is generated automatically as you navigate online through the Site. For example, we may collect information about your computer&rsquo;s connection to the Internet, which allows us, among other things, to improve the delivery of our web pages to you and to measure traffic on the Site. We also may use a standard feature found in browser software called a &ldquo;cookie&rdquo; to enhance your experience with the Site.</p>

<p>Cookies are small files that your web browser places on your hard drive for record-keeping purposes. By showing how and when visitors use the Site, cookies help us deliver advertisements, identify how many unique users visit us, and track user trends and patterns.</p>

<p>The Site also includes links to websites we endorse or sponsor and provides access to products and services offered by third parties, whose privacy policies we do not control. Some of the links we provide are &ldquo;affiliate links.&rdquo; This means if you click on the link and purchase the item connected to that link, we will receive an affiliate commission.</p>

<p>When you access another website or purchase third-party products or services through the Site, use of any information you provide is governed by the privacy policy of the operator of the site you are visiting or the provider of such products or services.</p>
<p>We may also make some content, products and services available through our Site through cooperative relationships with third-party providers, where the brands of our provider partner appear on the Site in connection with such content, products and/or services.</p>

<p>We may share with our provider partner any information you provide, or that is collected, in the course of visiting any pages that are made available in cooperation with our provider partner. In some cases, the provider partner may collect information from you directly, in which cases the privacy policy of our provider partner may apply to the provider partner&rsquo;s use of your information.</p>

<p>The privacy policy of our provider partners may differ from ours. If you have any questions regarding the privacy policy of one of our provider partners, you should contact the provider partner directly for more information.</p>

<p>Your information is stored at the list server that delivers this Site&rsquo;s newsletters. Your information can only be accessed by those who help manage those lists in order to deliver e-mail to those who would like to receive this Site&rsquo;s newsletters. All of the newsletters that are sent to you by this Site include an unsubscribe link in them.</p>

<p>You can remove yourself at any time from our newsletters or mailing list by clicking on the unsubscribe link that can be found in every communication that we send you.</p>

 



        </div><!--end col-md-8-->



      </div><!--end row-->

  

 
 <br><br><br><br>
 
 </div>
 



  <div class="footer-cta" align="center">
 
  
  <div class="col-sm-6">
  	
  	<!-- Trigger/Open The Modal -->
  	<p class="footer-buttons" data-toggle="modal" data-target="#myModal"><a href="#">Get A Free Website Analysis</a></p>
  	
  </div>
  
  <div class="col-sm-6" align="center">
  	
  	<p class="footer-buttons"><a href="https://youragencydomain.com/contact.php">Request An Appointment</a></p>
  	
  </div>
  	
  	
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