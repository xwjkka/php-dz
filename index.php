<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first</title>
    <style>
        header {
            display: flex;
        }
    </style>
    <?php
        $hello = "Hello World"
    ?>
</head>
<body>
    <header>
        <img src="logo.png" width="200" alt="mos.polytech">
        <h1>Задание для самостоятельной работы "Hello World"</h1>
    </header>
    <main>
        <p>
        <?= $hello ?>
        </p>
    </main>
    <footer>
        <p>Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить нна хостинг</p>
    </footer>
</body>
</html>