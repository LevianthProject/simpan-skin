<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet"
      	href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      	integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      	crossorigin="anonymous"/>
    <link rel="stylesheet"
      	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      	integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      	crossorigin="anonymous"
      	referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"/>
    <link rel="stylesheet" href="assets/style.css" />
    <title>Data set</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php include "global-head.php" ?>
	<!-- end:Navbar -->
	
    <!-- searchBar -->
    <div class="container-fluid mt-6 px-lg-6">
      	<div class="container-fluid py-5 px-lg-6 background-vectr font-poppins">
			<div class="py-3 px-2">
				<h1 class="font-weight-bold font-size-2 font-size-sm-5">
					Mau cari data apa ?
				</h1>
				<p class="pt-2 font-size-3">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
					facere ipsam dicta porro labore, eaque vitae eius fugiat obcaecati
					rem hic architecto incidunt.
				</p>
				<form class="input-group pt-2">
					<input
					class="h-75 form-control pl-5 py-3 border-right-0 border color-3 font-size-1"
					value="Cari data set anda disini"
					id="example-search-input"
					/>
					<span role="button" class="input-group-append">
					<div class="input-group-text bg-white">
						<i class="fas fa-search color-2 fa-lg pr-3"></i>
					</div>
					</span>
				</form>
			</div>
      	</div>
    </div>
    <!-- end:searchBar -->

    <!-- cardItems -->
    <div class="container-fluid mt-4 px-lg-6 mb-5">
      	<div class="container-fluid font-poppins">
			<div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-sm-2 row-cols-md-2 text-center">
				<div class="col px-0 py-xs-2 pr-xl-4 pr-md-0">
					<div class="card d-flex flex-row card-dataset justify-content-xs-center bg-white align-items-center">
					<div class="left-xs-0">
						<div class="card-logos card-sm-logos background-6 ml-3 rounded d-flex align-items-center justify-content-center">
						<img
							src="assets/icon/coolicon.svg"
							width="40"
							height="40"
							alt=""/>
						</div>
					</div>
					<div class="ml-xs-50 justify-content-xs-center d-flex flex-column pt-2">
						<h6 class="font-weight-normal font-size-4">Total Jenis Data</h6>
						<h4 class="font-weight-bolder font-size-3 pt-1 text-left">
						1000
						</h4>
					</div>
					</div>
				</div>
				<div class="col px-0 py-xs-2 pr-xl-4 pr-md-0">
					<div class="card d-flex flex-row card-dataset justify-content-xs-center bg-white align-items-center">
					<div class="left-xs-0">
						<div class="card-logos card-sm-logos background-5 ml-3 rounded d-flex align-items-center justify-content-center">
						<img
							src="assets/icon/coolicon.svg"
							width="40"
							height="40"
							alt=""/>
						</div>
					</div>
					<div class="ml-xs-50 justify-content-xs-center d-flex flex-column pt-2">
						<h6 class="font-weight-normal font-size-4">Total Data Set</h6>
						<h4 class="font-weight-bolder font-size-3 pt-1 text-left">
						1000
						</h4>
					</div>
					</div>
				</div>
				<div class="col px-0 py-xs-2 pr-xl-4 pr-md-0">
					<div class="card d-flex flex-row card-dataset justify-content-xs-center bg-white align-items-center">
					<div class="left-xs-0">
						<div class="card-logos card-sm-logos background-4 ml-3 rounded d-flex align-items-center justify-content-center">
						<img
							src="assets/icon/coolicon.svg"
							width="40"
							height="40"
							alt=""/>
						</div>
					</div>
					<div class="ml-xs-50 justify-content-xs-center d-flex flex-column pt-2">
						<h6 class="font-weight-normal font-size-4">Total Wilayah</h6>
						<h4 class="font-weight-bolder font-size-3 pt-1 text-left">
						1000
						</h4>
					</div>
					</div>
				</div>
				<div class="col px-0 py-xs-2 pr-md-0">
					<div class="card d-flex flex-row card-dataset justify-content-xs-center bg-white align-items-center">
					<div class="left-xs-0">
						<div class="card-logos card-sm-logos background-3 ml-3 rounded d-flex align-items-center justify-content-center">
						<img
							src="assets/icon/coolicon.svg"
							width="40"
							height="40"
							alt=""/>
						</div>
					</div>
					<div class="ml-xs-50 justify-content-xs-center d-flex flex-column pt-2">
						<h6 class="font-weight-normal font-size-4">Total User Data</h6>
						<h4 class="font-weight-bolder font-size-3 pt-1 text-left">
						1000
						</h4>
					</div>
					</div>
				</div>
			</div>
      	</div>
    </div>
    <!-- end:cardItems -->

	<!-- footer -->
	<?php include "global-footer.php" ?>
    <!-- end:footer -->

	<script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	  crossorigin="anonymous"></script>
	  <!--
	<script src="assets/script.js"></script>
-->
  </body>
</html>
