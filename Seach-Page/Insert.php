<html>
<body>
<?php

$con = mysqli_connect("localhost", "root", "","company_master");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$a=$_POST['H'];
 

$sql="INSERT INTO $a (
Code
,Name
,Status
,Class
,Category
,Sub_Category 
,Date
,Registered_State
,Authorized_Capital
,Paidup_Capital
,Industrial_Class
,Activity
,Office_Address
,ROC
,EMail
,Annual_Return
,Financial_Statement
)
VALUES
('".$_POST['A']."','".$_POST['B']."','".$_POST['C']."','".$_POST['D']."','".$_POST['E']."','".$_POST['F']."','".$_POST['G']."','".$_POST['H']."','".$_POST['I']."','".$_POST['J']."','".$_POST['K']."','".$_POST['L']."','".$_POST['M']."','".$_POST['N']."','".$_POST['O']."','".$_POST['P']."','".$_POST['Q']."')";
echo $sql;
mysqli_query($con,$sql);
if (!mysqli_query($con,$sql))
  {
  die('Error:' . mysqli_error($con));
  }
   mysqli_error($con);
header("Refresh: 2; url= http://localhost/index.php");
print '1 record updated';/* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?><center><form action="index.php"><br><br>
    <input type="submit" value="Home Page">
    </center></form>

</body>

</html>
