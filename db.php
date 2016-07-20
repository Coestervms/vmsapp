<?php

echo $server = 'ec2-54-243-201-3.compute-1.amazonaws.com';
echo '<br>';
echo $username = 'tqqhmqcblceyjg';
echo '<br>';
echo $password = 'HSqhxhN-cHg51uJEHX2_walN0u';
echo '<br>';
$db = 'd29p2gdk6a1kti';

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	echo "Connected successfully";
}
?>
