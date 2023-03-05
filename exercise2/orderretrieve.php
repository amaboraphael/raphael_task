<?php
$title= "getting data from the database";
include 'header.php';
include 'db1.php';
$sql = "select * from paymentinfo";
$result = $conn ->query($sql);
if($result->num_rows > 0){
echo"
<table class='table'>
<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>email</th><th>home address</th><th>name</th><th>state</th><th>zip</th><th>number</th><th>orderid</th></tr>";
while($row=$result ->fetch_assoc()){
echo"<tr>
<td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
<td>$row[fname]</td>
<td>$row[lname]</td>
<td>$row[email]</td>
<td>$row[address]</td>
<td>$row[name]</td>
<td>$row[state]</td>
<td>$row[zip]</td>
<td>$row[number]</td>
<td>$row[orderid]</td>


</tr>";
//<td>$row[customerid]</td>
}
echo "</table>";

}

else{
    echo "no Results";
}

$conn ->close();
?>
<?php include "footer.php"?>