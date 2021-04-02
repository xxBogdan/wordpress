<?php
session_start();
?>
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

    <!-- Form User registration -->
    <section class="delivery" style="margin-top: 134px; height: auto; margin-bottom: 100px;">
        <div class="container col-lg-8">
            <div class="row col-lg-12">
                <div class="history" style="float: left; margin-left: 20px; margin-bottom: 20px;">
                    <span class="home" style="font-family: Mont Bold; color: #606468; font-size: 10pt;">
                        <a href="index.php">ГЛАВНАЯ</a>
                    </span> 
                    <span style="font-size: 10pt; color: #151515; font-family: Mont Bold;">» РЕГИСТРАЦИЯ</span>
                </div>
            </div>
            <hr size="3" color="#E6E6E6" width="1170px" style="margin-left: 21px;">
            <div class="col-lg-12 d-flex flex-column" style="height: 800px; height: auto;">
                <h3 class="title-about-us d-flex justify-content-center" style="font-size: 18pt; font-family: Mont Bold; margin-left: 5px; margin-top: 20px; color:#3A3D45;">
                    РЕГИСТРАЦИЯ
				</h3>
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <form method="POST">
                        <label for="" class="title-input">E-mail</label>
                        <input type="email" class="form-control auth-field-reg" placeholder="example@mail.ru" name="email">
                        <label for="" class="title-input">Номер телефона</label>
                        <input type="tel" id="mobile_phone" class="form-control auth-field-reg" placeholder="+7 (___)___-__-__" name="mobile_phone">
                        <label for="" class="title-input">Пароль</label>
                        <input type="password" class="form-control auth-field-reg" placeholder="Введите пароль" name="password">
                        <div style="width: 230px; height: 75px; border: 1px solid #D58E32; color: #D58E32; padding: 10px; font-family: Mont; font-size: 9pt; margin-top: 25px; margin-left: 2px;">Пароль должен состоять из одной заглавной буквы и цифр (от 6 до 16 символов)</div>
                        <label for="" class="title-input">Подтверждение пароля</label>
                        <input type="password" class="form-control auth-field-reg" placeholder="Подтвердите пароль" name="password_confirm">
                        <div class="checkbox">
                            <input type="checkbox" name="terms" class="checkbox-input" id="checkbox-main">
                            <label class="checkbox-label" for="checkbox-main">Я соглашаюсь с <a href="confidentiality.php" title="Пользовательское соглашение">политикой<br> конфиденциальности</a></label>
                        </div>
                        <input type="submit" class="btn btn-primary reg-button" name="reg" value="ЗАРЕГИСТРИРОВАТЬСЯ"></input>
                    </form>
                </div>
			</div>
        </div>
    </section>

    <!-- Registration settings server -->
    <?php
        $connect=mysqli_connect("localhost", "root", "root", "mebelisium");
        
	    $email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	    $password=$_POST['password'];
        $mobile_phone=filter_var(trim($_POST['mobile_phone']),FILTER_SANITIZE_STRING);
        $reg=$_POST['reg'];
        $password_confirm=$_POST['password_confirm'];
        $terms=$_POST['terms'];
        $role=$_POST['role'];

        if ($reg) { $str_add_user="INSERT INTO `users` (`role`, `email`, `password`, `mobile_phone`) VALUES ('Пользователь', '$email', '$password', '$mobile_phone');";
            if ($email and $password and $mobile_phone and $password_confirm) {
                if (mb_strlen($password) >= 6 || mb_strlen($password) <= 16) {
                    if (preg_match("/^[ЁА-яA-z0-9]+$/", $password)) {
                        if (preg_match('~[A-ZА-ЯЁ]~', $password)) {
                            if ($password === $password_confirm) {
                                if(isset($_POST['terms'])){
                                    $run_add_user=mysqli_query($connect,$str_add_user);
									echo 
                                    '
									<meta http-equiv = "Refresh"
									content = "0 ; URL = index.php">
									';
                                }
                                else {
                                    $err="Подтвердите политику конфиденциальности!";
                                }
                            }
                            else {
                                $err="Пароли не совпадают!";
                            }
                        }
                        else {
                             $err="Пароль должен состоять из одной заглавной буквы!";
                        }
                
                    }
                    else {
                         $err="Пароль должен состоять только из букв и цифр!";
                    }
                }
                else {
                     $err="Недопустимая длина пароля! (от 6 до 16 символов)";
                }
            }
            else {
                $err="Заполните все поля!";
            }
            ?>
            
            <div style="margin: 0 auto; text-align: center; font-size: 10pt; color: #D58E32; font-family: Mont; position: relative; border: 1px solid #E7DBDD; border-radius: 3px; bottom: 75px; padding: 10px; width: 232px; height: auto; background-color: #F8E5E9;">
                <?php
                    echo $err;
                ?>
            </div>
            <?php
        }
    ?>

    <!-- Connect JS and Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>

    <!-- Mask for mobile form -->
    <script>
        $(document).ready(function(){
            $("#mobile_phone").mask("+7 (999) 999-99-99");
        });
    </script>

	<?php
		require 'footer.php';
	?>

</body>
</html>
