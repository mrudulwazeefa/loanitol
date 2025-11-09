<?php include("includes/meta.php"); ?>
<title>Article Page | Loanitol</title>
</head>

<body>
    <?php include("includes/nav.php"); ?>

    <div class="hero-small--section-area d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <h6 class="h6-size col-sm-10 mb-0">
                        <span>Recent Articles</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container article-container py-2 mt-5 mb-5">
        <div class="row d-flex align-items-stretch g-3 g-md-4 p-0">
            <!-- First Card -->
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="card  article-card-1 p-3 border-0 position-relative">
                    <span class="label p-2 position-absolute bg-white m-3">Popular
                        <img src="assets/articles/icons/star_1.svg" class="ms-1" width="20px" alt="">
                    </span>
                    <img class="article-main-img rounded-sm" src="assets/articles/article-1.webp" alt="">
                    <h5 class="card-title py-4 mb-0 col-lg-10">ലോണുകൾ ഇനി എളുപ്പത്തിൽ,ബുദ്ധിമുട്ടുകൾ ഇല്ലാതെ</h5>
                    <a class="read-more-btn" href="">Read More
                        <img src="assets/arrow.svg" alt="">
                    </a>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 d-none d-sm-none d-md-none d-lg-block">
                <div class="card article-card-2 overflow-hidden border-0 d-flex">
                    <img class="img-fluid h-100" src="assets/articles/article-2.webp" alt="">
                </div>
            </div>
        </div>

        <div class="row pt-3 pt-md-4 g-3 g-md-4">
            <div class="col-md-4">
                <div class="card article-card-3 p-3 border-0">
                    <img class="article-img-small-1 img-fluid rounded-sm" src="assets/articles/article-3.webp" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card article-card-4 p-3 border-0">
                    <img class="article-img-small-2 img-fluid rounded-sm" src="assets/articles/article-4.webp" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card article-card-5 p-3 border-0">
                    <img class="article-img-small-3 img-fluid rounded-sm" src="assets/articles/article-5.webp" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-12 pagination_height">
            <nav aria-label="...">
                <ul class="pagination d-flex justify-content-center justify-content-sm-end ps-2 pe-2">
                    <li class="page-item prev disabled d-flex align-items-center">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link rounded-pill" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-pill" href="#" aria-current="page">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-pill" href="#">3</a>
                    </li>
                    <li class="page-item d-none d-sm-block">
                        <a class="page-link rounded-pill" href="#">4</a>
                    </li>
                    <li class="page-item d-none d-sm-block">
                        <a class="page-link rounded-pill" href="#">5</a>
                    </li>
                    <li class="page-item next d-flex align-items-center">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <?php include("includes/footer.php"); ?>
</body>

</html>