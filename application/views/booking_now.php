<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
?>
<style>

	.form input {
	  font-family: "Roboto", sans-serif;
	  outline: 0;
	  background: #f2f2f2;
	  width: 100%;
	  border: 0;
	  margin: 0 0 15px;
	  padding: 15px;
	  box-sizing: border-box;
	  font-size: 14px;
	}
	.form .col-sm-3{
		align-self: center;
	}
	.form button {
	  font-family: "Roboto", sans-serif;
	  text-transform: uppercase;
	  outline: 0;
	  background: #4CAF50;
	  width: 100%;
	  border: 0;
	  padding: 15px;
	  color: #FFFFFF;
	  font-size: 14px;
	  -webkit-transition: all 0.3 ease;
	  transition: all 0.3 ease;
	  cursor: pointer;
	}
	.form button:hover,.form button:active,.form button:focus {
	  background: #43A047;
	}
</style>
<div class="container">
	<h1 class="mb-4">Book your seat with us now</h1>
	<div class="form">
		<form class="register-form" action="<?=base_url('booking/order_validate')?>" method="post" accept-charset="utf-8">
			<div class="row">
				<div class="col-sm-3">Booking Date</div>
				<div class='col-sm-9'>
					<input type="datetime-local" name="bookingdate">
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3">No. of person</div>
				<div class='col-sm-9'>
					<input type="text" name="bookingseats">
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-3">Occassion</div>
				<div class='col-sm-9'>
					<input type="text" name="bookingoccasion">
				</div>
			</div>	
			<button>Book Now</button>
		</form>
	</div>	
</div>