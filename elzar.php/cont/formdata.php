<?php
 
 $verify = mail ("timoxa84@mail.ru","mysite.com","С сайта было получено:\nКоментировали :$_POST[contact_text]","Content-type:text/plain;  charset=utf-8\r\nFrom:$email");
 header("Location: ../index.php");
?>