<?php 
$conn=mysqli_connect("localhost", "root","","collage"); // Establishing Connection with Server
//$db = mysql_select_db("collage", $connection); // Selecting Database from Server
 // Fetching variables of the form which travels in URL

//Insert Query of SQL
$query ="select * from student";
echo "<table><tr><th>Name</th>
<th>Email</th>
<th>Contact</th></tr>";
if($data=mysqli_query($conn,$query))
{
    echo "loaded!!";
while($row=mysqli_fetch_array($data))
{
	echo "<tr><th>".$row['Name']."</th>".
"<th>".$row['Email']."</th>".
"<th>".$row['Contact']."</th></tr>";
echo "<br>";	
}
}
else{
echo "loading fail Failed !!";
echo mysqli_error($conn);
}

mysqli_close($conn); // Closing Connection with Server
?>


