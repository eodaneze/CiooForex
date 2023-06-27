<?php
$title = 'High Risk';
   require_once("./home_header.php");
   ?>
<div class="all-background">
    <?php
    
    require_once('./topNav.php');
    require_once('./home_navbar.php');
    require_once('./hero.php');
?>
    <style>
    .details p span {
        display: block;
        line-height: 2rem;
    }
    </style>
</div>
<!-- all extreme risk section -->

<?php
  if(isset($_GET['error'])){
      ?>
<script>
swal({
    title: "<?=urldecode($_GET['error'])?>",
    text: "check back",
    icon: "error",
    button: "Close",
});
</script>

<?php   
  }elseif(isset($_GET['success'])){
    ?>
<script>
swal({
    title: "<?=urldecode($_GET['success'])?>",
    text: "(Extreme Risk Category)",
    icon: "success",
    button: "Close",
});
</script>

<?php 
  }
?>
<div class="all-risk p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 risk-header">
                <h1>
                    <span>
                        Account management category
                    </span>
                    <span class="mb-4">
                        (High risk)
                    </span>
                </h1>
                <div class="details">
                    <p>
                        <span class="text-white"><i class="fa fa-check" style="color: var(--main);"></i>Equity =$200
                            -$1000</span>
                        <span class="text-white"><i class="fa fa-check" style="color: var(--main);"></i>
                            Risk = 80%</span>
                        <span class="text-white"><i class="fa fa-check" style="color: var(--main);"></i>Profit target=
                            300%k</span>
                        <span class="text-white"><i class="fa fa-check" style="color: var(--main);"></i>Duration = 1
                            week</span>
                        <span class="text-white"><i class="fa fa-check" style="color: var(--main);"></i> Contracts
                            duration = 1 month</span>
                        <span class="text-white"><i class="fa fa-check" style="color: var(--main);"></i>Trading fee=
                            0%</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="alert alert-att alert-dismissible fade show d-flex" role="alert">
                    <div>
                        <strong style="color: var(--main);">Attention!</strong> <br> This Registration is for High
                        risk
                        Account management category
                    </div>
                    <div>
                        <i class="fa fa-close" data-bs-dismiss="alert"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="risk-reg mt-5">
            <div class="form-content">
                <div class="main-form">

                    <form action="./includes/Extreme_Risk.php" method="post">
                        <div class="row">
                            <div class="col-lg-4 risk-form mb-4">
                                <label for="" class="text-white">FullName</label>
                                <input type="text" name="name">
                            </div>
                            <div class="col-lg-4 risk-form mb-4">
                                <label for="" class="text-white">Instagram Username</label>
                                <input type="text" name="in_user">
                            </div>
                            <div class="col-lg-4 risk-form mb-4">
                                <label for="" class="text-white">Email</label>
                                <input type="email" name="email" placeholder="example@gmail.com">
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Phone (Whatsapp)</label>
                                <input type="text" name="phone">
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Account Size</label>
                                <select name="acc_size" id="">
                                    <option class="bg-dark">--Select account size--</option>
                                    <option class="bg-dark">$20</option>
                                    <option class="bg-dark">$50</option>
                                    <option class="bg-dark">$100</option>
                                    <option class="bg-dark">$200</option>
                                    <option class="bg-dark">$500</option>
                                    <option class="bg-dark">$1000</option>
                                </select>
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Broker</label>
                                <select name="broker" id="">
                                    <option class="bg-dark">--Select Broker--</option>
                                    <option class="bg-dark">Exness</option>
                                </select>
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Leverage</label>
                                <select name="leverage" id="">
                                    <option class="bg-dark">--Select Leverage--</option>
                                    <option class="bg-dark">One to one</option>
                                </select>
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Platform</label>
                                <select name="platform" id="">
                                    <option class="bg-dark">--Select Platform--</option>
                                    <option class="bg-dark">Metatrader 4</option>
                                    <option class="bg-dark">Metatrader 5</option>
                                </select>
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Metatrader Login</label>
                                <input type="text" name="mlogin">
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Metatrader Password</label>
                                <input type="password" name="mpassword">
                            </div>
                            <div class="col-lg-6 risk-form mb-4">
                                <label for="" class="text-white">Category</label>
                                <select name="category" id="">
                                    <option class="bg-dark">--Select Category--</option>
                                    <option class="bg-dark">Extreme Risk</option>
                                </select>
                            </div>
                        </div>
                        <div class="terms">
                            <input type="checkbox" name="terms" id="" value="accepted">
                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="text-decoration-none text-white"> Accept
                                terms
                                and condition</a>
                        </div>
                        <div class="submit-btn mt-4">
                            <button class="btn" name="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<!--end  of all extreme risk section -->

<!-- terms -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Terms and Condition For Extreme Risk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>lorem400</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<?php
   require_once("./home_footer.php")
?>