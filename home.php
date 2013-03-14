<!DOCTYPE html>
<?php
$usn=$_GET['usn'];
if($usn=='')
header( 'Location: index.php' ) ;
else
echo $usn;
?>
<html>
  <head>
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="js/bootstrap.js"></script>
  </head>

  <body>
		<div class="container page">
		<div id="header">
		<div class="pull-left">
		<img src="images/logo-small.png" />
		</div>
		<div class="span4 header-title">
		<h2>Feedback Form</h2>
		</div>
		</div>
		<hr />
		<div class="row-fluid">
		<div class="span4">
		<form>

          <label class="control-label" for="topic"><i class="icon-user"></i> Topic</label>
          <input type="text" class="input-xlarge" id="topic" placeholder="Topic">

		
            <label class="control-label" for="presenter"><i class="icon-user"></i> Presenter</label>
			<input type="text" class="input-xlarge" id="presenter" placeholder="Presenter">	  
	  </div>
	  
	  <div class="span8" style="margin-top:10px;">
	  <table class="table table-bordered">
	  <tr>
		<td colspan="5" style="text-align:center;font-weight:bold;">***Rating***</td>
	  </tr>
<tr>
      <td>1 - Good</td>
      <td>2 - Good</td>
	  <td>3 - Good</td>
	  <td>4 - Good</td>
	  <td>5 - Good</td>
    </tr>
	<tr>
      <td>6 - Good</td>
      <td>7 - Good</td>
	  <td>8 - Good</td>
	  <td>9 - Good</td>
	  <td>10 - Good</td>
    </tr>
	
</table>
	  </div>	
	  </div>
	  <div class="row-fluid">
	  <div class="span12" style="margin-top:10px;">
	  <table class="table table-bordered">
	  <tr>
		<td colspan="5" style="text-align:center;font-weight:bold;">***Rating***</td>
	  </tr>
<tr>
	<td>1.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="1">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>

	<tr>
	<td>2.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="2">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>3.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="3">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>4.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="4">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>5.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="5">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>6.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="6">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>7.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="7">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>8.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="8">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>9.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="9">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
	<tr>
	<td>10.</td>
      <td>p is a pointer to a "constant integer". But we tried to change the value of the "constant integer".</td>
      <td><select id="10">
	   <option selected>-- Select --</option>
 <option>1 - Good</option>
 <option>2 - Good</option>
 <option>3 - Good</option>
 <option>4 - Good</option>
 <option>5 - Good</option>
 <option>6 - Good</option>
 <option>7 - Good</option>
 <option>8 - Good</option>
 <option>9 - Good</option>
 <option>10 - Good</option>
</select></td>
    </tr>
	
</table>
	  </div>	
	  </div>

  </body>
</html>
