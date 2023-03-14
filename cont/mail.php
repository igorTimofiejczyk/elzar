<?php
$name=$_POST["name"];
$email=$_POST["email"];
$mess=$_POST["mess"];


if (isset ($name))
{
$name = substr($name,0,20);
if (empty($name))
{
echo "<center><b>Не указано имя !!!<p>";
echo "<a href=cont/contacts.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$name = "не указано";
}
 
 
if (isset ($organisation))
{
$name = substr($organisation,0,20);
if (empty($organisation))
{
echo "<center><b>Не указано название организаций !!!<p>";
echo "<a href=cont/contacts.html>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$organisation = "не указано";
}
 
 
if (isset ($phone))
{
$name = substr($phone,0,20);
if (empty($phone))
{
echo "<center><b>Не указан номер телефона !!!<p>";
echo "<a href=cont/contacts.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$phone = "не указано";
}
 
 
if (isset ($email))
{
$email = substr($email,0,20);
if (empty($email))
{
echo "<center><b>Не указан e-mail !!!<p>";
echo "<a href=cont/contacts.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$email = "не указано";
}
if (isset ($mess))
{
$mess = substr($mess,0,1000);
if (empty($mess))
{
echo "<center><b>Сообщение не написано !!!<p>";
echo "<a href=cont/contacts.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else
{
$mess = "не указано";
}
$i = "не указано";
if ($name == $i AND $organisation == $i AND $phone == $i AND $email == $i AND $mess == $i)
{
echo "Ошибка ! Скрипту не были переданы параметры !";
exit;
}
$to = "igarekas@gmail.com";
$subject = "Сообщение с вашего интернет-сайта";
$message = "Имя пославшего:$name::::::::::Организация:$organisation::::::::::Телефон:$phone::::::::::Электронный адрес:$email::::::::::Сообщение:$mess:::::::::IP-адрес:$REMOTE_ADDR";
mail ($to,$subject,$message) or print "Не могу отправить письмо !!!";
echo "<center><b>Спасибо за отправку вашего сообщения<a href=index.html>Нажмите</a>, что бы вернуться на главную...>";
exit;
?>