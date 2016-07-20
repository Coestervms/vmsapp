<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
echo '<pre>';
print_r($url);
echo '<br>';
echo $server = $url["host"];
echo '<br>';
echo $username = $url["user"];
echo '<br>';
echo $password = $url["pass"];
echo '<br>';
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	echo "Connected successfully";
}
?>
