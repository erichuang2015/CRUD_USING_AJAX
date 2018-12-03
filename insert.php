<?php 
$conn=mysqli_connect("localhost", "root","","collage"); // Establishing Connection with Server
//$db = mysql_select_db("collage", $connection); // Selecting Database from Server
 // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

//Insert Query of SQL
$query ="insert into student(Name,Email,Contact) values ('$name', '$email', '$contact')";
if(mysqli_query($conn,$query))
{
echo "Data Inserted successfully...!!";
}
else{
echo "Insertion Failed !!";
}

mysqli_close($conn); // Closing Connection with Server
?>


