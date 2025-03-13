<?php 
     // Получение содержимого ящика входящих сообщений
     header("Content-Type: text/xml; charset=UTF-8");
	 Include('BEESMS.class.php');
     $sms= new BEESMS('userX.Y','пароль');
     //$data = $sms->status_inbox(INBOX NUMBER, ONLY NEW, DATE FROM, DATE TO);
     $data = $sms->status_inbox(false,0,'18.10.2012 00:00:00','18.10.2012 16:00:00');
	 echo $data; // результат XML
?>
