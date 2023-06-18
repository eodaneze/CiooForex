<?php
require_once('./connection.php');
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $in_user = $_POST['in_user'];
      $phone = $_POST['phone'];
      $acc_size = $_POST['acc_size'];
      $broker = $_POST['broker'];
      $leverage = $_POST['leverage'];
      $platform = $_POST['platform'];
      $mlogin = $_POST['mlogin'];
      $mpassword = $_POST['mpassword'];
      $category = $_POST['category'];
      $terms = $_POST['terms'];

      if($name == "" || $in_user == "" || $phone == "" || $acc_size == "" || $broker == "" || $leverage == "" || $platform == "" || $mlogin == "" || $mpassword == "" || $category == ""){
          $error = urlencode("All fields are required!!");
          header('location: ../erisk.php?error=' . $error);
          return false;
      }elseif($terms == ""){
        $error = urlencode("You must accept the terms and condition");
        header('location: ../erisk.php?error=' . $error);
        return false;
      }else{
          $md = date('Y-m-d H:i:s');
          $sql = "INSERT INTO extreme_risk(name, in_user, phone, acc_size ,broker, leverage, platform, mlogin, mpassword, category, terms, createddate) VALUES('$name', '$in_user', '$phone', '$acc_size', '$broker', '$leverage', '$platform', '$mlogin', '$mpassword', '$category', '$terms', '$md');";
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