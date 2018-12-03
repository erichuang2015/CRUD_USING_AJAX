<html>
<head>
<title>AJAX WITH PHP AND MYSQL</title>
<script type ="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

$.ajax({
url: "data.php",
data: "",
dataType: "text",
success: function(strDate)
{
$('#show_date').text(strDate)
}

})
})
</script>
</head>

<body>
<h3>AJAX WITH PHP AND MYSQL</h3><br> <br>
<p>AJAX is a technique for creating fast and dynamic web pages.<br> AJAX allows web pages to be updated asynchronously by exchanging small<br> amounts of data with the server behind the scenes.<br> This means that it is possible to update parts of a web page, <br>without reloading the whole page.</p><br><br>
<div id="show_date" style="background-color:lightblue">


</div>
</body>
</html>
