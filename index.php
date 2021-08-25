<?php session_start(); 
// include_once 'securimage/securimage.php';

// $securimage = new Securimage();

// if(isset($_POST['captcha_code'])){
// if ($securimage->check($_POST['captcha_code']) == false) {
  
//     // the code was incorrect
  
//     // you should handle the error so that the form processor doesn't continue
  
   
  
//     // or you can use the following code if there is no validation or you do not know how
  
//     echo "The security code entered was incorrect.<br /><br />";
  
//     echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
  
//     exit;
  
//   }
// }

  
?>

<html>
    <head>    
        <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
    <body>
      <div class = "container">
      <form action="" method="POST">
<!-- <form action="mail.php" method="POST"> -->
<div class="mb-3">
  <label for="fullNameLabel" class="form-label">Name</label>
  <input name = "fullName" type="text" class="form-control" id="fullName" placeholder="Full Name">
    </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="contactLabel" class="form-label">Contact no.</label>
  <input name = "contact" type="text" class="form-control" id="contact" placeholder="Conatact no.">
    </div>
    <div class="mb-3">
  <label for="mssgLabel" class="form-label">Message</label>
  <input name = "mssg" type="text" class="form-control" id="mssg" placeholder="Message here">
    </div>
  
    <!-- <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
    <input type="text" name="captcha_code" size="10" maxlength="6" />
<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a> -->

<div class="g-recaptcha" data-sitekey="6Leb7CEcAAAAACMqTQ0D2_A-iKOPc3pKvT5QnfrN"></div>
      <br/>

  
  <button name = "submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- 
<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> -->
</body>