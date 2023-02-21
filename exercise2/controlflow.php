<?php include "header.php";
?>
<h3>1. Write a script that gets the current month and prints one of the following responses, </h3>
<?php
$month = date("F");

if($month=="August"){
    echo "It's August, so it's still holiday.";
}
else{
    echo "Not August, this is $month,  so I don't have any holidays"."<br>";
    
}
?>
<h3>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>

<?php
$color ="red";
if($color=="red"){
    echo "The color is red";
}
else{
    echo "The color is not red";
}

?>
<br>

<h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
</h3>
<?php
$grade = 0;
if($grade>=80){
    echo "Excellent";
}
elseif ($grade>=70 && $grade<80) {
    echo "Great";
}

elseif ($grade>=60 && $grade<70) {
    echo "good";
}
elseif ($grade>=50 && $grade<60) {
    echo "Pass";
}

else {
    echo "Fail";
}


?>
<br>
<h3>4.Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h3>
<form action="action2.php" method="post" >
 Name: <input type="text" name="name" ><br> 
 <p></p>
 age: <input type = "number" name ="age"><br>
 <p></p>
 <input type ="submit" value="submit">
</form>

<h3>In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h3>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$browser = "chrome";
switch ($user_agent){
    case (strpos ($user_agent, 'Chrome')==true):
        echo "You are using chrome";
        break;
    case (strpos ($user_agent, 'Edg')==true):
            echo "You are using microsoft Edge";
        break;
    case (strpos ($user_agent, 'Firefox')==true):
            echo "You are using Mozilla firefox";
            break;
    default:
        echo "Your browser could not be found";     
 
}


?>
<?php include "footer.php"?>