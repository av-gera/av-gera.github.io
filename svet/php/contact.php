<?php
if (trim($_POST['mfbPhone']) == '') {
	echo 'fasle';
}
else {
	$txtname = trim($_POST['name']);
	$txtemail = trim($_POST['email']);
	$txtphone = trim($_POST['phone']);

	// от кого
	$fromMail = 'kaza4enko@ukr.net';
	// Сюда введите Ваш email
	$emailTo = 'av216921@gmail.com';

	$subject = 'Обратная связь';
	$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
	$headers = "From: Пример формы<$fromMail>\n";
	$headers .= 'Content-type: text/plain; charset="utf-8"\r\n';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
	// тело письма
	$body = "Получено письмо с сайта ".$site." \n\nИмя: ".$txtname."\nТелефон: ".$txtphone."\ne-mail: ".$txtemail."\nСообщение: ".$txtmessage;
	mail($emailTo, $subject, $body, $headers );
	echo 'ok';
}
?>
