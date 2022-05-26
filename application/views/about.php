<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
?>

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="<?=base_url('assets/img/about.jpg')?>" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">20+ Years Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                    <h1 class="mb-4">Trusted & Delish Pie Restaurant</h1>
                    <p class="mb-4">Life of a Pie is the brainchild of Ryan and John Sran. We are located at 958 Crescent Lane Springfield, PA 19064. The original Jack’s was opened in Ireland in 1970 by their father Jack so the boys decided to pay tribute to their father by re-opening the original almost forty years on. Jack's is a pie bar for birthdays, catching up with friends, lunch on our patio in our winter garden, and decorate pies.</p>
                    <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/dQw4w9WgXcQ" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

