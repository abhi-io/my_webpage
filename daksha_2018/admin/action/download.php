<?php
session_start();
if(($_SESSION['usertype']=="admin")||($_SESSION['usertype']=="list"))
{
?>	
<?php
define('DB_HOST','localhost');
define('DB_USER','daksha2018');
define('DB_PASS','lan#&$@19');
define('DB_NAME','daksha2018');
// Establish database connection.

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}



$sql1 = "SELECT DISTINCT event from  register ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);

if($query1->rowCount() > 0)
{
foreach($results1 as $result1)
{				
$Num= $result1->event;
echo $Num;

?>
<table border="1">
									<thead>
										<tr>
										<th>#</th>
											<th>Name</th>
											<th>Institution</th>
											<th>Mobile No</th>
											<th>Email</th>
											
										</tr>
									</thead>

<?php 
$filename="Participants list ";
$sql = "SELECT DISTINCT name,institution,mob,email from  register where event='$Num' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$complainNumber= $result->name.'</td> 
<td>'.	$MobileNumber= $result->institution.'</td> 
<td>'.$EmailId= $result->mob.'</td> 
<td>'.$Gender= $result->email.'</td> 		
</tr>  
';

			$cnt++;
			}
	}
?>
</table>
<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.doc");
header("Pragma: no-cache");
header("Expires: 0");
}
}
?>

<?php
}
else
{
	
	  header("location:../../pages/login.php");
}
?>