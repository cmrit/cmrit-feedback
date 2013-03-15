<?php
session_start();
if(isset($_SESSION['usn']))
  unset($_SESSION['usn']);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="js/bootstrap.js"></script>
  </head>

  <body>
		<div class="form-signin">
		<div class="alert alert-error msg" id="invalid-alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Invalid USN!!! Try Again!!</strong>
</div>
      <form id="f1" action="checklogin.php" method="post">
        <h2 class="form-signin-heading">Enter your USN</h2>
        <input type="text" class="input-block-level" placeholder="USN" id="usn" name="usn">
        <input type="button" class="btn btn-large" id="usn-check" value="Log in">
      </form>

    </div>
	<script>
	$(document).ready(function()
{
$("#usn-check").click(function()
{
	var usn=$("#usn").val();
	if((usn.match(/[1-4][a-zA-Z]{2}[0-9]{2}[a-zA-Z]{3}[0-9]{2}/)) || (usn.match(/[1-4][a-zA-Z]{2}[0-9]{2}[a-zA-Z]{2}[0-9]{3}/)))
	{
		$('#f1').submit();
	//var url="home.php?usn="+usn;
	//window.location=url;
		}
		else
		$("#invalid-alert").removeClass("msg");
});

});
	</script>
  </body>
</html>
