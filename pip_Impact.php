<?php
  $title = "Pip Impact";
  require_once('./home_header.php')
?>
 <link rel="stylesheet" type="text/css" href="./assets/css/pip_impact.css">
<body>
  <div class="all-background">
        <?php
          require_once('./topNav.php');
          require_once('./home_navbar.php');
          require_once('./hero.php');
        ?>

    </div>
    <div class="all-pip">
         <div class="pip-about">
             <h1 class="title">About Pip Impact</h1>
             <p class="about-text">
                <span>Pip impact program was first launched on july 1st 2022. The program mission and vision is to encourage young and amibitious traders by empowering them with capital and knowledge to start thier own trading and business journey, and also provide them with support in form of a permuim mentorship program, live trading section, business tips and cash prizes. The contest is not based on referral i.e it is not a referral contest as contestants will be asked to carryout different educational and informative task at each stage in the contest to help make them better traders.</span>
                <span>
                  Pip impact offers newbie traders and financial market enthusiasts a rare opportunity to master the act of trading with the help of industry's finest experienced traders.
                </span>
                <p class="benefit">The Premuim mentorship will cover...
                    <span><i class="fa fa-check"></i> Introduction to forex trading</span>
                    <span><i class="fa fa-check"></i> Technical Analysis</span>
                    <span><i class="fa fa-check"></i> Fundamental Analysis</span>
                    <span><i class="fa fa-check"></i> Institutional trading concepts</span>
                    <span><i class="fa fa-check"></i> Trading Psychology</span>
                    <span><i class="fa fa-check"></i> Simpler entry strategies and class on how to flip small account in the forex narket</span>
                </p>
             </p>
         </div>
        <div class="vision_mission">
             <div class="vision">
                 <h1 class="title">Vision</h1>
                 <div class="vision_content">
                    <p>Our vision is to help our students across the globe to have the right knowledge concerning the forex market and explore different wat to build thier financial life by offering easy to replicate business tips, trading strategies and marketing strategies.</p>
                 </div>
             </div>
             <div class="mission">
                 <h1 class="title">Mission</h1>
                 <div class="mission_content">
                    <p>Our mission is to help our student to get mastery over financial market and empowe them to be more self sufficient, allowing them to the pursuit of a passionate, fulfilling and purpose driven life by accerating thier growth to achieve excellence with an exclusive traning from a team of master educators committed to thier success.</p>
                 </div>
             </div>
        </div>

       <div class="reg_duration">
            <div class="pip_registration">
             <h1 class="title">Registration</h1>
             <div class="pip_registration_content">
                 <p>To enroll for <span>Pip Impact Program</span>, participants are expected to be 18years and above of age and a nationale of Nigeria or citizen of Nigeria. Registration fee is <i class="fa fa-naira-sign"></i>1000 Only</p>
             </div> 
           </div>
           <div class="duration">
                <h1 class="title">Duration</h1>
                <div class="duration_content">
                 <p>The Pip Impact program will last for 5weaks. During the said duration, the students will be mentored by over Four (4) trading experts who would empower them with the knowledge necessary to become a profitable trader</p>
             </div>
           </div>
       </div>

       <div class="voting_benefit">
            <div class="voting">
                <h1 class="title">Voting Stage</h1>
                <div class="voting_content">
                      <p>The Pip Impact program is splitted into five (5) votong stages. Each stage is handled by one trading export, and for a participant to qualify for the next stage, they are required to pass a quiz that will be set based on knowledge shared within the week and also the minimum required of votes for that stage.</p>
                      <p>Note: The voting stage is strictly monetory and a vote cost <i class="fa fa-naira-sign"></i>100 per vote</p>
                      <p class="prize">Winners of the pip impact program will be selected based on level of participation, quiz/assessment result and votes. The most outstanding student of the week standsthe chance of winning an amazing prizes such as: 
                        <span><i class="fa fa-check"></i> Mobile Phones</span>
                        <span><i class="fa fa-check"></i> Laptops</span>
                        <span><i class="fa fa-check"></i> Prop Firm Accounts and other gadgets</span>
                      </p>
                </div>
            </div>
            <div class="benefits">
                <h1 class="title">Benefits</h1>
                <div class="benefits_content">
                    <p class="benefit_list">Participants can take advantage of the numerous benfits associated to the pip impact program such as:
                         <span><i class="fa fa-check"></i> Certificate Of Participation</span>
                        <span><i class="fa fa-check"></i> Live trading section with CEO Cioo Forex Academy</span>
                        <span><i class="fa fa-check"></i> Customized T-shirt face cap & jotters</span>
                        <span><i class="fa fa-check"></i> One on one physical meeting with the CEO</span>
                        <span><i class="fa fa-check"></i> One (1) year mentorship for top 10 outstanding student</span>
                    </p>
                    <div class="cash_awards">
                         <div>
                             <p><i class="fa-solid fa-award"></i> Ist Runner Up <span>____</span></p>

                             <p>1000,000 Million Naira in funding</p>
                         </div>
                         <div>
                             <p><i class="fa-solid fa-award"></i> 2nd Runner Up <span>____</span></p>

                             <p>500,000 Thousand Naira in funding</p>
                         </div>
                         <div>
                             <p><i class="fa-solid fa-award"></i> 3rd Runner Up <span>____</span></p>

                             <p>200,000 Thousand Naira in funding</p>
                         </div>
                    </div>
                </div>
            </div>
       </div>

       <div class="register-btn">
           <button data-bs-toggle="modal" data-bs-target="#exampleModal">Register</button>

           <p>Click on the register button above ☝️ to register for the pip impact program now!!!</p>
       </div>
    </div>



<!-- register for pip impact -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pip Impact Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                     <input type="radio" name="p1" value="Yes"><span>Yes</span>
                     <input type="radio" name="p1" value="No"><span>No</span>
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Have You learnt forex before?</label><br>
                     <input type="radio" name="l1" value="Yes"><span>Yes</span>
                     <input type="radio" name="l1" value="No"><span>No</span>
                </div>

             </div>
              <div class="register-btn p-2 border-top">
                  <button  class="">Register</button>
              </div>
          </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

    <?php
  require_once('./home_footer.php')
?>
</body>
</html>