<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php
        $hello = "Hello World"
    ?>
</head>
<body>
    <header>
        <img src="logo.png" width="200" alt="mos.polytech">
        <h1>Задание для самостоятельной работы "Feedback"</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form class="row g-3 needs-validation" action="https://httpbin.org/post" method="POST">

                    <div class="col-md-6">
                        <label for="name_id" class="form-label">Enter your name</label>
                        <input type="text" name="name" id="name_id">
                    </div>

                    <div class="col-md-6">
                        <label for="email_id" class="form-label">Enter your email</label>
                        <input type="email" name="email" id="email_id">
                    </div>
                    
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Тип обращения</option>
                            <option value="1">Жалоба</option>
                            <option value="2">Предложение</option>
                            <option value="3">Благодарность</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="text_id" class="form-label">Текст обращения</label>
                        <textarea id="text_id" placeholder="Введите текст">
                        </textarea>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio1">
                        <label class="form-check-label" for="radio1">
                            СМС
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio2" checked>
                        <label class="form-check-label" for="radio2">
                            Email
                        </label>
                    </div>


                    <button type="submit" class="col-6">Send</button>
                    <button type="submit" class="col-6">2</button>
                </form>
            </div>
        </div>
        <!-- <form>
            <?php
                $url = "https://httpbin.org";
                $answer = get_headers($url);
            ?>

            <textarea name="" id="" cols="50" rows="50">
                <?php
                    print_r($answer);
                ?>
            </textarea>

            <textarea name="" id="" cols="50" rows="50">
                <?php
                   var_dump($answer);
                ?>
            </textarea>
        </form> -->
    </main>
    <footer>
        <p>Собрать сайт из двух страниц. 1: Сверстать форму обратной связи, 2: Вывести на страницу результат. Загрузить код в удаленный репозиторий. Залить на хостинг</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>