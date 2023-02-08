<?php include "header.php";
$name = $_POST['name'];
$age = $_POST['age'];


if($age>= 18){
    echo "User is eligeable for voting";
}
else{
    echo "User is not eligeable for voting";
}
?>

<?php include "footer.php"?>