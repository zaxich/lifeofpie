<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>958 Crescent Lane Springfield, PA 19064</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@lifeofpie.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="twitter.com"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="instagram.com"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="<?=base_url()?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="<?=base_url('menu')?>"><i class="fa fa-angle-right mr-2"></i>Menu</a>
                            <a class="text-white mb-2" href="<?=base_url('about')?>"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white" href="<?=base_url('promo')?>"><i class="fa fa-angle-right mr-2"></i>Promo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>What happens when a pie, a cake and a bread loaf hang out together? Sign up to our newsletter to know more</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" id="inputEmail" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4" onclick="myFunction()">Sign Up</button>
                        </div>
                    </div>
					<div id="myDIV" style="display: none">You're Signed up. Wait for our fun fact! :)</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Life of Pie</a>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?=base_url('assets/mail/jqBootstrapValidation.min.js')?>"></script>
    <script src="<?=base_url('assets/mail/contact.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>
	<script>
		function myFunction() {
			var x = document.getElementById("myDIV");
			var inputText = document.getElementById("inputEmail");
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(inputText.value.match(mailformat)){
				if (x.style.display === "none") {
					x.style.display = "block";
				}
			}else{
				alert("You have entered an invalid email address!");
			}	
		}
	</script>
	<script>
	$('.message a').click(function(){
	   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});
	</script>
</body>

</html>