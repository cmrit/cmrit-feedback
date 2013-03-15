<?php
session_start();
if(!$_SESSION['usn'])
header('Location:index.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>HomePage</title>
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
		<form id="f2" action="success.php" method="post">
		<div class="row-fluid">
		<div class="span4">
		

          <label class="control-label" for="topic"><i class="icon-book"></i> Topic</label>
          <input type="text" class="input-xlarge" id="topic" name="topic" placeholder="Topic">

		
            <label class="control-label" for="presenter"><i class="icon-user"></i> Presenter</label>
			<input type="text" class="input-xlarge" id="presenter" name="presenter" placeholder="Presenter">	  
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
      <td><select id="q1" name="q1" class="quest">
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
      <td><select id="q2" name="q2" class="quest">
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
      <td><select id="q3" name="q3" class="quest">
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
      <td><select id="q4" name="q4" class="quest">
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
      <td><select id="q5" name="q5" class="quest">
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
      <td><select id="q6" name="q6" class="quest">
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
      <td><select id="q7" name="q7" class="quest">
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
      <td><select id="q8" name="q8" class="quest">
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
      <td><select id="q9" name="q9" class="quest">
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
      <td><select id="q10" name="q10" class="quest">
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
      <td><select id="q11" name="q11" class="quest">
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
      <td><select id="q12" name="q12" class="quest">
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
	  <input type="button" class="btn btn-large disabled" id="submit-btn" value="Submit">
	  </div>
	  <div class="span3 pull-right final" style="margin-top:10px;">
	  Overall <span class="result">NaN</span>
	  </div>
	  </div>
</form>
<script>
	$(document).ready(function()
{
	$(".quest").change(function()
	{
		if($("#q1").val() == "-- Select --"  || $("#q2").val()=="-- Select --" || $("#q3").val()=="-- Select --" || $("#q4").val()=="-- Select --" || $("#q5").val()=="-- Select --" || $("#q6").val()=="-- Select --" || $("#q7").val()=="-- Select --" || $("#q8").val()=="-- Select --" || $("#q9").val()=="-- Select --" || $("#q10").val()=="-- Select --" || $("#q11").val()=="-- Select --" || $("#q12").val()=="-- Select --")
			{
			$(".result").text("NaN");
			$("#submit-btn").addClass("disabled");
			}
			else
			{
				var r = (parseInt($("#q1").val())+parseInt($("#q2").val())+parseInt($("#q3").val())+parseInt($("#q4").val())+parseInt($("#q5").val())+parseInt($("#q6").val())+parseInt($("#q7").val())+parseInt($("#q8").val())+parseInt($("#q9").val())+parseInt($("#q10").val())+parseInt($("#q11").val())+parseInt($("#q12").val()))/12;
				
				$(".result").text(r.toFixed(2));
				$("#submit-btn").removeClass("disabled");
			}

	});
	
	$("#submit-btn").click(function()
	{
		
		$("#f2").submit();
	});
			
});
</script>
  </body>
</html>
