    <link rel="stylesheet" href="css/animated-placeholder.css">
    <style>
.move-search {
    transition: right 0.3s ease;
    right: 0px !important;
}

.search-field {
    transition: right 0.3s ease;
}

#search-icon {
    position: relative;
    z-index: 10;
}

input.search-field::placeholder {
    opacity: 0;
    transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    color: #888;
}

input.search-field.show-placeholder::placeholder {
    opacity: 1;
}
    </style>



    <?php include("includes/meta.php"); ?>
    <title>Videos Page | Loanitol</title>
    </head>

    <body>
        <?php include("includes/nav.php"); ?>

        <div class="hero-small--section-area d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <h6 class="h6-size col-sm-10 mb-0">
                            <span>Videos | Vlogs | Shorts | Reels</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container video-container py-2 position-relative mt-5 mb-5">
            <div class="title-main-container h4-size mb-2 title d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="assets/videos/icons/play.svg" class="me-3" alt="">
                    <span class="fw-semibold">Videos and Vlogs</span>
                </div>
                <span id="search-icon-container" class="d-flex align-items-center " style="position:relative;">
                    <!-- <img src="assets/videos/icons/search.svg" alt="" id="search-icon1" > -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" id="search-icon1" viewBox="0 0 24 24">
                        <path
                            d="M 10 2 C 5.590603 2 2 5.5906063 2 10 C 2 14.409394 5.590603 18 10 18 C 11.929744 18 13.635779 17.22512 15.019531 16.082031 L 20.380859 21.441406 L 20.912109 21.972656 L 21.972656 20.912109 L 21.441406 20.380859 L 16.082031 15.019531 C 17.225119 13.635778 18 11.929742 18 10 C 18 5.5906063 14.409397 2 10 2 z M 10 3.5 C 13.598737 3.5 16.5 6.401265 16.5 10 C 16.5 13.598735 13.598737 16.5 10 16.5 C 6.4012627 16.5 3.5 13.598735 3.5 10 C 3.5 6.401265 6.4012627 3.5 10 3.5 z">
                        </path>
                    </svg>
                    <input class="search-field" type="text" id="search-input1" placeholder="Search Reels..." />
                </span>

            </div>
            <div class="row g-4 my-3 gx-2 gy-2 d-flex align-items-center justify-content-center" id="video-row">
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" width="450" height="600" controls loop autoplay>
                                        <source src="assets/videos/Episode_008_Reel__004_New.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" width="450" height="600" controls loop autoplay>
                                        <source src="assets/videos/Episode.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" width="450" height="600" controls loop autoplay>
                                        <source src="assets/videos/Episode.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" width="450" height="600" controls loop autoplay>
                                        <source src="assets/videos/Episode.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-1">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" height="600px" width="450px" src="assets/videos/Episode.mp4"
                                        controls loop autoplay></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-2">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" width="450" height="600" controls loop autoplay>
                                        <source src="assets/videos/Episode.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-3">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img card rounded-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" width="450" height="600" controls loop autoplay>
                                        <source src="assets/videos/Episode.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative video-container d-none" id="video-hide-4">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    <img class="card-img img-fluid" src="assets/videos/video-thumbnail.jpg" alt="">
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-body modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-dialog modal-dialog-centered">
                                    <video id="modalVideo2" height="600px" width="450px" src="assets/videos/Episode.mp4"
                                        controls loop autoplay></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="show-bttn text-center" id="showmore-btn">Showmore</a>
                <a href="#" class="show-bttn text-center ms-2" id="showless-btn" style="display:none;">Show less</a>
            </div>
        </div>
        <div class="container reels-container py-2 mt-5 mb-5">
            <div class="title-main-container h4-size title d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="assets/videos/icons/play.svg" class="me-3" alt="">
                    <span class="fw-semibold">Shorts and Reels</span>
                </div>
                <span id="search-icon-container" class="d-flex align-items-center" style="position:relative;">
                    <!-- <img src="assets/videos/icons/search.svg" alt="" id="search-icon2"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" id="search-icon2" viewBox="0 0 24 24">
                        <path
                            d="M 10 2 C 5.590603 2 2 5.5906063 2 10 C 2 14.409394 5.590603 18 10 18 C 11.929744 18 13.635779 17.22512 15.019531 16.082031 L 20.380859 21.441406 L 20.912109 21.972656 L 21.972656 20.912109 L 21.441406 20.380859 L 16.082031 15.019531 C 17.225119 13.635778 18 11.929742 18 10 C 18 5.5906063 14.409397 2 10 2 z M 10 3.5 C 13.598737 3.5 16.5 6.401265 16.5 10 C 16.5 13.598735 13.598737 16.5 10 16.5 C 6.4012627 16.5 3.5 13.598735 3.5 10 C 3.5 6.401265 6.4012627 3.5 10 3.5 z">
                        </path>
                    </svg>
                    <input class="search-field" type="text" id="search-input2" placeholder="Search Reels..." />
                </span>
            </div>
            <div class="row g-4 mt-1 mb-3 gx-2 gy-2 d-flex align-items-center justify-content-center">
                <div
                    class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                    <img class="reel-img img-fluid" src="assets/videos/44-Appukalil-Ninnu.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div
                    class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                    <img class="reel-img img-fluid" src="assets/videos/aleena-about-business.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div
                    class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                    <img src="assets/videos/play.svg" class="position-relative" alt="">
                    <img class="reel-img img-fluid" src="assets/videos/90percent-loan-for-machineries.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div
                    class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center">
                    <img src="assets/videos/play.svg" class="position-relative" alt="">
                    <img class="reel-img img-fluid" src="assets/videos/app-loan-edukkunnavar.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                    id="reels-hide-1">
                    <img class="reel-img img-fluid" src="assets/videos/44-Appukalil-Ninnu.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                    id="reels-hide-2">
                    <img class="reel-img img-fluid" src="assets/videos/aleena-about-business.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                    id="reels-hide-3">
                    <img src="assets/videos/play.svg" class="position-relative" alt="">
                    <img class="reel-img img-fluid" src="assets/videos/90percent-loan-for-machineries.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
                <div class="col-md-3 position-relative video-container d-flex justify-content-center align-items-center d-none"
                    id="reels-hide-4">
                    <img src="assets/videos/play.svg" class="position-relative" alt="">
                    <img class="reel-img img-fluid" src="assets/videos/app-loan-edukkunnavar.jpg" alt="">
                    <svg type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                        class="play-icon p-3 position-absolute" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="65px" height="65px" x="0" y="0"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="m37.324 20.026-22-12.412a4.685 4.685 0 0 0-4.711.036 4.528 4.528 0 0 0-2.28 3.938v24.824a4.528 4.528 0 0 0 2.28 3.938 4.687 4.687 0 0 0 4.711.036l22-12.412a4.543 4.543 0 0 0 0-7.948z"
                                fill="#D81F37" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="show-bttn text-center" id="showmore-reels-btn">Showmore</a>
                <a href="#" class="show-bttn text-center ms-2" id="showless-reels-btn" style="display:none;">Show
                    less</a>
            </div>

        </div>


        <?php include("includes/calculation-bottom.php"); ?>
        <?php include("includes/footer.php"); ?>

        <script>
        // Pause all videos in modal when close
        var exampleModal2 = document.getElementById('exampleModal2');
        if (exampleModal2) {
            exampleModal2.addEventListener('hidden.bs.modal', function() {
                var videos = exampleModal2.querySelectorAll('video');
                videos.forEach(function(video) {
                    video.pause();
                    video.currentTime = 0;
                });
            });
        }



        document.addEventListener('DOMContentLoaded', function() {
            // Search input toggle for search-icon1
            var searchIcon1 = document.getElementById('search-icon1');
            var searchInput1 = document.getElementById('search-input1');

            if (searchIcon1 && searchInput1) {
                // Ensure both have transitions
                searchIcon1.style.transition =
                    'width 0.3s ease, height 0.3s ease, transform 0.3s cubic-bezier(0.4,0,0.2,1)';
                searchInput1.style.transition = 'width 0.5s ease'; // match searchInput2, no opacity

                function showPlaceholder1() {
                    searchInput1.classList.add('show-placeholder');
                }

                function hidePlaceholder1() {
                    searchInput1.classList.remove('show-placeholder');
                }
                // Toggle search icon color between ed102c and black, reset to black when clicking outside
                searchIcon1.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (searchIcon1.style.fill === 'rgb(237, 16, 44)' || searchIcon1.style.fill ===
                        '#ed102c') {
                        searchIcon1.style.fill = 'black';
                    } else {
                        searchIcon1.style.fill = '#ed102c';
                    }
                });
                document.addEventListener('click', function(e) {
                    if (!searchIcon1.contains(e.target) && !searchInput1.contains(e.target)) {
                        searchIcon1.style.fill = 'black';
                    }
                });


                searchIcon1.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isVisible = searchInput1.style.display === 'block';
                    if (!isVisible) {
                        searchInput1.placeholder = '';
                        hidePlaceholder1();
                        searchInput1.style.display = 'block';
                        // searchInput1.style.opacity = '0';
                        searchInput1.style.width = '0px';
                        searchIcon1.style.transform = 'translateX(-12px)';
                        setTimeout(function() {
                            searchInput1.style.width = '200px';
                            searchInput1.style.marginLeft = '0.5rem';
                            var placeholderDelay = window.innerWidth <= 600 ? 100 : 200;
                            setTimeout(function() {
                                searchInput1.placeholder = 'Search Videos...';
                                showPlaceholder1();
                            }, placeholderDelay);
                        }, 10);

                        if (window.innerWidth < 500) {
                            searchIcon1.style.width = '18px';
                            searchIcon1.style.height = '18px';
                        } else {
                            searchIcon1.style.width = '21px';
                            searchIcon1.style.height = '21px';
                        }
                        searchInput1.focus();
                    } else {
                        searchInput1.placeholder = '';
                        hidePlaceholder1();
                        // searchInput1.style.opacity = '0';
                        searchInput1.style.width = '0px';
                        searchInput1.style.marginLeft = '0.5rem';
                        searchIcon1.style.transform = 'translateX(0)';
                        if (window.innerWidth < 500) {
                            searchIcon1.style.width = '21px';
                            searchIcon1.style.height = '21px';
                        } else {
                            searchIcon1.style.width = '25px';
                            searchIcon1.style.height = '25px';
                        }
                        setTimeout(function() {
                            searchInput1.style.display = 'none';
                        }, 300);
                    }
                });

                searchInput1.addEventListener('input', function() {
                    if (searchInput1.value) {
                        hidePlaceholder1();
                    } else {
                        showPlaceholder1();
                    }
                });
                searchInput1.addEventListener('focus', function() {
                    if (searchInput1.value) hidePlaceholder1();
                });
                searchInput1.addEventListener('blur', function() {
                    if (!searchInput1.value) showPlaceholder1();
                });

                document.addEventListener('click', function(e) {
                    if (!searchIcon1.contains(e.target) && !searchInput1.contains(e.target)) {
                        // searchInput1.style.opacity = '0';
                        searchInput1.style.width = '0px';
                        searchInput1.style.marginLeft = '0.5rem';
                        searchIcon1.style.transform = 'translateX(0)';
                        if (window.innerWidth < 500) {
                            searchIcon1.style.width = '21px';
                            searchIcon1.style.height = '21px';
                        } else {
                            searchIcon1.style.width = '25px';
                            searchIcon1.style.height = '25px';
                        }
                        setTimeout(function() {
                            searchInput1.style.display = 'none';
                        }, 300);
                    }
                });
            }
        });




        document.addEventListener('DOMContentLoaded', function() {
            // Search input toggle for reels
            var searchIcon2 = document.getElementById('search-icon2');
            var searchInput2 = document.getElementById('search-input2');
            if (searchIcon2 && searchInput2) {
                searchIcon2.style.transition =
                    'width 0.3s ease, height 0.3s ease, transform 0.3s cubic-bezier(0.4,0,0.2,1)';
                searchInput2.style.transition = 'width 0.5s ease'; //, opacity 0.5s ease

                function showPlaceholder2() {
                    searchInput2.classList.add('show-placeholder');
                }

                function hidePlaceholder2() {
                    searchInput2.classList.remove('show-placeholder');
                }
                // Toggle search icon color between #ed102c and black, reset to black when clicking outside
                searchIcon2.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (searchIcon2.style.fill === 'rgb(237, 16, 44)' || searchIcon2.style.fill ===
                        '#ed102c') {
                        searchIcon2.style.fill = 'black';
                    } else {
                        searchIcon2.style.fill = '#ed102c';
                    }
                });
                document.addEventListener('click', function(e) {
                    if (!searchIcon2.contains(e.target) && !searchInput2.contains(e.target)) {
                        searchIcon2.style.fill = 'black';
                    }
                });

                searchIcon2.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const isVisible = searchInput2.style.display === 'block';
                    if (!isVisible) {
                        searchInput2.placeholder = '';
                        hidePlaceholder2();
                        searchInput2.style.display = 'block';
                        // searchInput2.style.opacity = '0';
                        searchInput2.style.width = '0px';
                        searchIcon2.style.transform = 'translateX(-12px)';
                        setTimeout(function() {
                            searchInput2.style.opacity = '1';
                            searchInput2.style.width = '200px';
                            searchInput2.style.marginLeft = '0.5rem';
                            var placeholderDelay = window.innerWidth <= 600 ? 100 : 200;
                            setTimeout(function() {
                                searchInput2.placeholder = 'Search Reels...';
                                showPlaceholder2();
                            }, placeholderDelay);
                        }, 10);
                        searchIcon2.style.width = '21px';
                        searchIcon2.style.height = '21px';
                        searchInput2.focus();
                    } else {
                        searchInput2.placeholder = '';
                        hidePlaceholder2();
                        // searchInput2.style.opacity = '0';
                        searchInput2.style.width = '0px';
                        searchInput2.style.marginLeft = '0.5rem';
                        searchIcon2.style.transform = 'translateX(0)';
                        searchIcon2.style.width = '25px';
                        searchIcon2.style.height = '25px';
                        setTimeout(function() {
                            searchInput2.style.display = 'none';
                        }, 300);
                    }
                });

                searchInput2.addEventListener('input', function() {
                    if (searchInput2.value) {
                        hidePlaceholder2();
                    } else {
                        showPlaceholder2();
                    }
                });
                searchInput2.addEventListener('focus', function() {
                    if (searchInput2.value) hidePlaceholder2();
                });
                searchInput2.addEventListener('blur', function() {
                    if (!searchInput2.value) showPlaceholder2();
                });
                document.addEventListener('click', function(e) {
                    if (!searchIcon2.contains(e.target) && !searchInput2.contains(e.target)) {
                        searchInput2.style.opacity = '0';
                        searchInput2.style.width = '0px';
                        searchInput2.style.marginLeft = '0.5rem';
                        searchIcon2.style.transform = 'translateX(0)';
                        searchIcon2.style.width = '25px';
                        searchIcon2.style.height = '25px';
                        setTimeout(function() {
                            searchInput2.style.display = 'none';
                        }, 300);
                    }
                });
            }






            // Show More/Less for Videos
            var showMoreBtn = document.getElementById('showmore-btn');
            var showLessBtn = document.getElementById('showless-btn');
            var videoHideIds = ['video-hide-1', 'video-hide-2', 'video-hide-3', 'video-hide-4'];

            if (showMoreBtn && showLessBtn) {
                showMoreBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    videoHideIds.forEach(function(id) {
                        var el = document.getElementById(id);
                        if (el) {
                            el.classList.remove('d-none');
                        }
                    });
                    showMoreBtn.style.display = 'none';
                    showLessBtn.style.display = 'inline-block';
                    showMoreBtn.classList.remove('active');
                    showLessBtn.classList.remove('active');
                    showLessBtn.classList.add('red'); // Make Show less font color active red
                });
                showLessBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    videoHideIds.forEach(function(id) {
                        var el = document.getElementById(id);
                        if (el) {
                            el.classList.add('d-none');
                        }
                    });
                    showLessBtn.style.display = 'none';
                    showMoreBtn.style.display = 'inline-block';
                    showLessBtn.classList.remove('active');
                    showLessBtn.classList.remove('red'); // Remove red color from Show less
                    showMoreBtn.classList.remove('active');
                });
                // Set initial active state
                showMoreBtn.classList.add('active');
            }


            // Show More/Less for Reels
            var showMoreReelsBtn = document.getElementById('showmore-reels-btn');
            var showLessReelsBtn = document.getElementById('showless-reels-btn');
            var reelsHideIds = ['reels-hide-1', 'reels-hide-2', 'reels-hide-3', 'reels-hide-4'];

            if (showMoreReelsBtn && showLessReelsBtn) {
                showMoreReelsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    reelsHideIds.forEach(function(id) {
                        var el = document.getElementById(id);
                        if (el) {
                            el.classList.remove('d-none');
                        }
                    });
                    showMoreReelsBtn.style.display = 'none';
                    showLessReelsBtn.style.display = 'inline-block';
                    showLessReelsBtn.classList.add(
                        'red'); // Make Show less font color active red for reels
                });
                showLessReelsBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    reelsHideIds.forEach(function(id) {
                        var el = document.getElementById(id);
                        if (el) {
                            el.classList.add('d-none');
                        }
                    });
                    showLessReelsBtn.style.display = 'none';
                    showMoreReelsBtn.style.display = 'inline-block';
                    showLessReelsBtn.classList.remove(
                        'red'); // Remove red color from Show less for reels
                });
            }
        });
        </script>

    </body>

    </html>