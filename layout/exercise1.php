<?php include "header.php"?>
    <h1>My simple php script</h1>
    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid)</h3>
<?php

echo "Amabo Raphael Chenwi";
echo "<br>";
echo "BBCAP22 "

?>
 <h3>3.2.1 Write PHP code to display the following message.</h3>
<?php 
echo "Hello world! My name is \"David\""

?>
<h3>3.3 Write the PHP code in to display the current date. </h3>
<?php  echo date("d.m.Y") ?>

<script>
document.write("Hello world this is javascript");
</script>

<noscript>
Please enable javascript to view this content,
</noscript>

<input type="button" onclick="hello()" value="Click me">
<h3>3.4 Variable in php. 
</h3>

<?php
 $title ="PHP is interesting";
echo "<h1>".$title."<h1>" ?>
<script>
//window.alert
window.alert(this will trigger an alert box);
window.alert(5+10);
document.write
document.write("Hello this is interesting");

</script>
<h3>Table and Variables</h3>

<button onclick="add()">click to add </button>
<hr>
<p id="place1" style="color:red; background-color: aqua;"></p>
<span id="place2" style="color:red; background-color:green;"></span>

<script>
document.getElementById("place1").innerHTML ="This will go to page1"
document.getElementById("place2").innerHTML="This will go to span"
</script>    

<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
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
</table>
";
?>

<h3>4.0 screenshot that verifies, you have set up the development environment</h3>
<img src="workenv.png"alt="working environment">


<h2>changing the background-color</h2>
<form>
<input type="color" name="background" onchange="changeColor('background,this.value')">
</form>
<?php include "footer.php"?>
