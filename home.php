<?php
session_start();
if(!$_SESSION['usn'])
header('Location:index.php');
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
		<div class="container page">
		<div id="header">
		<div class="span2 pull-left">
		<img src="images/logo-small.png" />
		</div>
		<div class="span4 header-title">
		<h2>Feedback Form</h2>
		</div>
		<div class="span2 pull-right">
		<a href="logout.php">Logout</a>
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
      <td>1 - Extremely poor</td>
      <td>2 - Very poor</td>
	  <td>3 - Poor</td>
	  <td>4 - Below average</td>
	  <td>5 - Average</td>
    </tr>
	<tr>
      <td>6 - Satisfactory</td>
      <td>7 - Good</td>
	  <td>8 - Very good</td>
	  <td>9 - Great</td>
	  <td>10 - Excellent</td>
    </tr>
	
</table>
	  </div>	
	  </div>
	  <div class="row-fluid">
	  <div class="span12" style="margin-top:10px;">
	  <table class="table table-bordered">
	  <tr>
		<td colspan="5" style="text-align:center;font-weight:bold;">Assessment of Content (Please tick appropriate ranking)</td>
	  </tr>
<tr>
	<td>1.</td>
      <td>General impression about the content of the event</td>
      <td><select id="1">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>

	<tr>
	<td>2.</td>
      <td>How well did the content address your expectations?</td>
      <td><select id="2">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>3.</td>
      <td>How do you rate the quality of content presented?</td>
      <td><select id="3">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>4.</td>
      <td>How relevant was the content to your job?</td>
      <td><select id="4">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>5.</td>
      <td>How clear was the presentation of theory?</td>
      <td><select id="5">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>6.</td>
      <td>How relevant were the practical sections?</td>
      <td><select id="6">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
		  <tr>
		<td colspan="5" style="text-align:center;font-weight:bold;">
		Assessment of the Presenter/ Trainer
		</td>
	  </tr>
	
	<tr>
	<td>7.</td>
      <td>The presenter's ability to explain clearly was...</td>
      <td><select id="7">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>8.</td>
      <td>How flexible was the presenter to match your needs?</td>
      <td><select id="8">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>9.</td>
      <td>The presenter's knowledge of the subject matter...</td>
      <td><select id="9">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
	<tr>
	<td>10.</td>
      <td>How do your rate the presenter's ability to understand participants's questions and remarks?</td>
      <td><select id="10">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
		<tr>
	<td>11.</td>
      <td>How responsive was the trainer when prompted by participants to explain something or to help them?</td>
      <td><select id="11">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
			<tr>
	<td>12.</td>
      <td>How good was the presenter in practical demos of the subject matter?</td>
      <td><select id="12">
	   <option selected>-- Select --</option>
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 <option>6</option>
 <option>7</option>
 <option>8</option>
 <option>9</option>
 <option>10</option>
</select></td>
    </tr>
	
</table>
	  </div>	
	  <div class="span8 pull-left" style="margin-top:10px;text-align:center;">
	  <input type="button" class="btn btn-large" id="submit" value="Submit">
	  </div>
	  <div class="span3 pull-right final" style="margin-top:10px;">
	  Overall <span class="result">2.5</span>
	  </div>
	  </div>
</form>
  </body>
</html>
