<?php

//Connect to a database
$connect = mysqli_connect('localhost', 'root', '159753', 'ajaxtest');

$query = 'SELECT * FROM users';

//Get Result
$result = mysqli_query($connect, $query);

//Fetch Data
$users = mysqli_fetch_all($result ,MYSQLI_ASSOC);

echo json_encode($users);