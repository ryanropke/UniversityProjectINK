<html lang="en"><!--default language of the document content -->
	
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--character encoding for the document (Unicode) -->
		<title>Contact Form Message</title><!--web page title -->
		<link rel="icon" type="image/ico" href="Images/favicon.jpeg">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/tnormalize.css" rel="stylesheet ">
		<link href="css/tstylesheet.css" rel="stylesheet /">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Rock+Salt&display=swap" rel="stylesheet">
		
	<!--	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-82838bb8-a226-4279-82f4-6265e0be0278"></div> -->
	</head>

<body>
      <a href="https://rr335.brighton.domains/projectink/index.html">
        <img src="Images/pink.png" alt="Logo"  class="center" class="banner-fluid" />
        </a>
    
<!--Markup all web page content inside the 'body' tags -->
	<div id="wrapper">
	<!--The 'wrapper' contains all the page content-->
	
    <header><!--The main heading for the page -->
  
	</header>
	<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="index.html">Home</a>
    <a href="tdesigns.html">Tattoo Designs</a>
    <a href="canvaspage.html">Canvas</a>
    <a href="faq.html">FAQs</a>
    <a href="tattooist.html">Find Your Tattooist</a>
<a href="tandc.html">Terms & Conditions</a>
<a href="contact.html">Contact Us</a>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->
<div class="header11">
<span onclick="openNav()"><img src="Images/menu.png" alt="menu" style="width:30px;height:30px;"
    ></span> <h2>Contact Form Message</h2></div>
	
<script>
    /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>	
	
	
	
	
	 <main><!--The main page content -->
        
        
        <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ry1998@hotmail.co.uk";
    $email_subject = "Contact Form Response";
 
    function died($error) {
        // your error code can go here
        echo "There were error(s) found within the form you submitted. ";
        echo "These errors are as followed:<br /><br />";
        echo $error."<br /><br />";
        echo "Please return to the form to correct the errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered is invalid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered is invalid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered is invalid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered are invalid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for filling in the contact form.<br/> <br/>We will be in touch with you very soon. 
<br/>
<br/> 
In the mean time, why not check us out on Instagram and Twitter using the buttons below?
<br/>
<br/> 
<?php
 
}
?>

<!--https://www.freecontactform.com/email_form.php -->
        
        
        
        	
	
    
    </main><!--Close main page content --> 
        
    
        
 
  
	<footer><!--Footer content -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<a href="https://www.instagram.com/project__ink/" class="fa fa-instagram"></a>
<a href="https://twitter.com/project__ink" class="fa fa-twitter"></a>

		<small>&copy; Ry Ropke, University of Brighton, 2020.</small>
		<br/>
		<br/>
	</footer>

	</div><!--Close 'wrapper' div -->
</body><!--Close 'body' -->
</html><!--Close 'html' -->
