

<?php 
$conn=mysqli_connect("localhost", "root","","collage"); // Establishing Connection with Server
//$db = mysql_select_db("collage", $connection); // Selecting Database from Server
 // Fetching variables of the form which travels in URL
$name = $_POST['name'];


//Insert Query of SQL


$query="DELETE FROM `student` WHERE Name='$name'";
if(mysqli_query($conn,$query))
{
echo "DELETED SUCCESSFULLY...!!";
}
else{
echo "DELATION FAILED !!";
}

mysqli_close($conn); // Closing Connection with Server
?>





 