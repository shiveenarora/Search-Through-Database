
   
<html>

<body>

    <h1><center>UPDATE ENTRY</center></h1>
    <?php
$a= mysqli_connect("localhost", "root", "","company_master") or die("Error : ".mysql_error());
   $CIN=$_GET['CIN'];
$state=$_GET['state'];
  
         

    $raw_results = mysqli_query($a,"SELECT * FROM $state
            WHERE (`Code` LIKE '%".$CIN."%')") or die(mysqli_error());
             
        
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                $ci=$results['Code'];
                $name=$results['Name'];
                
                $status=$results['Status'];
                
                $class=$results['Class'];
               
                $category=$results['Category'];
               
                $sub_category=$results['Sub_Category'];
               
                $date=$results['Date'];
               
                $reg=$results['Registered_State'];
               
                $authorized_capital=$results['Authorized_Capital'];
                
                $paidup_capital=$results['Paidup_Capital'];
                
                $industrial_class=$results['Industrial_Class'];
                
                $activity=$results['Activity'];
                
                $office_address=$results['Office_Address'];
                
                $roc=$results['ROC'];
                
                $email=$results['EMail'];
                
                $annual_return=$results['Annual_Return'];
                
                $fin=$results['Financial_Statement'];
                
                echo "<br>";}}?><br>

    <div align="center"><br>
<form action="update.php" method="post">
<table border = "4">
    
         <tr>    
             
              <?php echo "<td>Code:</td> <td><input type='hidden' name=\"A\" value=\"$CIN\" required>$CIN</td></tr>"; ?>

         <tr><td>Name:</td><td> 
                 <input type="text" name="B" value="<?php echo $name;?>" required/></td></tr>
         <tr><td>Status: </td><td><select name="C"> 
                     <option>Select</option>
   <option value="Active" <?php if($status=="Active"){ echo "selected"; }  ?>>Active</option>
  <option value="Strike Off" <?php if($status=="Strike Off"){ echo "selected"; }  ?>>Strike Off</option>  
  <option value="Under Process of Striking off" <?php if($status=="Under Process of Striking off"){ echo "selected"; }  ?>>Under Process of Striking off</option>  
  <option value="Amalgamated" <?php if($status=="Amalgamated"){ echo "selected"; }  ?>>Amalgamated</option>  
  <option value="Converted to LLP" <?php if($status=="Converted to LLP"){ echo "selected"; }  ?>>Converted to LLP</option>}  
  <option value="Converted to LLP and dissolved" <?php if($status=="Converted to LLP and dissolved"){ echo "selected"; }  ?>>Converted to LLP and dissolved</option>  
  <option value="Not Available for eFiling" <?php if($status=="Not Available for eFiling"){ echo "selected"; }  ?>>Not Available for eFiling</option>  
  <option value="Under liquidation" <?php if($status=="Under liquidation"){ echo "selected"; }  ?>>Under liquidation</option>  
  <option value="Dissolved" <?php if($status=="Dissolved"){ echo "selected"; }  ?>>Dissolved</option>  
  <option value="Dormant under section 455" <?php if($status=="Dormant under section 455"){ echo "selected"; }  ?>>Dormant under section 455</option></select></td></tr>

         <tr><td> Class: </td><td><select name="D">  
  <option value="Private" <?php if($class=="Private"){ echo "selected"; }  ?>>Private</option>
  <option value="Public" <?php if($class=="Public"){ echo "selected"; }  ?>>Public</option>  
  <option value="Private(One Person Company)" <?php if($class=="Private(One Person Company)"){ echo "selected"; }  ?>>Private(One Person Company)</option></select> </td></tr>
         <tr><td>Category: </td><td><select name="E">  
  <option value="Company limited by Shares" <?php if($category=="Company limited by Shares"){ echo "selected"; }  ?>>Company limited by Shares</option>
  <option value="Company Limited by Guarantee" <?php if($category=="Company Limited by Guarantee"){ echo "selected"; }  ?>>Company Limited by Guarantee</option>  
  <option value="Unlimited Company" <?php if($category=="Unlimited Company"){ echo "selected"; }  ?>>Unlimited Company</option></select> </td></tr>

         <tr><td>Sub-Category:</td><td><select name="F">  
  <option value="Non-govt company" <?php if($sub_category=="Non-govt company"){ echo "selected"; }  ?>>Non-govt company</option>
  <option value="State Govt company" <?php if($sub_category=="State Govt company"){ echo "selected"; }  ?>>State Govt company</option>
<option value="Subsidiary of Foreign Company" <?php if($sub_category=="Subsidiary of Foreign Company"){ echo "selected"; }  ?>>Subsidiary of Foreign Company</option>  
  <option value="Guarantee and Association comp" <?php if($sub_category=="Guarantee and Association comp"){ echo "selected"; }  ?>>Guarantee and Association comp</option></select></td></tr>
         <tr><td>Date: </td><td><input type="text" name="G" value="<?php echo $date;?>" required/></td></tr>

         <tr><td>Registered_State:</td><td> <select name="H">  
  <option value="Select" >Select</option>
  <option value="Odisha" <?php if($reg=="Odisha"){ echo "selected"; }  ?>>Odisha</option>  
  <option value="Haryana" <?php if($reg=="Haryana"){ echo "selected"; }  ?>>Haryana</option>  
  <option value="Jammu_Kashmir" <?php if($reg=="Jammu_Kashmir"){ echo "selected"; }  ?>>Jammu Kashmir</option>  
  <option value="Puducherry" <?php if($reg=="Puducherry"){ echo "selected"; }  ?>>Puducherry</option>}  
  <option value="Gujrat" <?php if($reg=="Gujrat"){ echo "selected"; }  ?>>Gujrat</option>  
  <option value="Madhya_Pradesh" <?php if($reg=="Madhya_Pradesh"){ echo "selected"; }  ?>>Madhya Pradesh</option>  
  <option value="Himachal_Pradesh" <?php if($reg=="Himachal_Pradesh"){ echo "selected"; }  ?>>Himachal Pradesh</option>  
  <option value="Uttrakhand" <?php if($reg=="Uttrakhand"){ echo "selected"; }  ?>>Uttrakhand</option></select></td></tr>
         <tr><td>Authorized_Capital:</td> <td><input type="text" name="I" value="<?php echo $authorized_capital;?>" required/></td></tr>

         <tr><td>Paidup_Capital:</td><td> <input type="text" name="J" value="<?php echo $paidup_capital;?>" required/></td></tr>
         <tr><td>Industrial_Class:</td><td> <input type="text" name="K" value="<?php echo $industrial_class;?>" required/></td></tr>

         <tr><td>Activity:</td><td> <input type="text" name="L" value="<?php echo $activity;?>" required/></td></tr>
         <tr><td>Office_Address: </td><td><input type="text" name="M" value="<?php echo $office_address;?>" required/></td></tr>

         <tr><td>ROC:</td><td> <input type="text" name="N" value="<?php echo $roc;?>" required/></td></tr>
         <tr><td>EMail: </td><td><input type="text" name="O" value="<?php echo $email;?>" required/></td></tr>

         <tr><td>Annual_Return:</td> <td><input type="text" name="P" value="<?php echo $annual_return;?>" required/></td></tr>
         <tr><td>Financial_Statement:</td><td> <input type="text" name="Q" value="<?php echo $fin;?>" required/></td></tr>


 

         <tr><td></td><td align="right"><input type="submit" value="Submit" /></td></tr>

</form>
    </div>
</body>
</html>