<?php
$cName = $_POST["name"];
$cEmail = $_POST["email"];
$cPhone = $_POST["phone"];
$cNote = $_POST["note"];
$db = new mysqli("localhost", "root", "", "contacts");
$sql = "INSERT INTO contact(Name, Email, Phone, Note) VALUES('$cName', '$cEmail', '$cPhone', '$cNote')";
if ($db->query($sql) === TRUE){
  echo "New contact added.";
} else {
  echo "An error occurred.";
}
