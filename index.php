<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>отправка письма на почту</title>
</head>
<body>
    <form action="sandmail.php" method="POST">
         <select name="subject">    <!-- тема письма -->
            <option disable selected>Тема письма</option>  <!-- disable - заголовок видно по умалчанию благодоря selected -->
            <option valye="1">Вопрос по уроку</option>
            <option valye="2">Личный вопрос</option>
            <option valye="3">Благодарность</option>
        </select>
        <input type="email" name="email" placeholder="Введите ваш email" maxlength="50" required> <!-- required - обезательный для заполнения пункт. maxlength-мак-ое кол.симв-ов -->
        <textarea name="message" placeholder="Введите сообщение"
        maxlength="150" required></textarea>
        <img src="capcha.jpg">
        <input type="number" name="capcha" placeholder="Введите ответ" maxlength="3" required>
        <input type="submit" value="Отправить письмо">
    </form>    


</body>
</html>