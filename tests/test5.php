<?php
     header("Content-Type: text/xml; charset=UTF-8");
	 Include('BEESMS.class.php');
     // Отправка СМС сообщения по списку адресатов
     $sms_text='Привет';
     $target='+79036655665';
     $sender_name='sender';
	$proxy_data = array(
		"host"	=> "127.0.0.1",
		"port"	 	=> "8080",
		"user"	=> "",
		"pass"	=> ""
	 );
     
     $sms= new BEESMS('user','password','beeline.amega-inform.ru',$proxy_data);
     $result=$sms->post_message($sms_text, $target, $sender_name);
     echo $result; // результат XML
     
?>