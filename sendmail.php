<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От кого письмо
	$mail->setFrom('order@smbcomp.ru');
	//Кому отправить
	$mail->addAddress('victor_maznichenko@mail.ru');
	$mail->addAddress($_POST['email']);
	//Тема письма
	$mail->Subject = 'Ваш запрос на SMBcomp.ru получен';

	
	if(trim(!empty($_POST['name']))){
		$body.='<p>Здравствуйте, '.$_POST['name'].'!</p>';
	}
	if(trim(!empty($_POST['message']))){
		$body.='<p>Мы получили Ваш запрос и начали его обрабатывать.<br>Наш оператор свяжется с Вами в ближайшее время.</p><p>Ваш запрос:</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<div style="padding-left: 30px;">Ваш e-mail: '.$_POST['email'].'</div>';
	}
	if(trim(!empty($_POST['tel']))){
		$body.='<div style="padding-left: 30px;">Ваш телефон: '.$_POST['tel'].'</div>';
	}
	if(trim(!empty($_POST['message']))){
		$body.='<div style="padding-left: 30px;"><span>Текст запроса:</span> <span>'.$_POST['message'].'</span></div><br>';
	}
	$body.='
	<p>Спасибо за ваше обращение в SMB computers!<br><br></p>
	<p>С уважением, <br>Команда SMB computers</p><br>
	<a href="tel:+74991120346">+7(499) 112-03-46</a><br>
	<a href="mailto:info@smbcomp.ru">mail:  info@smbcomp.ru</a><br>
	<a href="smbcomp.ru">web:  smbcomp.ru</a><br><br>
	<a href="smbcomp.ru"><img src="http://smbcomp.ru/logo_for_email.png" alt=""></a>><br><br>
	<p>С уважением, <br>Команда SMB computers</p>
	';
	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>