<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
?>
<style>
table {
	border-spacing: 1;
	border-collapse: collapse;
	background: grey;
	border-radius: 6px;
	overflow: hidden;
	max-width: 800px;
	width: 100%;
	margin: 0 auto;
	position: relative;
}
table * {
	position: relative;
}
table td,
table th {
	padding-left: 8px;
}
table thead tr {
	height: 60px;
	background: #ffed86;
	font-size: 16px;
}
table tbody tr {
	height: 48px;
	border-bottom: 1px solid #e3f1d5;
	color: aliceblue;
}
table tbody tr:nth-child(even) {
	background: white;
	color: black;
}
table tbody tr:last-child {
	border: 0;
}
table td,
table th {
	text-align: left;
}
table td.l,
table th.l {
	text-align: right;
}
table td.c,
table th.c {
	text-align: center;
}
table td.r,
table th.r {
	text-align: center;
}
	.book{
		background: blanchedalmond;
		padding: 5px;
		border-radius: 3px;
	}
@media screen and (max-width: 35.5em) {
  table {
    display: block;
  }
  table > *,
table tr,
table td,
table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 8px 0;
  }
  table tbody tr td {
    padding-left: 45%;
    margin-bottom: 12px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    position: absolute;
    font-weight: 700;
    width: 40%;
    left: 10px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Date";
  }
  table tbody tr td:nth-child(2):before {
    content: "No. of Seats";
  }
  table tbody tr td:nth-child(3):before {
    content: "Occasion";
  }
  table tbody tr td:nth-child(4):before {
    content: "Status";
  }
}
</style>
<div class="container mb-4">
	<h2 class="mb-4">Hello, <?=ucfirst($this->session->userdata('user_name'))?></h2>
	<p>You can book your seats by clicking the button below</p>
	<a href="<?=base_url('booking/order')?>" class="book">Book Your Seat Now</a>
	<p class="mt-4">Or, you can find the bookings you have done in our restaurant below <br><small>PS: If you want to cancel the booking, please call our customer service</small></p>
</div>

<table>
	<thead>
		<tr>
			<th>Date</th>
			<th>No. of Person</th>
			<th>Occasion</th>
			<th>Status</th>
		</tr>
	<thead>
	<tbody>
		<?php
			foreach($booking as $b){
		?>
		<tr>
			<td><?=$b->booking_date?></td>
			<td><?=$b->booking_seat?></td>
			<td><?=$b->booking_occasion?></td>
			<td><?php 
			if($b->booking_cancel == 0){
				if($b->booking_date >= date("Y-m-d H:i:s")){
					echo "Booked";
				}else{
					echo "Finished";
				}
			}else{
				echo "Cancelled";
			}
				
				?></td>
		</tr>
		
		<?php
			}
		?>
	</tbody>
<table/>