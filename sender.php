<?php
	# Email получателя
	$to = "email@email.com";
	
	# Email отправителя
	$sender = "sender@email.com";
	
	# Тема письма
	$subject = "";
	
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	
	# Поля с формы
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comm = $_POST['comm'];
	
	# HTML письма
	$msg = "
		Имя: $name <br>	
		E-mail: $email <br>
		Вопрос: $comm <br><br>
		Заявка принята:  $date, в $time.
	";
 	
	$headers = "MIME-Version: 1.0"."\r\n";
	$headers .= "Content-Type: text/html; charset= utf-8"."\r\n";
	$headers .= "From: ".$sender."\r\n";
	
	mail($to, $subject, $msg, $headers);
?>
<div class="thanks-message">Спасибо, Ваша заявка принята</div>
