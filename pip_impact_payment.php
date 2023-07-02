<?php
    $title = "Pip Impact Payment";
    require_once('./home_header.php');
?>
<link rel="stylesheet" type="text/css" href="./assets/css/pip_impact_payment.css">
<script src="https://js.paystack.co/v1/inline.js"></script>
<body>
    <div class="all_pip_payment">
        <div class="payment_section">
                 <div class="payment_notice">
                      <div class="alert payment_alert alert-dismissible fade show" role="alert">
                          <strong class="attention">Attention!!</strong><br> <span>The details that you fill in the form below must be the same with the one you used during registration else your payment won't be captured by the admin</span>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                 </div>
              <div class="payment-box">
                  <div class="payment_header border-bottom p-3">
                       <img src="./assets/img/small-fev.png">
                       <h5>Payment For Pip Impact Program</h5>
                  </div>
                  <div class="pip_price border-bottom">
                       <h4>
                            <span>ngn - nigerian payment</span>
                            <span>ngn 1000</span>
                       </h4>
                       <p>Payment would be processed by <a class="text-primary" href="https://paystack.com/about">Paystack</a></p>
                  </div>
                  <form>
                       <div class="row">
                           <div class="col-12 mb-3">
                                <label>Name</label><br>
                                <input type="text" name="name" class="form-control">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-12 mb-4">
                                <label>Email</label><br>
                                <input type="email" name="email" class="form-control">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-12 mb-4">
                                <label>Whatsapp Number</label><br>
                                <input type="text" name="phone" class="form-control">
                           </div>
                       </div>
                       <div class="pay_btn">
                            <button class="btn btn-success">Pay Now</button>
                       </div>
                  </form>
            </div>
        </div>
          
    </div>

    <?php
     require_once('./home_footer.php');
     ?>
</body>