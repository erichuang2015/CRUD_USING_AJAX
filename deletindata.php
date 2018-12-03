
<html>
<head>
<title>AJAX WITH PHP AND MYSQL</title>
<script type ="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$('#delete').click(function(event){
 event.preventDefault();
$.ajax({
url: "delete.php",
method: "post",
data: $('form').serialize(),
dataType: "text",
success: function(strDate)
{
$('#show_date').text(strDate)
}
 
})
})
})
</script>
</head>

<body>
<h3>AJAX WITH PHP AND MYSQL</h3>

<div style="background-color:lightblue; width:300px; margin:10 auto">
<p id="show_date"></p>
<form method="POST">
<table cellpadding="5" cellspacing="5">
<tr><th>Delete by Name</th><td><input type="text" id="name" name="name"></td></tr>

<tr><td><input type="submit" name="delete" id="delete" value="Submit"></td></tr>

</table>
</form>


</div>
</body>
</html> 