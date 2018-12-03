

<?php 
$conn=mysqli_connect("localhost", "root","","collage"); // Establishing Connection with Server
//$db = mysql_select_db("collage", $connection); // Selecting Database from Server
 // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

//Insert Query of SQL
$query ="UPDATE student SET Email='$email',Contact='$contact' WHERE Name='$name'";
if(mysqli_query($conn,$query))
{
echo "Updated successfully...!!";
}
else{
echo "updation Failed !!";
}

mysqli_close($conn); // Closing Connection with Server
?>





