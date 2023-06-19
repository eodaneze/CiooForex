<?php
require_once('./connection.php');
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $in_user = $_POST['in_user'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $acc_size = $_POST['acc_size'];
      $broker = $_POST['broker'];
      $leverage = $_POST['leverage'];
      $platform = $_POST['platform'];
      $mlogin = $_POST['mlogin'];
      $mpassword = $_POST['mpassword'];
      $category = $_POST['category'];
      $terms = $_POST['terms'];

      $instagram_sql = "SELECT * FROM extreme_risk WHERE in_user = '$in_user'";
      $instagram_result = mysqli_query($conn, $instagram_sql);
      $phone_sql = "SELECT * FROM extreme_risk WHERE phone = '$phone'";
      $phone_result = mysqli_query($conn, $phone_sql);
      $email_sql = "SELECT * FROM extreme_risk WHERE email = '$email'";
      $email_result = mysqli_query($conn, $email_sql);

      if($name == "" || $in_user == "" || $email == "" || $phone == "" || $acc_size == "" || $broker == "" || $leverage == "" || $platform == "" || $mlogin == "" || $mpassword == "" || $category == ""){
          $error = urlencode("All fields are required!!");
          header('location: ../erisk.php?error=' . $error);
          return false;
      }elseif($terms == ""){
        $error = urlencode("You must accept the terms and condition");
        header('location: ../erisk.php?error=' . $error);
        return false;
      }elseif(mysqli_num_rows($instagram_result) > 0){
        $error = urlencode("Instagram Username already exist");
        header('location: ../erisk.php?error=' . $error);
        return false;
      }elseif(mysqli_num_rows($phone_result) > 0){
        $error = urlencode("Phone number already exist");
        header('location: ../erisk.php?error=' . $error);
        return false;
      }elseif(mysqli_num_rows($email_result) > 0){
        $error = urlencode("Email address already exist");
        header('location: ../erisk.php?error=' . $error);
        return false;
      }elseif(strlen($phone) !== 11){
        $error = urlencode("Invalid phone number. check the length ");
        header('location: ../erisk.php?error=' . $error);
        return false;
      }else{
          $md = date('Y-m-d H:i:s');
          $sql = "INSERT INTO extreme_risk(name, in_user, email, phone, acc_size ,broker, leverage, platform, mlogin, mpassword, category, terms, createddate) VALUES('$name', '$in_user','$email', '$phone', '$acc_size', '$broker', '$leverage', '$platform', '$mlogin', '$mpassword', '$category', '$terms', '$md');";
          $result = mysqli_query($conn, $sql);
          if($result){
              
              $success = urlencode("Registration successful");
              header('location: ../erisk.php?success=' . $success);
              return false;
        }else{
            $error = urlencode("Error while registering");
            header('location: ../erisk.php?error=' . $error);
            return false;
        }
              
      }
  }

?>