<?php include("includes/meta.php"); ?>
<title>Contact Us | Loanitol</title>
</head>
<body>
    <?php include("includes/nav.php"); ?>
    <div class="hero-small--section-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <h6 class="h6-size col-sm-10 mb-0">
                        <span>Contact Us</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container">
        <div class="row d-flex align-items-center form-pd">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <h3>Interested in discussing?</h3>
                <form action="" method="post" id="contact-form">
                    <div class="row rowStyle">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter Your Name"
                                    name="name" required="">
                                <label for="floatingInput">Enter Your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="Enter Email Address" name="email" required="">
                                <label for="floatingInput">Enter Email Address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number"
                                    name="phone" oninput="validatePhoneNumber(event)" required="">
                                <label for="floatingInput">Enter Phone Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select form-control" id="inputDistrict" name="place"
                                    aria-label="Floating label select example" required="">
                                    <option value="" disabled="" selected="" hidden=""></option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Kasaragod">Kasaragod</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Kozhikode">Kozhikode</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Pathanamthitta">Pathanamthitta</option>
                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Wayanad">Wayanad</option>
                                </select>
                                <label for="floatingSelectGrid">Select Your Place</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-floating mb-3 form-floating-custom">
                                <select class="form-select form-control" id="inputLoan" name="loan"
                                    aria-label="Floating label select example" required="">
                                    <option value="" disabled="" selected="" hidden=""></option>
                                    <option value="Home Loan">Home Loan</option>
                                    <option value="Property Loan">Property Loan</option>
                                    <option value="Personal Loan">Personal Loan</option>
                                    <option value="Business Loan">Business Loan</option>
                                    <option value="Bridge Loan">Bridge Loan</option>
                                    <option value="Distress Funding">Distress Funding</option>
                                    <option value="Working Capital OD">Working Capital OD</option>
                                    <option value="Machinery Loan">Machinery Loan</option>
                                    <option value="Working Capital Term">Working Capital Term</option>
                                    <option value="Working Capital CC">Working Capital CC</option>
                                    <option value="Letter of Credit">Letter of Credit</option>
                                    <option value="Packing Credit">Packing Credit</option>
                                    <option value="Bank Guarantee">Bank Guarantee</option>
                                    <option value="CRE Loan">CRE Loan</option>
                                    <option value="Invoice Discounting">Invoice Discounting</option>
                                    <option value="Agri Loans">Agri Loans</option>
                                    <option value="Commercial Construction">Commercial Construction</option>
                                </select>
                                <label for="floatingSelectGrid">Select Loan Type</label>
                            </div>


                            <div class="form-floating mb-3 form-floating-custom">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    name="comments" required=""></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                            <button type="submit" class="mb-3 w-100 send-msg">Send Message
                                <span class="loading-text" style="display: none;"></span>
                                <span class="loader"></span>
                            </button>
                        </div>
                    </div>
                    <style>
                    .form-floating>.form-control:not(:placeholder-shown)~label,
                    .form-floating>.form-select~label {
                        transform: scale(1) translateY(0rem) translateX(0rem);
                        color: black;
                    }
                    </style>
                </form>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 address">
                <div>
                    <h6><img src="assets/contact/icons/address.svg" class="bordered-img"> Address</h6>
                    <ul>
                        <li>3rd Floor, VE Arcade,</li>
                        <li>Opp Vyaparabhavan, Palarivattom P.O,</li>
                        <li>Ernakulam, Pin 682025, Kerala.</li>
                    </ul>
                    <h6><img src="assets/contact/icons/phone.svg" class="bordered-img"> Contact us</h6>
                    <ul>
                        <li><a href="tel:+919090388883"> +91 9090388883</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="pb-2"> <img src="assets/contact/icons/location.svg" class="bordered-img"> Location:</h6>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.166387248151!2d76.30341091075796!3d10.003111290061172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d1a7546cdf5%3A0x533bf69a3613f27!2sVe%20Arcade%2C%20Sonia%20Nagar%2C%20Palarivattom%2C%20Ernakulam%2C%20Kerala%20682025!5e0!3m2!1sen!2sin!4v1737458867800!5m2!1sen!2sin"
                        style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/calculation-bottom.php"); ?>
    <?php include("includes/footer.php"); ?>
</body>
</html>