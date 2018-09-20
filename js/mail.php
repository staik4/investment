<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$tel = $_POST['tel'];


	$namepr = array('none', 'househol', 'sergovo', 'ostrov', 'levashovo');
	$ch = 'Проект не выбран';
	echo $ch;
	$project['none'] = $_POST['inv-amount-common'];
	$project['househol'] = $_POST['inv-amount-househol'];
	$project['sergovo'] = $_POST['inv-amount-sergovo'];
	$project['ostrov'] = $_POST['inv-amount-istrov'];
	$project['levashovo'] = $_POST['inv-amount-levasovo'];

	// echo $project['none'], $project['househol'],$project['sergovo'],$project['ostrov'],$project['levashovo'];
	// echo "hui",$;

	$nameprojects['none'] = "Не выбран проект";
	$nameprojects['househol'] = "Дом отдыха";
	$nameprojects['sergovo'] = "Сергово";
	$nameprojects['ostrov'] = "Остров";
	$nameprojects['levashovo'] = "Левашово";

	$to = "staik4@yandex.ru";
	$subject = "От посетителя сайта";


	for ($i=0; $i < count($namepr); $i++) {
		// echo $project[$namepr[$i]],$namepr[$i]."<br>".$nameprojects[$namepr[$i]]."выбрали";
		if ($project[$namepr[$i]] != none) {
			$ch = $nameprojects[$namepr[$i]];
			$price = $project[$namepr[$i]];
			// echo $choose_pr;
			// echo $ch."for".$i;
		};
	};

	$text =  "Написал(а): $name\n Контактный email - $email\n\n Текст письма: $message\n Телефон - $tel \n Выбранный проект:  $ch \n Сумма инвестиций: $price";
	// echo $ch;
	$header.= "Content-type: text/html; charset=utf-8\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$headers .= "From: Investment.bestmesto.ru>\r\n";
	$sending = mail($to, $subject, $text, $headers);

	if($sending) echo " Ваше письмо отправлено!!";
?>
