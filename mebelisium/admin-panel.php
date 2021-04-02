<!DOCTYPE html>
<html>
    <head>
	    <title>Mebelisium</title>
	    <meta charset="utf-8">
	    <link rel="icon" href="images/favicon/favicon.png">
	    <link rel="stylesheet" type="text/css" href="main.css">
	    <link rel="stylesheet" type="text/css" href="media.css">
        <link rel="stylesheet" type="text/css" href="admin-panel.css">
	    <link rel="stylesheet" type="text/css" href="css-bootstrap/bootstrap.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body>
        
    <!-- Header (Menu and search)-->
    <header id="header" class="fixed-top">
	    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #151515;">
		    <div class="container col-lg-12">
			    <a href="index.php" class="brand"></a>
                <form method="POST">
                    <input type="submit" class="exit" name="exit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </input>
                </form>
		    </div>
	    </nav>
    </header>
    <div class="container col-lg-12">
        <div class="row d-flex flex-row">
            <div class="col-lg-2">
                <div class="d-flex flex-column align-items-center">
                    <span class="name-panel" style="font-family: Mont Bold; font-size: 11pt; padding-top: 135px;">Добавление «Товаров»</span>
                    <form method="POST" enctype="multipart/form-data" class="form-send">
                        <input class="field" type="text" name="title" placeholder="Название товара"><br>
                        <input class="field" type="text" name="description" placeholder="Описание товара"><br>
                        <span style="font-size: 10pt; font-family: Mont Bold; color: #D58E32;">Выберите категорию</span><br>
                        <input type="radio" class="radio" id="radio_1" name="category" value="1">
                        <label for="radio_1"><span class="size-sale">Прихожая</span></label>
                        <input type="radio" class="radio" id="radio_2" name="category" value="2">
                        <label for="radio_2"><span class="size-sale">Гостиная</span></label>
                        <input type="radio" class="radio" id="radio_3" name="category" value="3">
                        <label for="radio_3"><span class="size-sale">Спальня</span></label>
                        <input type="radio" class="radio" id="radio_4" name="category" value="4">
                        <label for="radio_4"><span class="size-sale">Детская</span></label><br>
                        <input type="radio" class="radio" id="radio_5" name="category" value="5">
                        <label for="radio_5"><span class="size-sale">Кухня</span></label><br>
                        <input type="radio" class="radio" id="radio_6" name="category" value="6">
                        <label for="radio_6"><span class="size-sale">Офис</span></label><br>
                        <span style="font-size: 10pt; font-family: Mont Bold; color: #D58E32;">Выберите подкатегорию</span><br>
                        <input type="radio" class="radio" id="radio_7" name="subcategory" value="1">
                        <label for="radio_7"><span class="size-sale">Диваны</span></label>
                        <input type="radio" class="radio" id="radio_8" name="subcategory" value="2">
                        <label for="radio_8"><span class="size-sale">Кресла</span></label>
                        <input type="radio" class="radio" id="radio_9" name="subcategory" value="3">
                        <label for="radio_9"><span class="size-sale">Стулья</span></label>
                        <input type="radio" class="radio" id="radio_10" name="subcategory" value="4">
                        <label for="radio_10"><span class="size-sale">Столы</span></label><br>
                        <input type="radio" class="radio" id="radio_11" name="subcategory" value="5">
                        <label for="radio_11"><span class="size-sale">Тумбы</span></label><br>
                        <input type="radio" class="radio" id="radio_12" name="subcategory" value="6">
                        <label for="radio_12"><span class="size-sale">Шкафы</span></label><br>
                        <input type="radio" class="radio" id="radio_13" name="subcategory" value="7">
                        <label for="radio_13"><span class="size-sale">Бар</span></label><br>
                        <input class="field" type="text" name="size" placeholder="Размеры (ШхВ/см.)"><br>
                        <input class="field" type="text" name="manufacturer" placeholder="Производитель"><br>
                        <input class="field" type="text" name="guarantee" placeholder="Гарантия (мес.)"><br>
                        <input class="field" type="text" name="material" placeholder="Материал"><br>
                        <input class="field" type="text" name="color" placeholder="Цвет"><br>
                        <input class="field" type="text" name="collection" placeholder="Коллекция"><br>
                        <input class="field" type="text" name="price" placeholder="Цена (руб.)"><br>
                        <input class="discount-price" type="text" name="discount_price" placeholder="Цена со скидкой (руб.)"><br>
                        <span style="font-size: 10pt; font-family: Mont Bold; color: #D58E32;">Выберите размер скидки</span><br>
                        <input type="radio" class="radio" id="radio_14" name="discount" value="0">
                        <label for="radio_14"><span class="size-sale">0%</span></label>
                        <input type="radio" class="radio" id="radio_15" name="discount" value="1">
                        <label for="radio_15"><span class="size-sale">5%</span></label>
                        <input type="radio" class="radio" id="radio_16" name="discount" value="2">
                        <label for="radio_16"><span class="size-sale">15%</span></label>
                        <input type="radio" class="radio" id="radio_17" name="discount" value="3">
                        <label for="radio_17"><span class="size-sale">25%</span></label><br>
                        <div class="input__wrapper">
                            <input type="file" name="avatar" id="input__file" class="input input__file">
                            <label for="input__file" class="input__file-button">
                                <span class="input__file-icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                    </svg>
                                </span>
                                <span class="input__file-button-text">Выберите фото</span>
                            </label>
                        </div>
                        <input type="submit" class="send-goods" name="send_goods" value="ОТПРАВИТЬ"></input>
                    </form>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="d-flex flex-column align-items-center">
                    <span class="name-panel" style="font-family: Mont Bold; font-size: 11pt; padding-top: 135px;">Добавление «Пользователей»</span>
                    <form method="POST" enctype="multipart/form-data" class="form-send">
                        <span style="font-size: 10pt; font-family: Mont Bold; color: #D58E32;">Выберите роль пользователя</span><br>
                        <input type="radio" class="radio" id="radio_18" name="role" value="0">
                        <label for="radio_18"><span class="size-sale">Пользователь</span></label>
                        <input type="radio" class="radio" id="radio_19" name="role" value="1">
                        <label for="radio_19"><span class="size-sale">Админ</span></label>
                        <input class="field" type="email" name="email" placeholder="Электронная почта"><br>
                        <input class="field" type="text" name="password" placeholder="Пароль"><br>
                        <div style="width: 210px; height: 75px; border: 1px solid #D58E32; color: #D58E32; padding: 10px; font-family: Mont; font-size: 9pt; margin-bottom: 10px;">Пароль должен состоять из одной заглавной буквы и цифр (от 6 до 16 символов)</div>
                        <input class="field-phone" id="mobile_phone" type="tel" name="mobile_phone" placeholder="+7 (___)___-__-__"><br>
                        <input type="submit" class="send-users" name="send_users" value="ОТПРАВИТЬ"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>

    <?php 
        $connect=mysqli_connect("localhost", "root", "root", "mebelisium");

        $title=$_POST['title'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $subcategory=$_POST['subcategory'];
        $size=$_POST['size'];
        $manufacturer=$_POST['manufacturer'];
        $guarantee=$_POST['guarantee'];
        $material=$_POST['material'];
        $color=$_POST['color'];
        $collection=$_POST['collection'];
        $price=$_POST['price'];
        $discount_price=$_POST['discount_price'];
        $discount=$_POST['discount'];
        $send_goods=$_POST['send_goods'];

        $name_avatar="avatar_".md5($title).".png";
        $type_avatar=$_FILES['avatar']['type'];
	    $tmp_name_avatar=$_FILES['avatar']['tmp_name'];
	    $size_avatar=$_FILES['avatar']['size'];
	    $path="images/goods/".$name_avatar;

        if ($send_goods) { $str_add_goods="INSERT INTO `goods` (`title`, `description`, `category`, `subcategory`, `size`, `manufacturer`, `guarantee`, `material`, `color`, `collection`, `price`, `discount_price`, `discount`, `avatar`) VALUES ('$title', '$description', '$category', '$subcategory', '$size', '$manufacturer', '$guarantee', '$material', '$color', '$collection', '$price', '$discount_price', '$discount', '$name_avatar');";
            if ($type_avatar=="image/png") {
                $run_add_goods=mysqli_query($connect,$str_add_goods);
                if ($run_add_goods) {
                    move_uploaded_file($tmp_name_avatar, $path);
                    $success="Вы добавили товар!";
                }
                else {
                    $err="Ошибка добавления товара!";
                }
            }
            else {
                $err="Неверный формат изображения! (Должен быть .PNG)";
            }
            ?>
            
            <div style="text-align: center; font-size: 10pt; color: #D58E32; font-family: Mont; border: 1px solid #E7DBDD; border-radius: 3px; padding: 10px; width: 232px; height: auto; background-color: #F8E5E9;">
                <?php
                    echo $err;
                ?>
            </div>
            <div style="margin: 0 auto; text-align: center; font-size: 10pt; color: #D58E32; font-family: Mont; border: 1px solid #E7DBDD; border-radius: 3px; padding: 10px; width: 232px; height: auto; background-color: #green;">
                <?php
                    echo $success;
                ?>
            </div>
            <?php
        }
    ?>

    <?php
        
        $role=$_POST['role'];
	    $email=$_POST['email'];
	    $password=$_POST['password'];
        $mobile_phone=$_POST['mobile_phone'];
        $send_users=$_POST['send_users'];

        if ($send_users) { $str_add_user="INSERT INTO `users` (`role`, `email`, `password`, `mobile_phone`) VALUES ('$role', '$email', '$password', '$mobile_phone');";
            if ($role and $email and $password and $mobile_phone) {
                if (mb_strlen($password) >= 6 || mb_strlen($password) <= 16) {
                    if (preg_match("/^[ЁА-яA-z0-9]+$/", $password)) {
                        if (preg_match('~[A-ZА-ЯЁ]~', $password)) {
                            if ($role==0 || $role==1) {
                                $run_add_user=mysqli_query($connect,$str_add_user);
                                $success="Вы успешно добавили пользователя!";
                            }
                            else {
                                $err="Роль должна содержать только цифры! (от 0 до 1)";
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
            
            <div style="margin: 0 auto; text-align: center; font-size: 10pt; color: #D58E32; font-family: Mont; border: 1px solid #E7DBDD; border-radius: 3px; padding: 10px; width: 232px; height: auto; background-color: #F8E5E9;">
                <?php
                    echo $err;
                ?>
            </div>
            <div style="margin: 0 auto; text-align: center; font-size: 10pt; color: #D58E32; font-family: Mont; border: 1px solid #E7DBDD; border-radius: 3px; padding: 10px; width: 232px; height: auto; background-color: #green;">
                <?php
                    echo $success;
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