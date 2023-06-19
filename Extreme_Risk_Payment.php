<?php
   require_once('./includes/connection.php');
   
    $sql = "SELECT * FROM extreme_risk ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
  
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/risk_payment.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/small-fev.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/acc_cat.css">
    <title>
        <?php
               if(isset($title)){
                echo $title.' :: CiooForex Academy ::.. Be The Best You';
               }else{
                 echo "CiooForex Academy ::.. Be The Best You";
               }
        ?>
    </title>
</head>

<body>
    <div class="all-pay-section container pt-5">
        <?php
  if(isset($_GET['error'])){
      ?>
        <script>
        swal({
            title: "<?=urldecode($_GET['error'])?>",
            text: "check back",
            icon: "error",
            button: "Aww yiss!",
        });
        </script>

        <?php   
  }elseif(isset($_GET['success'])){
    ?>
        <script>
        swal({
            title: "<?=urldecode($_GET['success'])?>",
            text: "Continue payment",
            icon: "success",
            button: "Aww yiss!",
        });
        </script>

        <?php 
  }
?>
        <div class="pay-title-alert mb-5">
            <div class="pay-title">
                <div>
                    <img src="./assets/img/small-fev.png" alt="">
                    <h3>
                        <span>Extreme Risk</span>
                        <span>| Account management category</span>
                    </h3>
                </div>
            </div>
            <div class="pay-alert">
                <div class="alert alert-att alert-dismissible fade show d-flex" role="alert">
                    <div>
                        <strong style="color: var(--main);">Attention!</strong> <br> This Registration is for Extreme
                        risk <br>
                        Account management category
                    </div>
                    <div>
                        <i class="fa fa-close" data-bs-dismiss="alert"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 form-bg shadow-lg p-4">
                <div class="back-arrow border-bottom pb-3">
                    <i class="fa-solid fa-angle-left"></i>
                    <button class="btn btn-success"><a href="" class="text-white text-decoration-none">Back</a></button>
                </div>
                <div class="charge-convert mt-4">
                    <h1>Equity = <span><i class="fa-sharp fa-solid fa-dollar-sign"></i>50 -</span> <span><i
                                class="fa-sharp fa-solid fa-dollar-sign"></i>200</span></h1>
                </div>
                <div class="details">
                    <h5>Extreme Risk Details</h5>
                    <p>
                        <span><i class="fa fa-check text-success"></i> Risk = 100%</span>
                        <span><i class="fa fa-check text-success"></i> Profit target= 400%</span>
                        <span><i class="fa fa-check text-success"></i> Duration = 1 week</span>
                        <span><i class="fa fa-check text-success"></i> Contracts duration = 1 month</span>
                        <span><i class="fa fa-check text-success"></i> Trading fee= 0%</span>
                    </p>
                </div>
                <div class="main-payment-form mt-4">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="" class="fw-bold mb-2">FullName</label>
                                <input type="text" class="form-control" value="<?=$name?>">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="" class="fw-bold mb-2">Email</label>
                                <input type="email" class="form-control" value="<?=$email?>">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="" class="fw-bold mb-2">Phone Number</label>
                                <input type="text" class="form-control" value="<?=$phone?>">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="" class="fw-bold mb-2">Select Price</label>
                                <select name="" id="" class="form-control">
                                    <option value="">--Select price range--</option>
                                </select>
                            </div>
                        </div>
                        <div class="no-refund">
                            <p>
                                <span>NO REFUND POLICY.</span>
                                <span>By subscribing to our Extreme Risk Category, you hereby accept that, all sales are
                                    final and you accept our No Refund Policy and are subject to CiooForex Trading Terms
                                    of Service.</span>
                            </p>
                        </div>
                        <div class="scribe-btn">
                            <button class="btn btn-success">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
</script>

</html>

<!-- <i class="fa-sharp fa-solid fa-circle"></i> -->
<!-- <i class="fa-sharp fa-solid fa-dollar-sign"></i> -->