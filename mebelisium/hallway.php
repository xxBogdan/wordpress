<!DOCTYPE html>
<html>
    <head>
	    <title>Mebelisium</title>
	    <meta charset="utf-8">
	    <link rel="icon" href="images/favicon/favicon.png">
	    <link rel="stylesheet" type="text/css" href="main.css">
	    <link rel="stylesheet" type="text/css" href="media.css">
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
            		<div class="history" style="float: left; margin-bottom: 20px;">
                		<span class="home" style="font-family: Mont Bold; color: #606468; font-size: 10pt;">
                    		<a href="index.php">ГЛАВНАЯ</a>
                		</span> 
                		<span class="menu-helper">» <a href="categories.php">КАТАЛОГ ТОВАРОВ</a> » ПРИХОЖАЯ</span>
            		</div>
        		</div>
    		</div>
    		<hr size="3" color="#E6E6E6" width="1200px">
			<div class="col-lg-12 title-media">
				<div class="title-goods flex-column d-flex" style="margin-top: 30px; position: relative; right: 16px;">
					<h2 style="font-family: Mont Bold; font-size: 17pt; color:#3A3D45;">
						КАТЕГОРИЯ ПРИХОЖАЯ
					</h2>
					<p class="signature" style="font-family: Mont; font-size: 14px; color: #666666;">
						Найди свою мебельную половинку.
					</p>
				</div>
			</div>
	    </div>
    </section>
	
	<section style="margin-bottom: 76px;">
		<div class="container col-lg-8">  
			<div class="row d-flex justify-content-center justify-content-around"> 
				<?php
				$connect=mysqli_connect("localhost", "root", "root", "mebelisium");

				$str_out_goods="SELECT * FROM `goods` WHERE `category`=1";
				$run_out_goods=mysqli_query($connect,$str_out_goods);
				$category=$_POST['category'];

				while ($out_goods=mysqli_fetch_array($run_out_goods)) {
				?> 	
					<div class="all-goods" style="margin-top: 20px;">
						<div class="good-image"><?php echo "<img src=images/goods/$out_goods[avatar] height=220px width=280px>"; ?></div>
						<div class="mt-4 ml-3 d-flex">
							<div class="d-flex flex-column">
								<span class="name-good" style="font-family: Mont Bold; font-size: 11pt; color:#3A3D45;"><?php echo "$out_goods[title]"; ?></span>
								<p class="price-one" style="font-family: Mont; font-size: 12pt; color: #666666;"><?php echo "$out_goods[price]"; ?> ₽</p>
								<button class="button-order">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
										<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
									</svg>
								</button>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>

    </body>
</html>

	<?php
		require 'footer.php';
	?>