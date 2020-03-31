<?php
	session_start();
	$ids = $_SESSION["idsup"];
    // Connecting with database and executing query
    $connection = mysqli_connect("localhost", "root", "", "roofing");
    $sql = "SELECT * FROM distance";
	$result = mysqli_query($connection, $sql);
	$sql2 = "SELECT * FROM users WHERE id = $ids";
	$result2 = mysqli_query($connection, $sql2);
	$row2 = mysqli_fetch_object($result2)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Routes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="/Project" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="sup_orders.php">Orders</a>
							</li>

							<li  class="active-menu">
								<a href="sup_view_routes.php">View Rates</a>
							</li>

							<li>
								<a href="sup_up_routes.php">Update Rates</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<a href="login.html" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0">
							<i class="zmdi zmdi-power"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<a href="login.html" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" data-notify="0">
					<i class="zmdi zmdi-power"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">

			<ul class="main-menu-m">
				<li>
					<a href="sup_orders.php">Orders</a>
				</li>

				<li class="active-menu">
					<a href="sup_view_routes.php">View Routes</a>
				</li>

				<li>
					<a href="sup_up_routes.php">Update Routes</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/product-07.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			View Data
		</h2>
	</section>	


	<!-- Content page -->
	
	<!-- Shipping Methods -->
	<form class="bg0 p-t-75 p-b-85" style="margin-bottom: 0px; padding-top: 70px; padding-bottom: 0px;">
		<div class="container">
			<!-- <h2 class="txt-center" style="margin-bottom: 50px; font-family: Poppins-Bold;">View Data</h2>-->
			<div class="row">
				<table class="table table-hover table table-borderless col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <thead>
                        <tr>
                            <th>Province</th>
                            <th style="width: 150px;">Km</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_object($result)) { ?>
	                    <tr>
	                     <td><?php echo $row->city; ?></td>
	                     <td><?php echo $row->km; ?></td>
	                     </tr>
	                    <?php } ?>
                    </tbody>
                </table>

				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Delivery</th>
									<th class="column-2" style="padding-left: 50px;">Delivery within</th>
									<th class="column-3">Update Price</th>
								</tr>

								<tr class="table_row" style="height: 100px;">
									<td class="column-1">
										<p>Ultra Fast</p>
									</td>
									<td class="column-2" style="padding-left: 60px;">
										<p>1-2 Days</p>
									</td>
									<td class="column-3">
										<p>Rs.<?php echo $row2->ufast; ?></p>
									</td>
								</tr>

								<tr class="table_row" style="height: 100px;">
									<td class="column-1">
										<p>Fast</p>
									</td>
									<td class="column-2" style="padding-left: 60px;">
										<p>3-7 Days</p>
									</td>
									<td class="column-3">
										<p>Rs.<?php echo $row2->fast; ?></p>
									</td>
								</tr>

								<tr class="table_row" style="height: 100px;">
									<td class="column-1">
										<p>Regular</p>
									</td>
									<td class="column-2" style="padding-left: 60px;">
										<p>7-14 Days</p>
									</td>
									<td class="column-3">
										<p>Rs.<?php echo $row2->reg; ?></p>
									</td>
								</tr>

								<tr class="table_row" style="height: 100px;">
									<td class="column-1">
										<p>Slow</p>
									</td>
									<td class="column-2" style="padding-left: 60px;">
										<p>14-30 Days</p>
									</td>
									<td class="column-3">
										<p>Rs.<?php echo $row2->slow; ?></p>
									</td>
								</tr>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Tiles
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Roofing Sheets
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Paints
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Other
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Delivery
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? <br> Let us know in store at <br> වහලය showroom , 256 Main St , Galle Rd, Rathmalana or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="wahalaya@gmail.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="https://wahalaya.com" target="_blank">වහලය</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->

<!--===============================================================================================-->

	<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "php/view_route.php", true);
    ajax.send();

    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);

            var html = "";
            for(var a = 0; a < data.length; a++) {
                var province = data[a].province;
                var price = data[a].price;


                html += "<tr>";
                    html += "<td>" + province + "</td>";
                    html += "<td>" + price + "</td>";
                html += "</tr>";
            }
            document.getElementById("up_route").innerHTML += html;
        }
    };
	</script>

<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>


	<script src="js/mindmup-editabletable.js"></script>
	<script src="js/editable-table.js"></script>

<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script src="js/mindmup-editabletable.js"></script> <!-- Editable Table Plugin Js --> 
	<script src="js/editable-table.js"></script>

</body>
</html>