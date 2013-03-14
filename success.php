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
$q1=intval($_POST['q1']);
$q2=intval($_POST['q2']);
$q3=intval($_POST['q3']);
$q4=intval($_POST['q4']);
$q5=intval($_POST['q5']);
$q6=intval($_POST['q6']);
$q7=intval($_POST['q7']);
$q8=intval($_POST['q8']);
$q9=intval($_POST['q9']);
$q10=intval($_POST['q10']);
$q11=intval($_POST['q11']);
$q12=intval($_POST['q12']);

$avg = ($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12)/12;

$sql="INSERT INTO $tbl_name VALUES('$usn', '$topic', '$presenter', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$avg')";
$result=mysql_query($sql);

mysql_close();

?>
<script>
alert("thank you");
</script>
<?php
header('Location:index.php');
?>