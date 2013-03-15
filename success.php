<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="feedback_db"; // Database name
$tbl_name="feedback"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");

$usn=$_SESSION['usn'];
$topic=$_POST['topic'];
$presenter=$_POST['presenter'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];

$avg = (intval($_POST['q1'])+intval($_POST['q2'])+intval($_POST['q3'])+intval($_POST['q4'])+intval($_POST['q5'])+intval($_POST['q6'])+intval($_POST['q7'])+intval($_POST['q8'])+intval($_POST['q9'])+intval($_POST['q10'])+intval($_POST['q11'])+intval($_POST['q12']))/12;
print $avg;
$sql="INSERT INTO $tbl_name VALUES('$usn', '$topic', '$presenter', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$avg')";
$result=mysql_query($sql);

//$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
//$result=mysql_query($sql);

mysql_close();

?>
<script>
alert("thank you");
</script>
<?php
header('Location:index.php');
?>