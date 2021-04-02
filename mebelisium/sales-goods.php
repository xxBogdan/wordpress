<!DOCTYPE html>
<html>
    <head>
	    <title>Mebelisium</title>
	    <meta charset="utf-8">
	    <link rel="icon" href="images/favicon/favicon.png">
	    <link rel="stylesheet" type="text/css" href="main.css">
	    <link rel="stylesheet" type="text/css" href="media.css">
        <link rel="stylesheet" type="text/css" href="registration.css">
	    <link rel="stylesheet" type="text/css" href="css-bootstrap/bootstrap.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body>

	<?php 
		require 'header.php';
	?>
    <section class="delivery" style="margin-top: 134px; height: auto; margin-bottom: 54px;">
        <div class="container col-lg-8">
			<div class="row justify-content-center">
        		<div class="col-lg-12">
            		<div class="history" style="float: left; margin-left: 20px; margin-bottom: 20px;">
                		<span class="home" style="font-family: Mont Bold; color: #606468; font-size: 10pt;">
                    		<a href="index.php">ГЛАВНАЯ</a>
                		</span> 
                		<span style="font-size: 10pt; color: #151515; font-family: Mont Bold;">» АКЦИИ</span>
            		</div>
        		</div>
    		</div>
    		<hr size="3" color="#E6E6E6" width="1170px" style="margin-left: 21px;">
			<div class="col-lg-12 title-media">
				<div class="title-goods flex-column d-flex" style="margin-bottom: 40px; margin-top: 50px; margin-left: 5px;">
					<h2 style="font-family: Mont Bold; font-size: 17pt; color:#3A3D45;">
						ТОВАРЫ СО СКИДКОЙ
					</h2>
					<p class="signature" style="font-family: Mont; font-size: 14px; color: #666666;">
						Приобрети любимый товар со скидкой.
					</p>
				</div>
			</div>
	    </div>
    </section>
	<?php

	$str_out_sale="SELECT * FROM `goods`";
	$run_out_sale=mysqli_query($connect,$str_out_sale);

	while ($out_sale=mysqli_fetch_array($run_out_sale)) {
	
	?>
	<section class="delivery" style="height: auto; margin-bottom: 54px;">
        <div class="container col-lg-8">
			<div class="row justify-content-around d-flex">
				<div class="d-flex align-items-center">
					<div class="all-goods-sale">
						<div class="good-six"></div>
						<div class="sale text-center" style="width: 48px; height: 25px; background-color: red; bottom: 202px; left: 20px; position: relative; border-radius: 5px;"><span class="text-sale" style="font-family: Mont Bold; color: white; font-size: 10pt; bottom: 1px; position: relative;"><?php echo "$out_sale[discount]"; ?>%</span></div>
						<div class="row ml-3">
							<div class="d-flex flex-column">
								<span class="name-good-sale" style="font-family: Mont Bold; font-size: 12pt; color:#3A3D45; position: relative; bottom: 3px;"><?php echo "$out_sale[title]"; ?></span>
								<p class="price-two" style="color: #666666; font-family: Mont; font-size: 11pt;"><strike>8620 ₽</strike><span style="font-size: 12pt; margin-left: 12px;"><?php echo "$out_sale[price]"; ?> ₽</span></p>
							</div>
							</button>
							<button class="button-order">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
									<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
        </div>
    </section>
	<?php
	}

	?>

    <?php
		require 'footer.php';
	?>

</body>
</html>