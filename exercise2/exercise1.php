<?php include "header.php"?>
<div class="wrapper">
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
<hr>
<script>
document.write("Hello world this is javascript");
</script>

<noscript>
Please enable javascript to view this content,
</noscript>

<input type="button" onclick="hello()" value="Click me">
<h3>3.4 Variable in php. 
</h3>

<hr>

<h3>3.3 Write the PHP code in to display the current date. </h3>
<?php  echo date("d.m.Y") ?>
<h3>3.4 Variable in php. 
</h3>

<?php
 $title ="PHP is interesting";
echo "<h1>".$title."<h1>" ?>

<h3>Table and Variables</h3>
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
</div>
<?php include "footer.php"?>

