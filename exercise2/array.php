<?php include "header.php"; ?>

<form action="" method="get">
<input type="number" placeholder = "enter your first number" name="num1" required>
<input type="number" placeholder = "enter your second number" name="num2" required>

<select name="operator">
<option value="add"> Add</option>
<option value="sub"> subtract</option>
<option value="mul"> Multiply</option>
<option value="div"> Divide</option>
</select>

<input type="submit" name="cal" value="calculate">
</form>
<?php 

if (isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
   
    $operator = $_GET["operator"];

    switch($operator){
        case "add":
            $result=$num1 + $num2;
            break;

            case "sub":
                $result=$num1 - $num2;
                break;

                case "mul":
                    $result=$num1 * $num2;
                    break;

                    case "div":
                        $result=$num1 / $num2;
                        break;

                        default:
                        $result = "Error, you have not selected the right operator";
                    }

}

if (isset($result)){
    echo "<h2> Result: $result</h2>";
}
?>

<h4>1. Write a php script to display courses as list.</h4>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
$num = count($courses);

for ($i = 0; $i < $num; $i++) {
    echo "$courses[$i] <br>";
}
?>
<h4>The unset() function is used to remove element from the array.</h4>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
array_values($courses1);
unset($courses1[3]);
echo var_dump($courses1)."<br>";

?>
<h4>3. Sort the following array, <><br>a) ascending order sort by value</h4>

<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
foreach($courses3 as $value){
    echo $value . "<br>";
}
?>

<h4>b) ascending order sort by Key</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);

foreach($courses3 as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

?>
<h4>c) descending order sort by Value</h4>

<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);

foreach($courses3 as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<h4>d) descending order sort by Key</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
Krsort($courses3);

foreach($courses3 as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<h4>4.Change the following array's all values to upper case.</h4>

<?php
 //$courses4=array("php"=>"html" "javascript"=> "cms"=>"project");
//print_r(array_change_key_case($courses4, CASE_UPPER));
?> 

<h4>5.fav color</h4>

<?php
 

?> 

<?php include "footer.php"?>



