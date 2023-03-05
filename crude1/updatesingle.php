<?php 
$title="update your information.";
include '../layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn,"select * from studentinfo
where id = '$a' ");
$row = mysqli_fetch_array($result);

?>
<h3>update your information below</h3>
<form name = "update" method ="post" action="">
<input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname']; ?>"> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname']; ?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?>"><br><br>
    <select name="groupid" value="<?php echo $row['groupid']; ?>"><br><br>
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="others">OTHERS</option>
    </select><br><br>
    <input type="submit" value="update your information" name="update"><br><br>
    <input type="submit" value="delete your information" name="delete"><br><br>
</form>

<?php
if (isset($_POST['update'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', lname='$lname' where id='$a' ");

}
else {echo "Record not modified";}
?>
 <p>but</p>
<?php
if (isset($_POST['delete'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = mysqli_query($conn, "DELETE FROM studentinfo where id='$a' ");
    echo "record deleted successfully";
}
    else {echo "Record not modified";}

?>