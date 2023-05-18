<?php 
  session_start();

  require_once "../model/registrationModel.php";

  $firstname = $_POST['n_fname'];
  $lastname = $_POST['n_lname'];
  $email = $_POST['n_email'];
  $phone = $_POST['n_phone'];
  $address = $_POST['n_address'];
  $country = $_POST['n_country'];
  $dob = $_POST['n_dob'];
  $bloodgroup = $_POST['n_bloodgroup'];
  if(isset($_POST['gender'])) {
      $genderType = $_POST['gender'];
    }
  $password = $_POST['n_pass'];
  $cpassword = $_POST['n_cpass'];

      add($firstname,$lastname,$email,$phone,$address,$country,$dob,$bloodgroup,$genderType,$password,$cpassword);
      $_SESSION['status'] = true;
      setcookie('status', 'true', time()+3600, '/');
      header('location: ../view/registration.php');

?>