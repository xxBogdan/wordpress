<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
	  	<div class="modal-content">
			<div class="modal-header text-center">
		  		<h5 class="modal-title text-center" id="exampleModalLongTitle" style="font-size: 10pt;">ВХОД НА САЙТ</h5>
		  		<button type="button" class="close close-auth" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="cross">&times;</span>
		  		</button>
			</div>
			<div class="modal-body">
		  		<div class="container-fluid">
					<div class="form-group">
						<form method="POST">
							<input type="email" class="form-control auth-field" id="exampleInputEmail" name="email" placeholder="Почта">
							<input type="password" class="form-control auth-field" id="exampleInputPass" name="password" placeholder="Пароль">
							<input type="submit" class="btn btn-primary entry-btn" name="auth" value="ВОЙТИ"></input>
						</form>
						<hr>
						<div class="flex-column d-flex text-center">
							<button type="submit" class="btn btn-primary pass-help-btn">ЗАБЫЛИ ПАРОЛЬ?</button>
							<a href="registration.php" class="reg-text"><span>Регистрация</span></a>
						</div>
					</div>
				</div>
				<?php
					$connect=mysqli_connect("localhost", "root", "root", "mebelisium");

					$email=$_POST['email'];
					$password=$_POST['password'];
					$auth=$_POST['auth'];
					$check_user="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

					if ($auth) {
						$_SESSION['email']=$_POST['email'];
						$_SESSION['password']=$_POST['password'];
						$_SESSION['auth']=$_POST['auth'];

						if ($email and $password) {
							$str_check_user="SELECT * FROM `users` WHERE `email`='$_SESSION[email]' AND `password`='$_SESSION[password]'";
							$run_check_user=mysqli_query($connect,$str_check_user);
							$true_user=mysqli_num_rows($run_check_user);
							$out_user=mysqli_fetch_array($run_check_user);
			
							if ($true_user==1) {
								if ($out_user[role]==1) {
									echo '
									<meta http-equiv = "Refresh"
									content = "0 ; URL = admin-panel.php">
									';
								}
								elseif ($out_user[role]==0) {
									echo '
									<meta http-equiv = "Refresh"
									content = "0 ; URL = index.php">
									';
								}
							}
							else {
								$err="Неверный логин или пароль!";
							}
						}
						else {
							$err="Заполните все поля!";
						}
						?>
            
						<div style="margin:0 auto; text-align: center; font-size: 10pt; color: #D58E32; font-family: Mont; position: relative; width: 232px; height: auto;">
							<?php
								echo $err;
							?>
						</div>
					<?php
					}
				?>
			</div>
	  	</div>
	</div>
</div>

<!-- Header (Menu and search)-->
<header id="header" class="fixed-top">
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #151515;">
		<div class="container">
			<a href="index.php" class="brand"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon icon"></span>
				</button>
					<div class="collapse navbar-collapse" id="navContent">
						<ul class="navbar-nav mr-auto mb-3 mb-lg-0 mx-auto">
							<li class="nav-item">
								<a href="index.php" class="nav-link">ГЛАВНАЯ</a>
							</li>
							<li class="nav-item">
								<a href="about-us.php" class="nav-link">О МАГАЗИНЕ</a>
							</li>
							<li class="nav-item">
								<li class="nav-item dropdown">
									<a href="categories.php" class="nav-link dropdown-toggle" id="navDrop" role="button" aria-expanded="false">КАТАЛОГ ТОВАРОВ</a>
									<ul class="dropdown-menu" aria-labelledby="navDrop">
										<li>
											<a href="hallway.php?category=1" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Прихожая
											</a>
										</li>
										<li>
											<a href="#" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Гостиная
											</a>
										</li>
										<li>
											<a href="#" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Спальня
											</a>
										</li>
										<li>
											<a href="#" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Детская
											</a>
										</li>
										<li>
											<a href="#" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Кухня
											</a>
										</li>
										<li>
											<a href="#" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Офис
											</a>
										</li>
									</ul>
								</li>
							</li>
							<li class="nav-item">
								<a href="sales-goods.php" class="nav-link red">АКЦИИ
									<span style="position: relative; bottom: 1px;">
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-gift-fill" viewBox="0 0 16 16">
											<path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
										</svg>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<li class="nav-item dropdown">
									<div class="nav-link dropdown-toggle" id="navDrop" role="button" aria-expanded="false">ИНФОРМАЦИЯ</div>
									<ul class="dropdown-menu" aria-labelledby="navDrop">
										<li>
											<a href="contacts.php" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Контакты
											</a>
										</li>
                                        <li>
											<a href="delivery.php" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Доставка
											</a>
										</li>
										<li>
											<a href="payment.php" class="dropdown-item">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
													<path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
												</svg>
												Оплата
											</a>
										</li>
									</ul>
								</li>
							</li>
						</ul>
					</div>
			<form action="#" class="d-flex">
				<input type="search" name="Search" placeholder="Поиск по магазину" class="form-control mr-2 search-field">
				<button type="submit" class="btn btn-outline-dark btn-search-header">
					<span class="search">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
						</svg>
					</span>
				</button>
				<button type="button" class="btn btn-outline-dark btn-intake" style="height: 34px; margin-left: 10px;" data-toggle="modal" data-target="#exampleModalCenter">
					<span class="auth">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
							<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
					</span>
				</button>
			</form>
		</div>
	</nav>
</header>