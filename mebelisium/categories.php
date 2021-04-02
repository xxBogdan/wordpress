<!DOCTYPE html>
<html>
    <head>
	    <title>Mebelisium</title>
	    <meta charset="utf-8">
	    <link rel="icon" href="images/favicon/favicon.png">
	    <link rel="stylesheet" type="text/css" href="main.css">
	    <link rel="stylesheet" type="text/css" href="media.css">
		<link rel="stylesheet" type="text/css" href="categories.css">
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

    <!-- Categories -->
    <section class="categories" style="margin-top: 134px; height: auto; margin-bottom: 70px;">
        <div class="container col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="history" style="float: left; margin-left: 29px; margin-bottom: 20px;">
                        <span class="home" style="font-family: Mont Bold; color: #606468; font-size: 10pt;">
                            <a href="index.php">ГЛАВНАЯ</a>
                        </span> 
                        <span style="font-size: 10pt; color: #151515; font-family: Mont Bold;">» КАТАЛОГ ТОВАРОВ</span>
                    </div>
                </div>
            </div>
            <hr class="categories-hr" size="3" color="#E6E6E6" width="1150px" style="margin-left: 30px;">
            <div class="col-lg-12 d-flex flex-column" style="margin-left: 5px; height: auto;">
				<h3 class="categories-title" style="font-size: 18pt; font-family: Mont Bold; padding-top: 20px; padding-left: 8px; color:#3A3D45;">
                    КАТЕГОРИИ
                </h3>
				<div class="row d-flex align-items-center justify-content-around" style="margin-top: 30px;">
					<div class="categories-bedroom d-flex flex-column">
						<a href="#">
							<div class="img-cat-one"></div>
						</a>
						<h2 class="d-flex name-cs">
							<a href="#">Спальня</a>
						</h2>
					</div>
					<div class="categories-livingroom d-flex flex-column">
						<a href="#">
							<div class="img-cat-two"></div>
						</a>
						<h2 class="d-flex name-cs">
							<a href="#">Гостиная</a>
						</h2>
					</div>
					<div class="categories-kitchen d-flex flex-column">
						<a href="#">
							<div class="img-cat-three"></div>
						</a>
						<h2 class="d-flex name-cs">
							<a href="#">Кухня</a>
						</h2>
					</div>
					<div class="categories-children d-flex flex-column">
						<a href="#">
							<div class="img-cat-four"></div>
						</a>
						<h2 class="d-flex name-cs">
							<a href="#">Детская</a>
						</h2>
					</div>
					<div class="categories-hall d-flex flex-column">
						<a href="#">
							<div class="img-cat-five"></div>
						</a>
						<h2 class="d-flex name-cs">
							<a href="#">Прихожая</a>
						</h2>
					</div>
					<div class="categories-office d-flex flex-column">
						<a href="#">
							<div class="img-cat-six"></div>
						</a>
						<h2 class="d-flex name-cs">
							<a href="#">Офис</a>
						</h2>
					</div>
				</div>
			</div>
        </div>
    </section>

    <!-- All mini-categories -->
    <section class="all-categories" style="height: auto; margin-bottom: 46px;">
        <div class="container col-lg-8">
            <div class="col-lg-12 d-flex flex-column" style="margin-left: 5px; height: auto;">
				<h3 class="categories-title" style="font-size: 18pt; font-family: Mont Bold; padding-top: 20px; padding-left: 8px; color:#3A3D45;">
                    ВСЕ КАТЕГОРИИ
                </h3>
				<div class="row d-flex align-items-center justify-content-around" style="margin-top: 30px;">
					<div class="categories-sofa d-flex flex-column justify-content-center align-items-center">
						<div class="img-sofa"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Диваны</span>
					</div>
					<div class="categories-armchairs d-flex flex-column justify-content-center align-items-center">
						<div class="img-armchairs"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Кресла</span>
					</div>
					<div class="categories-chairs d-flex flex-column justify-content-center align-items-center">
						<div class="img-chairs"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Стулья</span>
					</div>
					<div class="categories-tables d-flex flex-column justify-content-center align-items-center">
						<div class="img-tables"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Столы</span>
					</div>
					<div class="categories-nightstand d-flex flex-column justify-content-center align-items-center">
						<div class="img-nightstand"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Тумбы</span>
					</div>
					<div class="categories-wardrobe d-flex flex-column justify-content-center align-items-center">
						<div class="img-wardrobe"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Шкафы</span>
					</div>
					<div class="categories-bar-sets d-flex flex-column justify-content-center align-items-center">
						<div class="img-bar-sets"></div>
						<span class="d-flex" style="font-size: 10pt; font-family: Mont; color:#3A3D45; position: relative; top: 10px;">Бар</span>
					</div>
				</div>
			</div>
        </div>
    </section>

	<?php 
		require 'footer.php';
	?>

	</body>
</html>