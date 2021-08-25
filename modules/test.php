
<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="curlPHP.PHP" class = "recatchaForm" method="POST">
      <div name ="recatchaCheck" class="g-recaptcha" data-sitekey="6Leb7CEcAAAAACMqTQ0D2_A-iKOPc3pKvT5QnfrN"></div>
      <br/>
      <input name ="submit" type="submit" value="submit">
    </form>
    <!-- <script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>  -->
    <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> -->
  </body>
</html>
<?php
// if(isset($_POST['submit'])){
//   $respCap= $_POST['recatchaCheck'];

// // include "curlPHP.php";
// }
// $asd = html_entity_decode($_POST['recatchaCheck'], ENT_QUOTES);
// echo $asd;
?>
