<?php

if(isset($_POST['submit'])){
	$conn = mysqli_connect('localhost', 'bernardo', 'root', 'url_shortener');
	$url_original = mysqli_real_escape_string($conn, $_POST['input_add']);

	$url_short = uniqid();

	$sql = "INSERT INTO urls (url_original, url_short) VALUES ('$url_original', '$url_short')";
	mysqli_query($conn, $sql);

	mysqli_close($conn);

	echo "Your shortened url is: ".$_SERVER['HTTP_HOST']."/". $url_short;

}

?>

<html>
<head>
<title>
add url
</title>
</head>
<body>
<form action="add.php" method="POST">
<input name="input_add" type="text" placeholder="Use full url! Ex.: https://google.com" required></input>
<button name="submit" type="submit">Send</button>
</form>

<script>
if(window.history.replaceState){
	window.history.replaceState(null, null, window.location.href);
}
</script>

</body>
</html>
