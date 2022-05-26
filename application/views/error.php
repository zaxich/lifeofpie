<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
?>
<style>
   .err {
     z-index: 15;
     text-align: center;
     font-family: sans-serif;
	   margin: 100px 0;
   }
   .errh1,.errh2{
     text-align: center;
   }
   .errh1{
     font-size: 60px;
     margin-bottom: 10px;
     border-bottom: 1px solid black;
     padding-bottom: 10px;
   }
   .errh2{
     margin-bottom: 40px;
   }
   .back{
     margin-top:10px;
     text-decoration: none;
     padding: 10px 25px;
     color: black;
     margin-top: 20px;
   }
   </style>
<div class="err">
     <h1 align="center" class="errh1">404</h1>
     <h2 align="center" class="errh2">Page not found</h2>
	<a href='<?= base_url(); ?>' class="back">Back to Homepage</a>
</div>