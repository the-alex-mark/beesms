<?php
     header("Content-Type: text/xml; charset=UTF-8");
	 Include('BEESMS.class.php');
     // Отправка СМС сообщения по списку адресатов
     $sms_text='Привет';
     $target='+79990001212, 80009990000';
     $sender='vasya';
     
     $sms= new BEESMS('userX.Y','пароль');
     $result=$sms->post_message($sms_text, $target, $sender);
     echo $result; // результат XML
     
     // Отправка СМС по кодовому имени контакт листа
     $sms_text='Привет';
     $phl_codename='drugani';
     $result=$sms->post_message_phl($sms_text, $phl_codename, $sender);
     echo $result; // результат XML
?>