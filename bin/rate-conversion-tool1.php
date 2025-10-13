<?php include("includes/meta.php"); ?>
<title>Rate Conversion Tool Page | Loanitol</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
.card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: transform 0.3s ease;
    animation: fadeIn 0.8s ease-out;
    display: flex;
    flex-direction: column;
}

.card:hover {
    transform: translateY(-5px);
}

.card-header {
    background: linear-gradient(to right, #1b262c, #3282b8);
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.card-header::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle,
            rgba(255, 255, 255, 0.2) 0%,
            rgba(255, 255, 255, 0) 70%);
    pointer-events: none;
}

.card-header h2 {
    font-size: 1.6rem;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    position: relative;
}

.card-body {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
    animation: slideIn 0.5s ease-out;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #1b262c;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.95rem;
}

input,
select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 0.95rem;
    transition: all 0.3s;
}

input:focus,
select:focus {
    outline: none;
    border-color: #3282b8;
    box-shadow: 0 0 0 3px rgba(50, 130, 184, 0.2);
    transform: scale(1.02);
}

.input-with-icon {
    position: relative;
}

.input-with-icon i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #7f8c8d;
}

.input-with-icon input {
    padding-left: 45px;
}

.range-container {
    display: flex;
    align-items: center;
    gap: 12px;
}

.range-container input[type="range"] {
    flex: 1;
    height: 6px;
    appearance: none;
    -webkit-appearance: none;
    background: #e0e7ff;
    border-radius: 10px;
    outline: none;
}

.range-container input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    background: #3282b8;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s;
}

.range-container input[type="range"]::-webkit-slider-thumb:hover {
    transform: scale(1.2);
    background: #0f4c75;
}

.range-container span {
    min-width: 55px;
    text-align: center;
    font-weight: 600;
    background: #ecf0f1;
    padding: 4px 8px;
    border-radius: 5px;
    transition: all 0.3s;
    font-size: 0.9rem;
}

/* NEW: small numeric inputs to type rates/term */
.mini-input {
    width: 90px;
    padding: 8px 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 0.9rem;
}

.btn {
    display: block;
    width: 100%;
    padding: 14px;
    background: linear-gradient(to right, #3282b8, #0f4c75);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
    margin-top: auto;
}

.btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, #0f4c75, #1b262c);
    transition: all 0.4s;
    z-index: -1;
}

.btn:hover::before {
    left: 0;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 7px 20px rgba(0, 0, 0, 0.2);
}

.btn:disabled {
    background: #bbbbbb;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.btn:disabled::before {
    display: none;
}

.btn-secondary {
    background: linear-gradient(to right, #6c757d, #495057);
    margin-top: 10px;
}

.btn-secondary::before {
    background: linear-gradient(to right, #495057, #343a40);
}

.btn-secondary:hover {
    transform: translateY(-2px);
    box-shadow: 0 7px 20px rgba(0, 0, 0, 0.2);
}

.results-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    padding: 20px;
    animation: fadeIn 0.8s ease-out 0.2s;
    animation-fill-mode: backwards;
    display: flex;
    flex-direction: column;
}

.results-header {
    text-align: center;
    margin-bottom: 20px;
    color: #1b262c;
}

.results-header h2 {
    font-size: 1.6rem;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.comparison-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 20px;
}

.loan-box {
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    padding: 20px;
    text-align: center;
    flex: 1;
    min-width: 230px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: popIn 0.5s ease-out;
}

.loan-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.loan-box.current {
    border-top: 4px solid #3282b8;
}

.loan-box.new {
    border-top: 4px solid #5cb85c;
}

.loan-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: #1b262c;
}

.interest-rate {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 12px;
    background: linear-gradient(to right, #3282b8, #1b262c);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.new .interest-rate {
    background: linear-gradient(to right, #5cb85c, #27ae60);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.loan-value {
    font-size: 1.3rem;
    font-weight: 600;
    margin: 12px 0;
    color: #1b262c;
    animation: fadeIn 0.5s ease-out;
}

.loan-value span {
    font-size: 0.9rem;
    color: #7f8c8d;
    display: block;
    margin-top: 4px;
    font-weight: normal;
}

.savings-container {
    background: linear-gradient(to right, #ff9a00, #ff5e00);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    margin-top: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    animation: pulse 2s infinite;
}

.savings-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: white;
    margin-bottom: 12px;
}

.savings-amount {
    font-size: 2rem;
    font-weight: 800;
    color: white;
    margin-bottom: 8px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.savings-description {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.5;
    margin-top: 8px;
}

.summary {
    margin-top: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #3282b8;
    animation: slideIn 0.5s ease-out;
}

.summary h3 {
    margin-bottom: 12px;
    color: #1b262c;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1.1rem;
}

.summary p {
    line-height: 1.5;
    margin-bottom: 8px;
    font-size: 0.95rem;
}

.highlight {
    font-weight: 700;
    color: #e74c3c;
}

.rupee-symbol {
    font-family: Arial, sans-serif;
    font-weight: bold;
}

.placeholder {
    color: #95a5a6;
    font-style: italic;
}

.info-message {
    background-color: #e3f2fd;
    border-left: 4px solid #2196f3;
    padding: 12px;
    border-radius: 4px;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 8px;
    animation: slideIn 0.5s ease-out;
    font-size: 0.9rem;
}

.info-message i {
    color: #2196f3;
    font-size: 1.2rem;
}

.error-message {
    color: #e74c3c;
    font-size: 0.85rem;
    margin-top: 5px;
    display: none;
}

/* Contact Form */
.contact-form {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 20px;
    margin-top: 20px;
    border-left: 4px solid #5cb85c;
    animation: slideIn 0.5s ease-out;
}

.contact-form h3 {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
    color: #1b262c;
    font-size: 1.1rem;
}

.contact-form p {
    margin-bottom: 15px;
    color: #555;
    font-size: 0.95rem;
}

/* Testimonials */
.testimonials {
    margin-top: 20px;
    padding: 15px;
    background: linear-gradient(to right, #1b262c, #0f4c75);
    border-radius: 10px;
    color: white;
    width: 100%;
    max-width: 1200px;
}

.testimonials h3 {
    text-align: center;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 1.3rem;
}

.testimonial {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 12px;
}

.testimonial:last-child {
    margin-bottom: 0;
}

.testimonial-text {
    font-style: italic;
    margin-bottom: 8px;
    font-size: 0.95rem;
}

.testimonial-author {
    text-align: right;
    font-weight: 600;
    color: #ffcc00;
    font-size: 0.9rem;
}

/* Loan Type Selector */
.loan-type-selector {
    display: flex;
    gap: 8px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.loan-type {
    flex: 1;
    min-width: 90px;
    padding: 10px 8px;
    text-align: center;
    background: #e9f7fe;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
    border: 2px solid transparent;
    font-size: 0.85rem;
}

.loan-type:hover {
    background: #d1f0fd;
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.loan-type.active {
    background: #b3e5fc;
    border-color: #0288d1;
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.loan-type i {
    font-size: 1.2rem;
    margin-bottom: 5px;
    color: #0288d1;
}

.loan-type .type-name {
    font-weight: 600;
    color: #01579b;
    font-size: 0.9rem;
}

.loan-type .type-rate {
    font-size: 0.8rem;
    color: #0288d1;
    margin-top: 4px;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes popIn {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }

    70% {
        transform: scale(1.05);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.02);
    }

    100% {
        transform: scale(1);
    }
}

@keyframes countUp {
    from {
        transform: scale(1.2);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }
}

.counting {
    animation: countUp 0.5s ease-out;
}

/* Footer */
.footer {
    text-align: center;
    color: white;
    margin-top: 20px;
    padding: 15px;
    font-size: 0.85rem;
    opacity: 0.8;
    width: 100%;
    max-width: 1200px;
}

.contact-info {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 8px;
    flex-wrap: wrap;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.9rem;
}

/* Compact layout adjustments */
.compact-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 15px;
}

.compact-item {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 10px;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.compact-title {
    font-size: 0.85rem;
    color: #7f8c8d;
    margin-bottom: 5px;
}

.compact-value {
    font-size: 1.1rem;
    font-weight: 700;
    color: #1b262c;
}

.compact-highlight {
    color: #27ae60;
}

.compact-negative {
    color: #e74c3c;
}

/* Chart container - Reduced height and optimized */
.chart-container {
    background: white;
    border-radius: 10px;
    padding: 15px;
    margin: 15px 0;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    position: relative;
    height: 220px;
    /* Reduced from 250px */
}

.chart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    /* Reduced from 15px */
}

.chart-title {
    font-size: 1rem;
    /* Reduced from 1.1rem */
    font-weight: 600;
    color: #1b262c;
    display: flex;
    align-items: center;
    gap: 8px;
}

.chart-switcher {
    display: flex;
    gap: 6px;
    /* Reduced from 8px */
}

.chart-btn {
    background: #e9f7fe;
    border: none;
    padding: 5px 10px;
    /* Reduced from 6px 12px */
    border-radius: 20px;
    font-size: 0.8rem;
    /* Reduced from 0.85rem */
    cursor: pointer;
    transition: all 0.3s;
}

.chart-btn.active {
    background: #3282b8;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .loan-type {
        min-width: calc(50% - 8px);
    }

    .comparison-container {
        flex-direction: column;
    }

    .header h1 {
        font-size: 1.8rem;
    }

    .header p {
        font-size: 1rem;
    }

    .chart-container {
        height: 190px;
        /* Reduced from 200px */
    }
}

@media (max-width: 480px) {
    .container {
        gap: 15px;
    }

    .loan-box {
        min-width: 100%;
    }

    .header h1 {
        font-size: 1.6rem;
    }

    .card-body {
        padding: 15px;
    }

    .results-card {
        padding: 15px;
    }

    .chart-container {
        height: 170px;
        /* Reduced from 180px */
        padding: 10px;
    }
}

#calculateBtn {
    margin-top: 4px !important;
    margin-bottom: 12px !important;
}
</style>
</head>

<body>
    <?php include("includes/nav.php"); ?>

    <div class="hero-section-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8 col-md-8">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active" aria-current="page">Rate Conversion Tool</li>
                        </ol>
                    </nav>
                    <h5 class="h5-size col-sm-12">
                        Smart Loan Rate Comparison
                    </h5>
                    <p style="color: #221E1E">Compare your current loan rates with better options and see how much you
                        can save
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="assets/fd-calculator/banner.svg" height="256px" alt="Referral Partner Banner">
                </div>
            </div>
        </div>
    </div>


    <div class="container article-container py-2 mt-5 mb-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2><i class="fas fa-calculator"></i> Loan Details</h2>
                        <p>Enter your current loan information and desired new rate</p>
                    </div>
                    <div class="card-body">
                        <div class="info-message">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                Enter your loan details to see potential savings. Our experts are
                                ready to help you save!
                            </div>
                        </div>

                        <div class="loan-type-selector">
                            <div class="loan-type active" data-type="home" data-rate="7.2">
                                <i class="fas fa-home"></i>
                                <div class="type-name">Home Loan</div>
                                <div class="type-rate">From 7.20%</div>
                            </div>
                            <div class="loan-type" data-type="personal" data-rate="10.5">
                                <i class="fas fa-user"></i>
                                <div class="type-name">Personal Loan</div>
                                <div class="type-rate">From 10.50%</div>
                            </div>
                            <div class="loan-type" data-type="car" data-rate="8.0">
                                <i class="fas fa-car"></i>
                                <div class="type-name">Car Loan</div>
                                <div class="type-rate">From 8.00%</div>
                            </div>
                            <div class="loan-type" data-type="education" data-rate="8.5">
                                <i class="fas fa-graduation-cap"></i>
                                <div class="type-name">Education Loan</div>
                                <div class="type-rate">From 8.50%</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="loanAmount"><i class="fas fa-money-bill-wave"></i> Loan Amount (₹)</label>
                            <div class="input-with-icon">
                                <i class="fas fa-rupee-sign"></i>
                                <input type="number" id="loanAmount" min="10000" step="10000"
                                    placeholder="Enter loan amount" value="5000000" />
                            </div>
                            <div class="error-message" id="loanAmountError">
                                Please enter a valid loan amount (min ₹10,000)
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="currentRate"><i class="fas fa-percentage"></i> Current Interest Rate</label>
                            <div class="range-container">
                                <input type="range" id="currentRate" min="1" max="20" step="0.1" value="8.5" />
                                <span id="currentRateValue">8.5%</span>
                                <!-- NEW: direct entry for current interest -->
                                <input type="number" id="currentRateInput" class="mini-input" min="0" max="99"
                                    step="0.01" value="8.5" aria-label="Current Interest (%)" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="newRate"><i class="fas fa-sync-alt"></i> New Interest Rate</label>
                            <div class="range-container">
                                <input type="range" id="newRate" min="1" max="20" step="0.1" value="7.2" />
                                <span id="newRateValue">7.2%</span>
                                <!-- NEW: direct entry for new interest -->
                                <input type="number" id="newRateInput" class="mini-input" min="0" max="99" step="0.01"
                                    value="7.2" aria-label="New Interest (%)" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="loanTerm"><i class="fas fa-clock"></i> Loan Term (Years)</label>
                            <select id="loanTerm">
                                <option value="5">5 Years</option>
                                <option value="10">10 Years</option>
                                <option value="15" selected>15 Years</option>
                                <option value="20">20 Years</option>
                                <option value="25">25 Years</option>
                                <option value="30">30 Years</option>
                            </select>
                            <!-- NEW: direct entry for term in years -->
                            <div style="margin-top: 8px">
                                <input type="number" id="loanTermInput" class="mini-input" min="1" max="40" step="1"
                                    value="15" aria-label="Loan Term (Years)" />
                                Years
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="extraPayment"><i class="fas fa-plus-circle"></i> Extra Monthly Payment
                                (₹)</label>
                            <div class="input-with-icon">
                                <i class="fas fa-rupee-sign"></i>
                                <input type="number" id="extraPayment" min="0" step="100" placeholder="Optional"
                                    value="0" />
                            </div>
                        </div>

                        <button id="calculateBtn" class="btn">
                            <i class="fas fa-calculator"></i> Calculate Savings
                        </button>

                        <!-- NEW "Get Expert Advice" BUTTON ADDED HERE -->
                        <button id="getExpertBtn" class="btn btn-secondary">
                            <i class="fas fa-headset"></i> Get Expert Advice
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="results-card">
                    <div class="results-header">
                        <h2><i class="fas fa-chart-line"></i> Comparison Results</h2>
                        <p>See how much you could save with a better interest rate</p>
                    </div>

                    <!-- Compact Summary Section -->
                    <div class="compact-layout">
                        <div class="compact-item">
                            <div class="compact-title">Monthly Savings</div>
                            <div class="compact-value compact-highlight" id="compactMonthly">
                                ₹3,782
                            </div>
                        </div>
                        <div class="compact-item">
                            <div class="compact-title">Interest Savings</div>
                            <div class="compact-value compact-highlight" id="compactInterest">
                                ₹6,80,760
                            </div>
                        </div>
                        <div class="compact-item">
                            <div class="compact-title">New Monthly Payment</div>
                            <div class="compact-value" id="compactPayment">₹45,499</div>
                        </div>
                        <div class="compact-item">
                            <div class="compact-title">Term Reduction</div>
                            <div class="compact-value" id="compactTerm">0 Months</div>
                        </div>
                    </div>

                    <div class="comparison-container">
                        <div class="loan-box current">
                            <div class="loan-title">Current Loan</div>
                            <div class="interest-rate">8.50%</div>
                            <div class="loan-value">
                                ₹49,281
                                <span>Monthly Payment</span>
                            </div>
                            <div class="loan-value">
                                ₹88,70,580
                                <span>Total Payment</span>
                            </div>
                            <div class="loan-value">
                                ₹38,70,580
                                <span>Total Interest</span>
                            </div>
                        </div>

                        <div class="loan-box new">
                            <div class="loan-title">New Loan</div>
                            <div class="interest-rate">7.20%</div>
                            <div class="loan-value">
                                ₹45,499
                                <span>Monthly Payment</span>
                            </div>
                            <div class="loan-value">
                                ₹81,89,820
                                <span>Total Payment</span>
                            </div>
                            <div class="loan-value">
                                ₹31,89,820
                                <span>Total Interest</span>
                            </div>
                        </div>
                    </div>

                    <!-- Chart Container with reduced height and optimized layout -->
                    <div class="chart-container">
                        <div class="chart-header">
                            <div class="chart-title">
                                <i class="fas fa-chart-pie"></i>
                                <span id="chartTitle">Interest vs Principal Comparison</span>
                            </div>
                            <div class="chart-switcher">
                                <button class="chart-btn active" data-chart="comparison">
                                    Comparison
                                </button>
                                <button class="chart-btn" data-chart="savings">Savings</button>
                                <button class="chart-btn" data-chart="breakdown">
                                    Breakdown
                                </button>
                            </div>
                        </div>
                        <canvas id="savingsChart"></canvas>
                    </div>

                    <div class="savings-container">
                        <div class="savings-title">Potential Savings</div>
                        <div class="savings-amount">₹6,80,760</div>
                        <div class="savings-description">
                            You could save ₹3,782 per month and ₹6,80,760 in total interest
                        </div>
                    </div>

                    <!-- Contact form with ID added -->
                    <div id="contactForm" class="contact-form">
                        <h3><i class="fas fa-user-tie"></i> Get Your Personalized Offer</h3>
                        <p>
                            Enter your details and our loan specialist will contact you with the
                            best offer
                        </p>
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Full Name</label>
                            <input type="text" id="name" placeholder="Enter your full name" />
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                            <input type="tel" id="phone" placeholder="Enter your phone number" />
                        </div>
                        <button id="contactBtn" class="btn">
                            <i class="fas fa-paper-plane"></i> Get Expert Advice
                        </button>
                    </div>

                    <div class="summary">
                        <h3><i class="fas fa-lightbulb"></i> Summary</h3>
                        <p>
                            By reducing your interest rate from
                            <span class="highlight">8.50%</span> to
                            <span class="highlight">7.20%</span> on a
                            <span class="highlight">₹50,00,000</span> loan:
                        </p>
                        <p>
                            - Your monthly payment would decrease by
                            <span class="highlight">₹3,782</span>
                        </p>
                        <p>
                            - You would save <span class="highlight">₹6,80,760</span> in total
                            interest payments
                        </p>
                        <p>- The loan would be paid off in 15 years</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <h3><i class="fas fa-comment-dots"></i> What Our Customers Say</h3>
        <div class="testimonial">
            <div class="testimonial-text">
                "By switching my home loan, I saved over ₹6 lakhs in interest. The
                process was smooth and the team was extremely helpful!"
            </div>
            <div class="testimonial-author">- Rajesh Kumar, Mumbai</div>
        </div>
        <div class="testimonial">
            <div class="testimonial-text">
                "The loan comparison tool helped me realize how much I could save. The
                experts helped me reduce my EMI by ₹4,200 per month."
            </div>
            <div class="testimonial-author">- Priya Sharma, Delhi</div>
        </div>
        <div class="testimonial">
            <div class="testimonial-text">
                "The visual savings chart made it crystal clear how much I'd save.
                Ended up switching and saving ₹5,500 monthly!"
            </div>
            <div class="testimonial-author">- Amit Patel, Bangalore</div>
        </div>
    </div>
    </div>
    <script>
    // Format number to Indian Rupees
    function formatRupees(amount) {
        if (isNaN(amount)) return "₹0";
        return "₹" + amount.toLocaleString("en-IN");
    }

    // Update slider values
    document
        .getElementById("currentRate")
        .addEventListener("input", function() {
            document.getElementById("currentRateValue").textContent =
                this.value + "%";
            // sync to numeric input
            document.getElementById("currentRateInput").value = this.value;
            updateResults();
        });

    document.getElementById("newRate").addEventListener("input", function() {
        document.getElementById("newRateValue").textContent = this.value + "%";
        // sync to numeric input
        document.getElementById("newRateInput").value = this.value;
        updateResults();
    });

    // NEW: direct numeric inputs sync back to sliders
    document
        .getElementById("currentRateInput")
        .addEventListener("input", function() {
            const v = Math.max(0, Math.min(99, parseFloat(this.value) || 0));
            document.getElementById("currentRate").value = v;
            document.getElementById("currentRateValue").textContent = v + "%";
            updateResults();
        });

    document
        .getElementById("newRateInput")
        .addEventListener("input", function() {
            const v = Math.max(0, Math.min(99, parseFloat(this.value) || 0));
            document.getElementById("newRate").value = v;
            document.getElementById("newRateValue").textContent = v + "%";
            updateResults();
        });

    // Listen to all input changes
    document
        .getElementById("loanAmount")
        .addEventListener("input", updateResults);
    document
        .getElementById("loanTerm")
        .addEventListener("change", function() {
            // sync select to numeric term input
            document.getElementById("loanTermInput").value = this.value;
            updateResults();
        });
    document
        .getElementById("extraPayment")
        .addEventListener("input", updateResults);

    // NEW: numeric term input syncs back to select
    document
        .getElementById("loanTermInput")
        .addEventListener("input", function() {
            const years = Math.max(1, Math.min(40, parseInt(this.value) || 0));
            // try to match an existing option; if not present, keep select value closest
            const termSelect = document.getElementById("loanTerm");
            const options = Array.from(termSelect.options).map((o) =>
                parseInt(o.value)
            );
            if (options.includes(years)) {
                termSelect.value = String(years);
            } else {
                // if the entered year isn't an option, keep the current select value unchanged
                // (calculation will still use the entered year via this input -> we sync summary by setting select when possible)
                // No structural change as requested
            }
            updateResults();
        });

    // Loan type selection
    const loanTypes = document.querySelectorAll(".loan-type");
    loanTypes.forEach((type) => {
        type.addEventListener("click", function() {
            loanTypes.forEach((t) => t.classList.remove("active"));
            this.classList.add("active");
            document.getElementById("newRate").value = this.dataset.rate;
            document.getElementById("newRateValue").textContent =
                this.dataset.rate + "%";
            document.getElementById("newRateInput").value = this.dataset.rate; // sync
            updateResults();
        });
    });

    // Contact button
    document
        .getElementById("contactBtn")
        .addEventListener("click", function() {
            const name = document.getElementById("name").value;
            const phone = document.getElementById("phone").value;

            if (!name || !phone) {
                alert("Please enter your name and phone number");
                return;
            }

            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            this.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-check"></i> Request Sent!';
                alert(
                    `Thank you ${name}! Our loan specialist will contact you at ${phone} shortly.`
                );
            }, 1500);
        });

    // Initialize chart
    let savingsChart;
    const ctx = document.getElementById("savingsChart").getContext("2d");

    // Chart switcher buttons
    const chartBtns = document.querySelectorAll(".chart-btn");
    chartBtns.forEach((btn) => {
        btn.addEventListener("click", function() {
            chartBtns.forEach((b) => b.classList.remove("active"));
            this.classList.add("active");
            document.getElementById("chartTitle").textContent =
                this.dataset.chart === "comparison" ?
                "Interest vs Principal Comparison" :
                this.dataset.chart === "savings" ?
                "Cumulative Savings Over Time" :
                "Monthly Payment Breakdown";
            updateChart(this.dataset.chart);
        });
    });

    // Function to create/update chart
    function updateChart(type) {
        // Get values from form
        const loanAmount =
            parseFloat(document.getElementById("loanAmount").value) || 0;
        const currentRate =
            parseFloat(document.getElementById("currentRate").value) || 0;
        const newRate =
            parseFloat(document.getElementById("newRate").value) || 0;
        const loanTerm =
            parseInt(document.getElementById("loanTermInput").value) ||
            parseInt(document.getElementById("loanTerm").value) ||
            0; // use typed term if given

        // Only create chart if we have valid inputs
        if (loanAmount <= 0 || loanTerm <= 0) {
            return;
        }

        // Calculate monthly payments
        const currentMonthly = calculateMonthlyPayment(
            loanAmount,
            currentRate,
            loanTerm
        );
        const newMonthly = calculateMonthlyPayment(
            loanAmount,
            newRate,
            loanTerm
        );

        // Calculate total payments
        const currentTotal = currentMonthly * (loanTerm * 12);
        const newTotal = newMonthly * (loanTerm * 12);

        // Calculate interest amounts
        const currentInterest = currentTotal - loanAmount;
        const newInterest = newTotal - loanAmount;

        // Calculate savings
        const monthlySavings = currentMonthly - newMonthly;
        const interestSavings = currentInterest - newInterest;

        // Destroy existing chart if it exists
        if (savingsChart) {
            savingsChart.destroy();
        }

        // Create chart based on selected type
        if (type === "comparison") {
            savingsChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Current Loan", "New Loan"],
                    datasets: [{
                            label: "Principal Amount",
                            data: [loanAmount, loanAmount],
                            backgroundColor: "#3282b8",
                        },
                        {
                            label: "Total Interest",
                            data: [currentInterest, newInterest],
                            backgroundColor: currentInterest > newInterest ? "#5cb85c" : "#e74c3c",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            stacked: true,
                            ticks: {
                                font: {
                                    size: 11,
                                },
                            },
                        },
                        y: {
                            stacked: true,
                            ticks: {
                                font: {
                                    size: 10,
                                },
                                callback: function(value) {
                                    return "₹" + (value / 100000).toFixed(1) + "L";
                                },
                            },
                        },
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.dataset.label || "";
                                    const value = context.raw;
                                    return `${label}: ${formatRupees(Math.round(value))}`;
                                },
                            },
                        },
                        legend: {
                            position: "top",
                            labels: {
                                font: {
                                    size: 11,
                                },
                            },
                        },
                    },
                    layout: {
                        padding: 8,
                    },
                },
            });
        } else if (type === "savings") {
            // Generate cumulative savings data
            const months = loanTerm * 12;
            const savingsData = [];
            for (let i = 1; i <= months; i++) {
                savingsData.push(monthlySavings * i);
            }

            // Create timeline chart
            savingsChart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: Array.from({
                        length: months
                    }, (_, i) => i + 1),
                    datasets: [{
                        label: "Cumulative Savings",
                        data: savingsData,
                        borderColor: "#27ae60",
                        backgroundColor: "rgba(39, 174, 96, 0.1)",
                        fill: true,
                        tension: 0.3,
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: "Months",
                                font: {
                                    size: 11,
                                },
                            },
                            ticks: {
                                font: {
                                    size: 10,
                                },
                            },
                        },
                        y: {
                            title: {
                                display: true,
                                text: "Savings (₹)",
                                font: {
                                    size: 11,
                                },
                            },
                            ticks: {
                                font: {
                                    size: 10,
                                },
                                callback: function(value) {
                                    if (value >= 100000) {
                                        return "₹" + (value / 100000).toFixed(1) + "L";
                                    }
                                    return "₹" + value;
                                },
                            },
                        },
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const value = context.raw;
                                    return `Savings: ${formatRupees(Math.round(value))}`;
                                },
                                title: function(context) {
                                    const months = context[0].dataIndex + 1;
                                    const years = Math.floor(months / 12);
                                    const remainingMonths = months % 12;
                                    let title = `${months} months`;
                                    if (years > 0) {
                                        title = `${years} year${years > 1 ? "s" : ""}`;
                                        if (remainingMonths > 0) {
                                            title += ` ${remainingMonths} month${
                            remainingMonths > 1 ? "s" : ""
                          }`;
                                        }
                                    }
                                    return title;
                                },
                            },
                        },
                        legend: {
                            labels: {
                                font: {
                                    size: 11,
                                },
                            },
                        },
                    },
                    layout: {
                        padding: 8,
                    },
                },
            });
        } else {
            // Payment breakdown chart
            savingsChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: ["Principal", "Interest"],
                    datasets: [{
                            label: "Current Loan",
                            data: [loanAmount, currentInterest],
                            backgroundColor: ["#3282b8", "#bbbbbb"],
                            borderWidth: 0,
                        },
                        {
                            label: "New Loan",
                            data: [loanAmount, newInterest],
                            backgroundColor: ["#5cb85c", "#bbbbbb"],
                            borderWidth: 0,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: "60%",
                    plugins: {
                        legend: {
                            position: "top",
                            labels: {
                                font: {
                                    size: 11,
                                },
                            },
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || "";
                                    const value = context.raw;
                                    return `${label}: ${formatRupees(Math.round(value))} (${(
                        (value /
                          context.dataset.data.reduce((a, b) => a + b, 0)) *
                        100
                      ).toFixed(1)}%)`;
                                },
                            },
                        },
                    },
                    layout: {
                        padding: 8,
                    },
                },
            });
        }
    }

    // Update results
    function updateResults() {
        // Get values from form
        const loanAmount =
            parseFloat(document.getElementById("loanAmount").value) || 0;
        const currentRate =
            parseFloat(document.getElementById("currentRate").value) || 0;
        const newRate =
            parseFloat(document.getElementById("newRate").value) || 0;
        const loanTerm =
            parseInt(document.getElementById("loanTermInput").value) ||
            parseInt(document.getElementById("loanTerm").value) ||
            0;
        const extraPayment =
            parseFloat(document.getElementById("extraPayment").value) || 0;

        // Only calculate if we have valid inputs
        if (loanAmount <= 0 || loanTerm <= 0) {
            return;
        }

        // Calculate monthly payments
        const currentMonthly = calculateMonthlyPayment(
            loanAmount,
            currentRate,
            loanTerm
        );
        const newMonthly = calculateMonthlyPayment(
            loanAmount,
            newRate,
            loanTerm
        );

        // Calculate total payments
        const currentTotal = currentMonthly * (loanTerm * 12);
        const newTotal = newMonthly * (loanTerm * 12);

        // Calculate interest amounts
        const currentInterest = currentTotal - loanAmount;
        const newInterest = newTotal - loanAmount;

        // Calculate savings
        const monthlySavings = currentMonthly - newMonthly;
        const interestSavings = currentInterest - newInterest;

        // Update results display
        document.querySelector(".current .interest-rate").textContent =
            currentRate.toFixed(2) + "%";
        document.querySelector(".new .interest-rate").textContent =
            newRate.toFixed(2) + "%";

        // Update the values without animation
        document.querySelector(".current .loan-value:nth-child(3)").innerHTML =
            formatRupees(Math.round(currentMonthly)) +
            "<span>Monthly Payment</span>";
        document.querySelector(".current .loan-value:nth-child(4)").innerHTML =
            formatRupees(Math.round(currentTotal)) + "<span>Total Payment</span>";
        document.querySelector(".current .loan-value:nth-child(5)").innerHTML =
            formatRupees(Math.round(currentInterest)) +
            "<span>Total Interest</span>";

        document.querySelector(".new .loan-value:nth-child(3)").innerHTML =
            formatRupees(Math.round(newMonthly)) + "<span>Monthly Payment</span>";
        document.querySelector(".new .loan-value:nth-child(4)").innerHTML =
            formatRupees(Math.round(newTotal)) + "<span>Total Payment</span>";
        document.querySelector(".new .loan-value:nth-child(5)").innerHTML =
            formatRupees(Math.round(newInterest)) + "<span>Total Interest</span>";

        // Update compact summary
        document.getElementById("compactMonthly").textContent = formatRupees(
            Math.round(monthlySavings)
        );
        document.getElementById("compactInterest").textContent = formatRupees(
            Math.round(interestSavings)
        );
        document.getElementById("compactPayment").textContent = formatRupees(
            Math.round(newMonthly)
        );

        // Update savings section
        document.querySelector(".savings-amount").textContent = formatRupees(
            Math.round(interestSavings)
        );

        // Handle savings description text based on savings value
        let monthlyText, interestText;
        if (monthlySavings >= 0) {
            monthlyText = `save ${formatRupees(
            Math.round(monthlySavings)
          )} per month`;
        } else {
            monthlyText = `pay ${formatRupees(
            Math.round(-monthlySavings)
          )} more per month`;
        }

        if (interestSavings >= 0) {
            interestText = `save ${formatRupees(
            Math.round(interestSavings)
          )} in total interest`;
            document.querySelector(".savings-container").style.background =
                "linear-gradient(to right, #5cb85c, #27ae60)";
        } else {
            interestText = `pay ${formatRupees(
            Math.round(-interestSavings)
          )} more in total interest`;
            document.querySelector(".savings-container").style.background =
                "linear-gradient(to right, #e74c3c, #c0392b)";
        }

        document.querySelector(
            ".savings-description"
        ).textContent = `You could ${monthlyText} and ${interestText}`;

        // Update summary
        document.querySelector(".summary").innerHTML = `
                <h3><i class="fas fa-lightbulb"></i> Summary</h3>
                <p>By ${
                  currentRate > newRate
                    ? "reducing"
                    : currentRate < newRate
                    ? "increasing"
                    : "changing"
                } your interest rate from <span class="highlight">${currentRate.toFixed(
          2
        )}%</span> to <span class="highlight">${newRate.toFixed(
          2
        )}%</span> on a <span class="highlight">${formatRupees(
          loanAmount
        )}</span> loan:</p>
                <p>- Your monthly payment would ${
                  monthlySavings >= 0 ? "decrease" : "increase"
                } by <span class="highlight">${formatRupees(
          Math.abs(Math.round(monthlySavings))
        )}</span></p>
                <p>- You would ${
                  interestSavings >= 0 ? "save" : "pay"
                } <span class="highlight">${formatRupees(
          Math.abs(Math.round(interestSavings))
        )}</span> in total interest payments</p>
                <p>- The loan would be paid off in ${loanTerm} years</p>
            `;

        // Update chart
        const activeChart =
            document.querySelector(".chart-btn.active").dataset.chart;
        updateChart(activeChart);
    }

    // Function to calculate monthly payment
    function calculateMonthlyPayment(principal, annualRate, years) {
        if (principal <= 0 || years <= 0 || annualRate <= 0) return 0;

        const monthlyRate = annualRate / 100 / 12;
        const numberOfPayments = years * 12;

        // Monthly payment formula: P * r * (1+r)^n / ((1+r)^n - 1)
        const monthlyPayment =
            (principal *
                (monthlyRate * Math.pow(1 + monthlyRate, numberOfPayments))) /
            (Math.pow(1 + monthlyRate, numberOfPayments) - 1);

        return monthlyPayment;
    }

    // Initialize the form and calculate immediately
    window.onload = function() {
        // Set default values
        document.getElementById("loanAmount").value = "5000000";
        document.getElementById("loanTerm").value = "15";
        document.getElementById("loanTermInput").value = "15"; // sync
        document.getElementById("currentRateInput").value =
            document.getElementById("currentRate").value;
        document.getElementById("newRateInput").value =
            document.getElementById("newRate").value;

        // Calculate results immediately
        updateResults();

        // Set up button click
        document
            .getElementById("calculateBtn")
            .addEventListener("click", function(e) {
                e.preventDefault();
                updateResults();
            });

        // NEW: Set up "Get Expert Advice" button
        document
            .getElementById("getExpertBtn")
            .addEventListener("click", function() {
                // Scroll to the contact form with smooth animation
                document.getElementById("contactForm").scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });

                // Add a slight highlight effect
                const contactForm = document.getElementById("contactForm");
                contactForm.style.boxShadow = "0 0 15px rgba(92, 184, 92, 0.8)";
                setTimeout(() => {
                    contactForm.style.boxShadow = "";
                }, 2000);
            });
    };

    // Also allow Enter key to trigger calculation
    document
        .querySelectorAll(
            "#loanAmount, #currentRate, #newRate, #loanTerm, #extraPayment, #currentRateInput, #newRateInput, #loanTermInput"
        )
        .forEach((input) => {
            input.addEventListener("keydown", function(e) {
                if (e.key === "Enter") {
                    updateResults();
                }
            });
        });
    </script>


    <?php include("includes/calculation-bottom.php"); ?>
    <?php include("includes/footer.php"); ?>


</body>

</html>