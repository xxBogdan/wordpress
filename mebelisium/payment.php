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

	<!-- Payment -->
    <section class="delivery" style="margin-top: 134px; height: auto; margin-bottom: 54px;">
        <div class="container col-lg-8">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="history" style="float: left; margin-left: 20px; margin-bottom: 20px;">
                        <span class="home" style="font-family: Mont Bold; color: #606468; font-size: 10pt;">
                            <a href="index.php">ГЛАВНАЯ</a>
                        </span> 
                        <span style="font-size: 10pt; color: #151515; font-family: Mont Bold;">» УСЛОВИЯ ОПЛАТЫ</span>
                    </div>
                </div>
            </div>
            <hr size="3" color="#E6E6E6" width="1170px" style="margin-left: 21px;">
            <div class="col-lg-12 d-flex flex-column" style="height: 800px; margin-left: 5px; height: auto;">
				<h3 class="delivery-title" style="font-size: 18pt; font-family: Mont Bold; padding-top: 20px; color:#3A3D45;">
                    УСЛОВИЯ ОПЛАТЫ
                </h3>
				<p style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 18px;">Вы можете выбрать один из трёх вариантов оплаты:</p>
				<p class="delivery-title" style="font-size: 13pt; font-family: Mont Bold; margin-top: 5px; color:#3A3D45;">Оплата наличными</p>
				<p style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 4px;">При выборе варианта оплаты наличными, вы дожидаетесь приезда курьера и передаёте ему сумму за товар в рублях. Курьер предоставляет товар, который можно осмотреть на предмет повреждений, соответствие указанным условиям. Покупатель подписывает товаросопроводительные документы, вносит денежные средства и получает чек.</p>
				<p style="font-family: Mont Bold; font-size: 10pt; color: #606468; margin-top: 4px;">Также оплата наличными доступна при оплате по почте или использовании постамата.</p>
				<p class="delivery-title" style="font-size: 13pt; font-family: Mont Bold; margin-top: 5px; color:#3A3D45;">Безналичный расчёт</p>
				<p style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 4px;">При оформлении заказа в корзине вы можете выбрать вариант безналичной оплаты. Мы принимаем карты Visa и Master Card. Чтобы оплатить покупку, вас перенаправит на сервер системы ASSIST, где вы должны ввести номер карты, срок действия, имя держателя.</p>
				<p class="delivery-title" style="font-size: 13pt; font-family: Mont Bold; margin-top: 5px; color:#3A3D45;">Вам могут отказать от авторизации в случае</p>
				<ul style="list-style-type: square;">
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">банк не поддерживает услугу платежей в интернете;</span></li>
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">на карте недостаточно средств для покупки;</span></li>
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">истекло время ожидания ввода данных;</span></li>
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">в данных была допущена ошибка.</span></li>
				</ul>
                <p style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 4px;">В этом случае вы можете повторить авторизацию через 20 минут, воспользоваться другой картой или обратиться в свой банк для решения вопроса.</p>
                <p style="font-family: Mont Bold; font-size: 10pt; color: #606468; margin-top: 4px;">Безналичным расчётом можно воспользоваться при курьерской доставке или при использовании постамата.</p>
				<p class="delivery-title" style="font-size: 13pt; font-family: Mont Bold; margin-top: 5px; color:#3A3D45;">Электронные системы</p>
				<p style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 4px;">Для оплаты вы можете воспользоваться одной из электронных платёжных систем:</p>
				<p style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 4px;">Перед оплатой вы можете оценить состояние коробки (не вскрывая): вес, целостность. Если вам кажется, что заказ не соответствует параметрам или коробка повреждена, попросите сотрудника почты составить акт о вскрытии. Вскрывать коробку самостоятельно вы можете только после того, как оплатили заказ.</p>
                <ul style="list-style-type: square;">
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">PayPal;</span></li>
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">WebMoney;</span></li>
					<li style="color: #D58E32;"><span style="font-family: Mont; font-size: 10pt; color: #606468; margin-top: 5px;">Яндекс.Деньги.</span></li>
				</ul>
                <p style="font-family: Mont Bold; font-size: 10pt; color: #606468; margin-top: 4px;">Вас перенаправит на страницу платежного сервиса, следуя инструкциям, заполните правильную форму.</p>
			</div>
        </div>
    </section>

	<?php 
		require 'footer.php';
	?>

	</body>
</html>
	