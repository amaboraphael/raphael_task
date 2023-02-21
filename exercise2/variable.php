<?php include "header.php" ?>
<h3></h3>

<h4>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using</h4> <h4> tag : Hello …., You are welcome to my site</h4>

<form action="action.php" method="post">
    <div class="row">
        <div class="col">
    <input type="text" name="fname" required placeholder="First Name" class="form control"> <br>
    </div>

    <div class="col">
    <input type="text" name="fname" required placeholder="Last Name" class="form control"> <br>
    </div>
    <input type="submit" value="submit">

    <div class="col">
    Birth date <input type="date" name="bdate"> <br>
    </div>
    
    <div class="col">
    select fav color: <input type="color" name="color"> <br>
    </div>

    <input type="submit" value="submit">

    </div>
</form>

<h3> 3.5 Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5</h3>



<table class="table">
  <thead>
<tr>
<th> S.N </th><th> Name </th><th>Grade</th>
</tr>
<tr>
<td> 1 </td> <td> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 2 </td><td> John </td><td> $g3 </td>
</tr>
</thead>
</table>

<h3>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.</h3>
<?php 

$car="toyota";
$bike = "honda";
$brand = $car . " " . $bike;
echo $brand;
?>

<h3>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.
</h3>

<?php
$num1=298;
$num2 = 234;
$num3 = 46;
$Answer = $num1 + $num2 + $num3;
echo $Answer;
?>

<h3>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h3>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<h4>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h4>

<?php
 
?>
<?php include "footer.php"?>