<!DOCTYPE html>
<head>
    <title>Search</title>
    
<body>
    <h2><center> Search Form </center></h2>
    <div align="center">
    <form action="index.php" method="post">
    <table border = "4">
         <tr>    
             <td>State Name :</td> 
        
             <td><select name="state" required>  
  <option value="Select">Select</option>
  <option value="Odisha">Odisha</option>  
  <option value="Haryana">Haryana</option>  
  <option value="Jammu_Kashmir">Jammu Kashmir</option>  
  <option value="Puducherry">Puducherry</option>  
  <option value="Gujrat">Gujrat</option>  
  <option value="Madhya_Pradesh">Madhya Pradesh</option>  
  <option value="Himachal_Pradesh">Himachal Pradesh</option>  
  <option value="Uttrakhand">Uttrakhand</option>  
      </select> </td> </tr> 
    
      </select>   
      <br><br><tr><td>CIN :</td>
          <td><input type="text" name="query" /></td>
      <Br><br></tr>
      <tr><td></td>
              <td align="right"><input type="submit" value="Search" />
              </td></tr>   </table>
    </form>
    </div>
</body>
</html>
<?php
   $a= mysqli_connect("localhost", "root", "","company_master") or die("Error : ".mysql_error());
   
 ?>
<br><br><br><br>
<!DOCTYPE html >
<head>
    <title>Search results</title>
   
</head>
<body>
<?php
   
$query = $_POST['query']; 
    // gets value sent over search form
    $query1 = $_POST['state']; 
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
      
 echo "<table align=\"center\" border = \"4\">" ;      
         

    $raw_results = mysqli_query($a,"SELECT * FROM $query1
            WHERE (`Code` LIKE '%".$query."%')") or die(mysqli_error());
             
        
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             echo ("<tr><td><b><center>CIN</center></b></td><td><b><center>Name</b></center></td><td><b><center>Status</center></b></td><td><b><center>Class</center></b></td><td><b><center>Category</center></b></td><td><b><center>Sub_Category</center></b></td><td><b><center>Date</center></b></td><td><b><center>Registered_State</center></b></td><td><b><center>Authorized_Capital</center></b></td><td><b><center>Paidup_Capital</center></b></td><td><b><center>Industrial_Class</center></b></td><td><b><center>Activity</center></b></td><td><b><center>Office_Address</center></b></td><td><b><center>ROC</center></b></td><td><b><center>EMail</center></b></td><td><b><center>Annual_Return</center></b></td><td><b><center>Financial_Statement</center></b></td></tr>");

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<tr><td><p><h3>".$results['Code']."</h3>"."</td></p>";
                echo "<td><p>".$results['Name']."</td></p>";
                echo "<td><p>".$results['Status']."</td></p>";
                echo "<td><p>".$results['Class']."</td></p>";
                echo "<td><p>".$results['Category']."</td></p>";
                echo "<td><p>".$results['Sub_Category']."</td></p>";
                echo "<td><p>".$results['Date']."</td></p>";
                echo "<td><p>".$results['Registered_State']."</td></p>";
                echo "<td><p>".$results['Authorized_Capital']."</td></p>";
                echo "<td><p>".$results['Paidup_Capital']."</td></p>";
                echo "<td><p>".$results['Industrial_Class']."</td></p>";
                echo "<td><p>".$results['Activity']."</td></p>";
                echo "<td><p>".$results['Office_Address']."</td></p>";
                echo "<td><p>".$results['ROC']."</td></p>";
                echo "<td><p>".$results['EMail']."</td></p>";
                echo "<td><p>".$results['Annual_Return']."</td></p>";
                echo "<td><p>".$results['Financial_Statement']."</td></tr></p>";
echo "<br>";echo "<br>";echo "<center>";
           echo "<form action='updatebutton.php'><input type='submit' value='Update' />"
                   . "<input type='hidden' name='CIN' value='".$results['Code']."'/>"
                   . "<input type='hidden' name='state' value='".$query1."'/>"
                   . "</form>";   
           echo "<br>"; 
            }
             
        }
        else{ // if there is no matching rows do following
            
            echo "NO RESULTS!";echo "<br>";
            echo "<center>";
            echo "<form action=\"script.php\">";
            echo "<input type=\"submit\" value=\"Add New Record\" />";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
    
</body>
</html>