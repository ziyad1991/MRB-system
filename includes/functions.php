<?php
include 'db.php';


global $connection;



function ViewingRooms(){
global $connection;

$getallrooms = "SELECT * FROM rooms";
$getallroomsquery = mysqli_query($connection,$getallrooms);
while($row = mysqli_fetch_assoc($getallroomsquery)){
$id = $row['id'];
$name = $row['name'];
$capacity = $row['capacity'];

$status = $row['status'];

echo "<tr>
      <td>$id</td>
      <td>$name</td>
      <td>$capacity</td>
      <td>$status</td>
      </tr>";}

}

function Addroom($name,$capacity){
global $connection;

$addtorooms = "INSERT INTO rooms (name, capacity, status) VALUES ('{$name}', '{$capacity}', 'New')";
$addtoroomsquery = mysqli_query($connection,$addtorooms);

}



function Addusers($name,$phone,$email){
global $connection;

$addtousers = "INSERT INTO users (name, phone, email) VALUES ('{$name}', '{$phone}', '{$email}')";
$addtousersquery = mysqli_query($connection,$addtousers);

}

function Viewingusrs(){
global $connection;

$getallusers = "SELECT * FROM users";
$getallusersquery = mysqli_query($connection,$getallusers);
while($row = mysqli_fetch_assoc($getallusersquery)){
$id = $row['id'];
$name = $row['name'];
$phone = $row['phone'];
$email = $row['email'];

$status = $row['status'];

echo "<tr>
      <td>$id</td>
      <td>$name</td>
      <td>$phone</td>
      <td>$email</td>
      </tr>";}

}


function Viewingbooking(){
global $connection;

$getallusers = "SELECT * FROM booking";
$getallusersquery = mysqli_query($connection,$getallusers);
while($row = mysqli_fetch_assoc($getallusersquery)){
$id = $row['id'];
$name = $row['user'];
$date = $row['bookdate'];

$status = $row['status'];

echo "<tr>
      <td>$id</td>
      <td>$name</td>
      <td>$date</td>
      </tr>";}

}

function Viewingbookingbyuser($user){
global $connection;

$getallusers = "SELECT * FROM booking WHERE user='$user'";
$getallusersquery = mysqli_query($connection,$getallusers);
while($row = mysqli_fetch_assoc($getallusersquery)){
$id = $row['id'];
$name = $row['user'];
$date = $row['bookdate'];

$status = $row['status'];

echo "<tr>
      <td>$id</td>
      <td>$name</td>
      <td>$date</td>
      </tr>";}

}
?>