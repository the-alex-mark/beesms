<?php
   // Единый запрос 
   header("Content-Type: text/xml; charset=UTF-8");
   Include('BEESMS.class.php');
   $sms= new BEESMS('userX.Y','пароль');
   
   $sms->start_multipost();    // !!! Команда на кеширование запросов
   
   $sms->post_message('Привет', '+79999999991,+79999999992', 'Vasya');   // Отправка смс 
   $sms->post_message_phl('Здраствуйте', 'druzya', 'Petya');                        // Отправка смс 
   $sms->status_sms_id(6666);           // данные о сообщении SMS_ID=6666
   $sms->status_sms_group_id(110) ; // данные о сообщениях с SMS_GROUP_ID=110
   
   $r_xml=$sms->process();  // !!! отправить всё одним запросом и получить результат в XML
   
   echo $r_xml; // результат XML
?> 
