<html>

<body>

    <h1><center>NEW ENTRY</center></h1>
    <div align="center">
<form action="insert.php" method="post">
<table border = "4">
         <tr>    
             <td>Code:</td><td> <input type="text" name="A" required/></td></tr>

         <tr><td>Name:</td><td> <input type="text" name="B" required/></td></tr>
         <tr><td>Status: </td><td><select name="C">  
  <option value="Active">Active</option>
  <option value="Strike Off">Strike Off</option>  
  <option value="Under Process of Striking off">Under Process of Striking off</option>  
  <option value="Amalgamated">Amalgamated</option>  
  <option value="Converted to LLP">Converted to LLP</option>}  
  <option value="Converted to LLP and dissolved">Converted to LLP and dissolved</option>  
  <option value="Not Available for eFiling">Not Available for eFiling</option>  
  <option value="Under liquidation">Under liquidation</option>  
  <option value="Dissolved">Dissolved</option>  
  <option value="Dormant under section 455">Dormant under section 455</option></select></td></tr>

         <tr><td> Class: </td><td><select name="D">  
  <option value="Private">Private</option>
  <option value="Public">Public</option>  
  <option value="Private(One Person Company)">Private(One Person Company)</option></select> </td></tr>
         <tr><td>Category: </td><td><select name="E">  
  <option value="Company limited by Shares">Company limited by Shares</option>
  <option value="Company Limited by Guarantee">Company Limited by Guarantee</option>  
  <option value="Unlimited Company">Unlimited Company</option></select> </td></tr>

         <tr><td>Sub-Category:</td><td><select name="F">  
  <option value="Non-govt company">Non-govt company</option>
  <option value="State Govt company">State Govt company</option>
<option value="Subsidiary of Foreign Company">Subsidiary of Foreign Company</option>  
  <option value="Guarantee and Association comp">Guarantee and Association comp</option></select></td></tr>
         <tr><td>Date: </td><td><input type="date" name="G" required/></td></tr>

         <tr><td>Registered_State:</td><td> <select name="H">  
  <option value="Select">Select</option>
  <option value="Odisha">Odisha</option>  
  <option value="Haryana">Haryana</option>  
  <option value="Jammu_Kashmir">Jammu Kashmir</option>  
  <option value="Puducherry">Puducherry</option>}  
  <option value="Gujrat">Gujrat</option>  
  <option value="Madhya_Pradesh">Madhya Pradesh</option>  
  <option value="Himachal_Pradesh">Himachal Pradesh</option>  
  <option value="Uttrakhand">Uttrakhand</option></select></td></tr>
         <tr><td>Authorized_Capital:</td> <td><input type="text" name="I" required/></td></tr>

         <tr><td>Paidup_Capital:</td><td> <input type="text" name="J" required/></td></tr>
         <tr><td>Industrial_Class:</td><td> <input type="text" name="K" required/></td></tr>

         <tr><td>Activity:</td><td> <input type="text" name="L" required/></td></tr>
         <tr><td>Office_Address: </td><td><input type="text" name="M" required/></td></tr>

         <tr><td>ROC:</td><td> <input type="text" name="N" required/></td></tr>
         <tr><td>EMail: </td><td><input type="text" name="O" required/></td></tr>

         <tr><td>Annual_Return:</td> <td><input type="date" name="P" required/></td></tr>
         <tr><td>Financial_Statement:</td><td> <input type="date" name="Q" required/></td></tr>


 

         <tr><td></td><td align="right"><input type="submit" value="Submit" /></td></tr>

</form>
    </div>
</body>
</html>