<?php
    if($_POST['capcha'] != 4) {
        header('location: index.php'); // проверка ответа на capcha задание
        exit;
    }

    if($_POST['subject'] == 1) {
        $subject = 'Вопрос по уроку';
    } elseif ($_POST['subject'] == 2){
    $subject = 'Личный вопрос';
    } elseif ($_POST['subject'] == 3){
    $subject = 'Благодарность';
    } else {
        $subject = 'Вопрос по уроку';
    }
    $to = "parapa01@inbox.ru";      // емаил куда хотим получать письма
    $form = trim($_POST['email']); // емаил отправителя

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);  // предотвращает ввод каких либо адресов в письме
    $message = trim($message);        // удаление лишних пробелов в письме

    $headers = "From: $form" . "\r\n" .  // от кого
    "Reply-To: $form " . "\r\n" .        // кому ответить
    "X-Mailer: PHP/" . phpversion();     // версия php 

    if(mail($to, $subject, $message, $headers)) {  // отправка письма 
        echo "Письмо отправлено";
    } else {
        echo "Письмо не отправлено";
    }





?>