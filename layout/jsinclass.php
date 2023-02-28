<?php 
$title = "JavaScript Events and Form validations";
include "header.php"
?>
<h3>A simple button to display current Date</h3>

<button onclick="this.innerHTML = Date()"> click to know date</button>


<h3>make a button and place holder as paragrah for the date</h3>

<button onclick="getElementById('p1').innerHTML=Date()"> click to know the Date</button>

<p id="p1"></p>

<h3>change the background color</h3>

<form>
    <input type="color" id="background" onchange="changeColor()">
</form>


<form>
    <input type="color" id="fcolor" onchange="changeFcolor()">
</form>

<h3> On mouse over and on mouse out</h3>

<span onmouseover="this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontSize = '2em';"

onmouseout="this.style.color='red';
this.style.backgroundColor='green';
this.style.fontSize = '2em';"
> some text </span>







<?php include "footer.php" ?>