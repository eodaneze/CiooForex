<?php
  $title = "Register Pip Impact";
  require_once('./home_header.php')
?>
<link rel="stylesheet" type="text/css" href="./assets/css/pip_impact.css">

<body style="background-color: orangered; display: flex; align-items: center; justify-content: center; width: 100%;">
  
    <?php
        if(isset($_GET['error'])){
          ?>
    <script>
    swal({
        title: "<?=urldecode($_GET['error'])?>",
        text: "Check the field",
        icon: "error",
        button: "Ok",
    });
    </script>
    <?php
        }elseif(isset($_GET['success'])){
            ?>
    <script>
    swal({
        title: "<?=urldecode($_GET['success'])?>",
        text: "Welcome",
        icon: "success",
        button: "Ok",
    });
    </script>
    <?php
        }
    ?>

  <div class="all-register-pip bg-white w-50 p-5 my-5 shadow">
     <form action="./includes/pip_impact.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Phone Number (Whatsapp)</label>
                                <input type="text" name="wphone" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Phone Number (Call line)</label>
                                <input type="text" name="cphone" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Telegram Id</label>
                                <input type="text" name="teleId" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Instagram Id</label>
                                <input type="text" name="instaId" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label>Date Of Birth</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label>Occupation</label>
                                <select name="occupation" class="form-control">
                                    <option>--Select Occupation--</option>
                                    <option>Student</option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label>Upload Picture</label>
                                <input type="file" name="file" class="form-control">
                                <span><b>Note: </b>Please Upload Only Portrait Picture</span>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label>Have You Participated in a contest before?</label><br>
                                <input type="radio" name="pc" value="Yes">Yes
                                <input type="radio" name="pc" value="No">No
                            </div>
                            <div class="col-lg-12 mb-4">
                                <label>Have You learnt forex before?</label><br>
                                <input type="radio" name="lf" value="Yes">Yes
                                <input type="radio" name="lf" value="No">No
                            </div>

                        </div>
                        <div class="register-btn p-2 border-top">
                            <button class="" name="register">Register</button>
                            <p>have already registered for the pip impact program? <a href="./pip_impact_payment.php">Make Payment</a></p>
                        </div>
                    </form>
  </div>
</body>