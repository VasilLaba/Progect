<?php
session_start();


$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['order'])) {
  
  $sity = mysqli_real_escape_string($db, $_POST['sity']);
  $FIO = mysqli_real_escape_string($db, $_POST['FIO']);
  $adress = mysqli_real_escape_string($db, $_POST['adress']);
  $postindex = mysqli_real_escape_string($db, $_POST['postindex']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);

  //���������� �� �� ����� ���������
  if (empty($sity)) { array_push($errors, "�������� �� ����"); }
  if (empty($FIO)) { array_push($errors, "�������� �� ����"); }
  if (empty($adress)) { array_push($errors, "�������� �� ����"); }
  if (empty($postindex)) { array_push($errors, "�������� �� ����"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "�������� �� ����"); }


  // ���� ���� ������� �������� � ����
  if (count($errors) == 0) {

  	$query = "INSERT INTO orders (sity, FIO, adress, postindex, email, phone) 
  			  VALUES('$sity', '$FIO', '$adress', '$postindex', '$email', '$phone')";
  	mysqli_query($db, $query);
  }
}


?>