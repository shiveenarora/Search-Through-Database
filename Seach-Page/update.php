<html>
<body>
<?php

$con = mysqli_connect("localhost", "root", "","company_master");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$a=$_POST['H'];
$b=$_POST['A'];

 

$sql="UPDATE $a SET

Name='".$_POST['B']."'
,Status='".$_POST['C']."'
,Class='".$_POST['D']."'
,Category='".$_POST['E']."'
,Sub_Category= '".$_POST['F']."'
,Date='".$_POST['G']."'
,Registered_State='".$_POST['H']."'
,Authorized_Capital='".$_POST['I']."'
,Paidup_Capital='".$_POST['J']."'
,Industrial_Class='".$_POST['K']."'
,Activity='".$_POST['L']."'
,Office_Address='".$_POST['M']."'
,ROC='".$_POST['N']."'
,EMail='".$_POST['O']."'
,Annual_Return='".$_POST['P']."'
,Financial_Statement='".$_POST['Q']."'
WHERE CODE='$b'";


if (!mysqli_query($con,$sql))
  {
  die('Error:' . mysqli_error($con));
  }
   



header("Location: http://localhost/index.php");
print '1 record updated';/* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?><center><form action="index.php"><br><br>
    <input type="submit" value="Home Page">
    </center></form>
</body>

</html>
