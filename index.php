<?php

//Gets shortened url from REQUEST_URI and searches for it on database, then if exists, redirects to there.

$req = $_SERVER['REQUEST_URI'];
if($req != "/"){
	$req = ltrim($req, $req[0]);
	$conn = mysqli_connect('localhost', 'bernardo', 'root', 'url_shortener');
	$sql = "SELECT url_original FROM urls WHERE url_short='$req'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		header("location: ".$row['url_original']);
	}

	mysqli_close($conn);
}


?>


