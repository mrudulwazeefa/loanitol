  <!--fixed screen bottom  -->
  <div class="fixed-buttons-md">
    <button type="button" class="btn-md-red d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#emicalculator">
      <img src="assets/home/icons/calculator.svg" alt="" class="">
    </button>
    <button type="button" class="btn-md-blue d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#quicklinks">
      <img src="assets/home/icons/loanitol-icon.svg" alt="" class="">
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="emicalculator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title text-white" id="exampleModalLabel">
            <img src="assets/home/icons/calculator.svg" alt="" class="me-3">
            EMI Calculator
          </h1>
          <button class="close-btn text-white" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
          </button>

        </div>
        <div class="modal-body">
          <ul class="nav nav-pills item_p" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#home-loan"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home <span>Loan</span></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#personal-loan"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Personal
                <span>Loan</span></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#business-loan"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Business
                <span>Loan</span></button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="home-loan" role="tabpanel" aria-labelledby="pills-home-tab"
              tabindex="0">
              <div class="container item_p pt-3">
                <div class="row d-flex align-items-center">
                  <div class="col-sm-8 col-6">
                    <h5>Loan Amount</h5>
                  </div>
                  <div class="col-sm-4 col-6">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1"
                      placeholder="₹ 63,63,63,637">
                  </div>
                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-10 col-9">
                    <h5>Interest Rate</h5>
                  </div>
                  <div class="col-sm-2 col-3">
                    <form action="">
                      <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6%">
                    </form>
                  </div>
                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-5 col-4">
                    <h5>Loan Tenure</h5>
                  </div>
                  <div class="col-sm-2 col-3">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6">
                  </div>
                  <div class="col-sm-5 col-5 switch-btn">
                    <div class="d-flex d-md-block p-0">
                      <button class="btn active flex-grow-1" type="button">Months</button>
                      <button class="btn flex-grow-1" type="button">Year</button>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <h6>Monthly Emi</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹12,91,88,166.02</h6>
                  </div>
                  <div class="col-8">
                    <h6>Principal Amount</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹63,63,63,637</h6>
                  </div>
                  <div class="col-8">
                    <h6>Interest Payable</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹7,11,49,26,324</h6>
                  </div>
                </div>
              </div>
              <div class="container item_p2">
                <div class="row ps-2 pe-3">
                  <div class="col-8">
                    <h6>Total Amount payable</h6>
                  </div>
                  <div class="col-4 pe-0">
                    <h6 class="text-end">₹7,75,12,89,961</h6>
                  </div>
                </div>
              </div>
              <div class="d-grid col-11 mx-auto">
                <button class="btn btn-explore" type="button">Explore Home Loan</button>
              </div>
            </div>
            <div class="tab-pane fade" id="personal-loan" role="tabpanel" aria-labelledby="pills-profile-tab"
              tabindex="0">
              <div class="container item_p pt-3">
                <div class="row d-flex align-items-center">
                  <div class="col-sm-8 col-6">
                    <h5>Loan Amount</h5>
                  </div>
                  <div class="col-sm-4 col-6">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1"
                      placeholder="₹ 63,63,63,637">
                  </div>
                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-10 col-9">
                    <h5>Interest Rate</h5>
                  </div>
                  <div class="col-sm-2 col-3">
                    <form action="">
                      <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6%">
                    </form>
                  </div>
                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-5 col-4">
                    <h5>Loan Tenure</h5>
                  </div>
                  <div class="col-sm-2 col-3">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6">
                  </div>
                  <div class="col-sm-5 col-5 switch-btn">
                    <div class="d-flex d-md-block p-0">
                      <button class="btn active flex-grow-1" type="button">Months</button>
                      <button class="btn flex-grow-1" type="button">Year</button>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <h6>Monthly Emi</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹12,91,88,166.02</h6>
                  </div>
                  <div class="col-8">
                    <h6>Principal Amount</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹63,63,63,637</h6>
                  </div>
                  <div class="col-8">
                    <h6>Interest Payable</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹7,11,49,26,324</h6>
                  </div>
                </div>
              </div>
              <div class="container item_p2">
                <div class="row ps-2 pe-3">
                  <div class="col-8">
                    <h6>Total Amount payable</h6>
                  </div>
                  <div class="col-4 pe-0">
                    <h6 class="text-end">₹7,75,12,89,961</h6>
                  </div>
                </div>
              </div>
              <div class="d-grid col-11 mx-auto">
                <button class="btn btn-explore" type="button">Explore Home Loan</button>
              </div>
            </div>

            <div class="tab-pane fade" id="business-loan" role="tabpanel" aria-labelledby="pills-contact-tab"
              tabindex="0">
              <div class="container item_p pt-3">
                <div class="row d-flex align-items-center">
                  <div class="col-sm-8 col-6">
                    <h5>Loan Amount</h5>
                  </div>
                  <div class="col-sm-4 col-6">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1"
                      placeholder="₹ 63,63,63,637">
                  </div>
                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-10 col-9">
                    <h5>Interest Rate</h5>
                  </div>
                  <div class="col-sm-2 col-3">
                    <form action="">
                      <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6%">
                    </form>
                  </div>
                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-5 col-4">
                    <h5>Loan Tenure</h5>
                  </div>
                  <div class="col-sm-2 col-3">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6">
                  </div>
                  <div class="col-sm-5 col-5 switch-btn">
                    <div class="d-flex d-md-block p-0">
                      <button class="btn active flex-grow-1" type="button">Months</button>
                      <button class="btn flex-grow-1" type="button">Year</button>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <input type="range" min="0" max="100" value="25" class="slider">
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <h6>Monthly Emi</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹12,91,88,166.02</h6>
                  </div>
                  <div class="col-8">
                    <h6>Principal Amount</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹63,63,63,637</h6>
                  </div>
                  <div class="col-8">
                    <h6>Interest Payable</h6>
                  </div>
                  <div class="col-4">
                    <h6 class="text-end">₹7,11,49,26,324</h6>
                  </div>
                </div>
              </div>
              <div class="container item_p2">
                <div class="row ps-2 pe-3">
                  <div class="col-8">
                    <h6>Total Amount payable</h6>
                  </div>
                  <div class="col-4 pe-0">
                    <h6 class="text-end">₹7,75,12,89,961</h6>
                  </div>
                </div>
              </div>
              <div class="d-grid col-11 mx-auto">
                <button class="btn btn-explore" type="button">Explore Home Loan</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="quicklinks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title text-white" id="exampleModalLabel">
            <img src="assets/home/icons/loanitol-icon.svg" alt="" class="me-3">
            Quick Links
          </h1>
          <button class="close-btn text-white" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa fa-times" aria-hidden="true"></i>
          </button>

        </div>
        <div class="modal-body">
          <div class="popup-content">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Check your Cibil</li>
              <li class="list-group-item">Become a Partner</li>
              <li class="list-group-item">Contact Us</li>
              <li class="list-group-item">Customer Loyality Program</li>
              <li class="list-group-item">Rate Conversion Tool</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- tablet and desktop -->
  <div class="fixed-buttons">
    <button class="btn btn-red" onclick="togglePopup('popup-red', 'popup-blue')"><img
        src="assets/home/icons/calculator.svg" alt="" class="me-3">EMI Calculator</button>
    <button class="btn btn-blue" onclick="togglePopup('popup-blue', 'popup-red')"><img
        src="assets/home/icons/loanitol-icon.svg" alt="" class="me-3">Quick Links</button>
  </div>
  <div class="popup" id="popup-red">
    <div class="popup-header">
      <span><img src="assets/home/icons/calculator.svg" alt="" class="me-3">EMI Calculator</span>
      <button class="close-btn" onclick="closePopup('popup-red')">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
    </div>
    <ul class="nav nav-pills item_p" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#home-loan"
          type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home Loan</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#personal-loan"
          type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Personal Loan</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#business-loan"
          type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Business Loan</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="home-loan" role="tabpanel" aria-labelledby="pills-home-tab"
        tabindex="0">
        <div class="container item_p pt-3">
          <div class="row d-flex align-items-center">
            <div class="col-sm-6">
              <h5>Loan Amount</h5>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="₹ 63,63,63,637">
            </div>
            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-sm-9">
              <h5>Interest Rate</h5>
            </div>
            <div class="col-sm-3">
              <form action="">
                <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6%">
              </form>
            </div>
            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-sm-4">
              <h5>Loan Tenure</h5>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6">
            </div>
            <div class="col-sm-5 switch-btn">
              <div class="d-grid d-md-block p-0">
                <button class="btn active flex-grow-1" type="button">Months</button>
                <button class="btn flex-grow-1" type="button">Year</button>
              </div>
            </div>

            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <h6>Monthly Emi</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹12,91,88,166.02</h6>
            </div>
            <div class="col-sm-8">
              <h6>Principal Amount</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹63,63,63,637</h6>
            </div>
            <div class="col-sm-8">
              <h6>Interest Payable</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹7,11,49,26,324</h6>
            </div>
          </div>
        </div>
        <div class="container item_p2">
          <div class="row ps-2 pe-3">
            <div class="col-sm-8">
              <h6>Total Amount payable</h6>
            </div>
            <div class="col-sm-4 pe-0">
              <h6 class="text-end">₹7,75,12,89,961</h6>
            </div>
          </div>
        </div>
        <div class="d-grid col-11 mx-auto">
          <button class="btn btn-explore" type="button">Explore Home Loan</button>
        </div>

        <script>
          document.querySelectorAll(".slider").forEach(slider => {
            slider.addEventListener("input", function () {
              let value = (this.value - this.min) / (this.max - this.min) * 100;
              this.style.background = `linear-gradient(to right, #d71920 0%, #d71920 ${value}%, #eee ${value}%, #eee 100%)`;
            });
          });
        </script>
      </div>
      <div class="tab-pane fade" id="personal-loan" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="container item_p pt-3">
          <div class="row d-flex align-items-center">
            <div class="col-sm-6">
              <h5>Loan Amount</h5>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="₹ 63,63,63,637">
            </div>
            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-sm-9">
              <h5>Interest Rate</h5>
            </div>
            <div class="col-sm-3">
              <form action="">
                <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6%">
              </form>
            </div>
            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-sm-4">
              <h5>Loan Tenure</h5>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6">
            </div>
            <div class="col-sm-5 switch-btn">
              <div class="d-grid d-md-block p-0">
                <button class="btn active flex-grow-1" type="button">Months</button>
                <button class="btn flex-grow-1" type="button">Year</button>
              </div>
            </div>

            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <h6>Monthly Emi</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹12,91,88,166.02</h6>
            </div>
            <div class="col-sm-8">
              <h6>Principal Amount</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹63,63,63,637</h6>
            </div>
            <div class="col-sm-8">
              <h6>Interest Payable</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹7,11,49,26,324</h6>
            </div>
          </div>
        </div>
        <div class="container item_p2">
          <div class="row ps-2 pe-3">
            <div class="col-sm-8">
              <h6>Total Amount payable</h6>
            </div>
            <div class="col-sm-4 pe-0">
              <h6 class="text-end">₹7,75,12,89,961</h6>
            </div>
          </div>
        </div>
        <div class="d-grid col-11 mx-auto">
          <button class="btn btn-explore" type="button">Explore Home Loan</button>
        </div>
      </div>

      <div class="tab-pane fade" id="business-loan" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <div class="container item_p pt-3">
          <div class="row d-flex align-items-center">
            <div class="col-sm-6">
              <h5>Loan Amount</h5>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="₹ 63,63,63,637">
            </div>
            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-sm-9">
              <h5>Interest Rate</h5>
            </div>
            <div class="col-sm-3">
              <form action="">
                <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6%">
              </form>
            </div>
            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-sm-4">
              <h5>Loan Tenure</h5>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" placeholder="6">
            </div>
            <div class="col-sm-5 switch-btn">
              <div class="d-grid d-md-block p-0">
                <button class="btn active flex-grow-1" type="button">Months</button>
                <button class="btn flex-grow-1" type="button">Year</button>
              </div>
            </div>

            <div class="col-sm-12">
              <input type="range" min="0" max="100" value="25" class="slider">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <h6>Monthly Emi</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹12,91,88,166.02</h6>
            </div>
            <div class="col-sm-8">
              <h6>Principal Amount</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹63,63,63,637</h6>
            </div>
            <div class="col-sm-8">
              <h6>Interest Payable</h6>
            </div>
            <div class="col-sm-4">
              <h6 class="text-end">₹7,11,49,26,324</h6>
            </div>
          </div>
        </div>
        <div class="container item_p2">
          <div class="row ps-2 pe-3">
            <div class="col-sm-8">
              <h6>Total Amount payable</h6>
            </div>
            <div class="col-sm-4 pe-0">
              <h6 class="text-end">₹7,75,12,89,961</h6>
            </div>
          </div>
        </div>
        <div class="d-grid col-11 mx-auto">
          <button class="btn btn-explore" type="button">Explore Home Loan</button>
        </div>
      </div>

    </div>
  </div>
  <div class="popup" id="popup-blue">
    <div class="popup-header">
      <span><img src="assets/home/icons/loanitol-icon.svg" alt="" class="me-3">Quick Links</span>
      <button class="close-btn" onclick="closePopup('popup-blue')">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
    </div>
    <div class="popup-content">
      <ul class="list-group list-group-flush">
        <a href="#">
          <li class="list-group-item">Check your Cibil</li>
        </a>
        <a href="#">
          <li class="list-group-item">Become a Partner</li>
        </a>
        <a href="#">
          <li class="list-group-item">Contact Us</li>
        </a>
        <a href="#">
          <li class="list-group-item">Customer Loyality Program</li>
        </a>
        <a href="#">
          <li class="list-group-item">Rate Conversion Tool</li>
        </a>
        <!--  -->
      </ul>
    </div>
  </div>