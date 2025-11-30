<?php
// first way
$stmt = $mysqli->prepare("SELECT col1 FROM t1 WHERE col2 = ?");
$stmt->bind_param("s", $col2_arg);
$stmt->execute();


// seconde way
$name = $mysqli->real_escape_string($_POST['name']);
$mysqli->query("SELECT * FROM myTable WHERE name='$name'");


$stmt = $mysqli->prepare("SELECT * FROM myTable WHERE name = ? AND age = ?");
$stmt->bind_param("si", $_POST['name'], $_POST['age']);
$stmt->execute();
//fetching result would go here, but will be covered later
$stmt->close();



