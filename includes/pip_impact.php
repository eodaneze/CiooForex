<?php
require_once('./connection.php');
  if(isset($_POST['register'])){
  	 $name = $_POST['name'];
  	 $email = $_POST['email'];
  	 $wphone = $_POST['wphone'];
  	 $cphone = $_POST['cphone'];
  	 $teleId = $_POST['teleId'];
  	 $instaId = $_POST['instaId'];
  	 $location = $_POST['location'];
  	 $dob = $_POST['dob'];
  	 $occupation = $_POST['occupation'];
  	 $pc = $_POST['pc'];
  	 $lf = $_POST['lf'];

     // get users age
      $getDob = $dob;
      $years = (date('Y') - date('Y',strtotime($getDob)));
      // check duplicate users by email, instagram id and telegram id;
      $sql = "SELECT * FROM pip_impact WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);

     if($name == "" || $email == "" || $wphone == "" || $cphone == "" || $teleId == "" || $instaId == "" || $location == "" || $dob == "" || $occupation == "" || $pc == "" || $lf== ""){
        $error = urlencode("All fields are required");
        header('location: ../pip_impact_register.php?error='.$error);
        return false;
     }elseif($years < 18){
        $error = urlencode("You must be 18years and above");
        header('location: ../pip_impact_register.php?error='.$error);
        return false;
     }else{
         if($_FILES['file']['name'] != ''){
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES['file']['tmp_name'];
            $filesize = $_FILES['file']['size'];
            $filetype = $_FILES['file']['type'];
            $fileext = explode('.', $filename);
            $fileactualext = strtolower(end($fileext));

             $allow = array('jpg', 'jpeg', 'png', 'gif');
             if(in_array($fileactualext, $allow)){
                 $pic = uniqid('',true).'.'.$fileactualext;
                $filedestination = 'pip_impactImg/'.$pic;

                if(move_uploaded_file($filetmp, $filedestination)){
                     $md = date('Y-m-d');
                     $sql = "INSERT INTO pip_impact(name, email, wphone, tphone, telId, instaId, location, dob, occupation, pic, pcon, lforex, createddate)VALUES('$name', '$email', '$wphone', '$cphone', '$teleId', '$instaId', '$location', '$dob', '$occupation', '$pic', '$pc', '$lf', '$md')";

                     $result = mysqli_query($conn, $sql);
                    if($result){
                        $success = urlencode("Registration successful!!");
                        header("location:../pip_impact_register.php?success=".$success);
                        return false;
                    }else{
                         $error = urlencode("Error Registering For Pip Impact");
                  header('location: ../pip_impact_register.php?error='.$error);
                  return false;
                    }
                }else{
                   $error = urlencode("Error Uploading picture");
                  header('location: ../pip_impact_register.php?error='.$error);
                  return false;
                }

             }else{
                $error = urlencode("unsupported file format");
                header('location: ../pip_impact_register.php?error='.$error);
                return false;
             }
         }else{
            $error = urlencode("please Upload a picture");
            header('location: ../pip_impact_register.php?error='.$error);
            return false;
         }
     }
  }

?>