<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Держи Волну. Основная страница</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png" type="image/png">
</head>

<body>
    <section class="header">
        <nav class="navbar">
            <a href="index.php">Главная</a>
            <a href="#description">О нас</a>
            <a href="#production">Производство</a>
            <a href="#why-us">Гарантия качества</a>
            <a href="#consultation">Консультация</a>
            <a href="#contacts">Контакты</a>
        </nav>
    </section>

        <section class="main">
            <h1>Держи Волну</h1>
            <p>Мечты становятся ближе!</p>
            <form action="storepage.php">
                <button class="hero-btn">Посмотреть ассортимент</button>
            </form>
        </section>


    <section class="separator" id="description">
        <a>О нас</a>
    </section>


        <section class="description">
            <h1>Краткая история компании: как начался бренд <br>и какие ценности он несёт.</h1>
            <!-- <a>Suspendisse fermentum lacus et <br>
                dolor blandit, et aliquet magna <br>
                convallis. Integer sagittis massa <br>
                urna, a dignissim dolor condimentum <br>
                sit amet. Suspendisse fermentum lacus et <br>
                dolor blandit, et aliquet magna <br>
                convallis. Integer sagittis massa <br>
                urna, a dignissim dolor condimentum <br>
                sit amet.
            </a> -->
            <a>Наша компания была основана несколько лет <br>
                назад группой энтузиастов, которые разделяют <br>
                страсть к сёрфингу и стремятся создать <br>
                идеальные условия для его занятия. <br>
                Мы ценим каждого клиента и ставим качество <br>
                продукции на первое место. <br>
                <br>
                Наш ассортимент включает в себя разнообразие <br>
                типов досок для сёрфинга, чтобы каждый мог <br>
                найти оптимальный вариант под себя. <br>
            </a>
                <img src="img/desc.jpg" alt="Сёрфер">
        </section>


    <section class="separator-custom" id="production">
        <a>Наше производство</a>
    </section>


        <section class="production">
            <!-- <h1>Suspendisse fermentum lacus et dolor blandit, et aliquet magna convallis. <br>
                Integer sagittis massa urna.Suspendisse fermentum lacus et dolor blandit, et aliquet magna convallis. <br>
                Integer sagittis massa urna.
            </h1>   -->
            <h1>Для создания наших досок мы используем лучшие материалы и самое современное оборудование. <br>
                Каждая доска проходит строгий контроль качества на каждом этапе производства, чтобы обеспечить <br>
                надёжность и долговечность изделия.
            </h1>
            
            <div class="wrapper">
                <div class="image">
                    <img src="img/prod1.jpg">
                    <div class="content">
                        <a>Качество</a>
                        <p>Не выходит из моды никогда</p>
                    </div>
                </div>
                <div class="image">
                    <img src="img/prod2.jpg">
                    <div class="content">
                        <a>Надёжность</a>
                        <p>Воплощаем в реальность</p>
                    </div>
                </div>
            </div>
        </section>


    <section class="separator-white" id="why-us">
        <a>Почему именно мы?</a>
    </section>


        <section class="why-us">
            <h1>Aenean efficitur sapien ac tortor mattis, a suscipit elit pellentesque. <br>
                Vestibulum id risus posuere, gravida orci non, mattis nulla. <br>
                Nam id nulla eget <br>
                lectus tincidunt blandit. Sed sagittis nunc nec nunc <br>
                ultrices, vel congue justo convallis. <br>
                Quisque dignissim nibh placerat, gravida sem nec, tincidunt nunc.
            </h1>
            <!-- <h2>Aenean efficitur sapien ac tortor mattis, a suscipit elit pellentesque. <br>
                Vestibulum id risus posuere, gravida orci non, mattis nulla. <br>
                Nam id nulla eget <br>
                lectus tincidunt blandit. Sed sagittis nunc nec nunc <br>
                ultrices, vel congue justo convallis. <br>
                Quisque dignissim nibh placerat, gravida sem nec, tincidunt nunc.
            </h2> -->
            <h2>Выбирая наши доски для сёрфинга, вы получаете не только высокое качество и надёжность, но и комфорт и удовольствие от катания. <br>
                Наши изделия помогут вам развивать свои навыки <br>
                и достигать новых высот в этом захватывающем виде спорта. <br>
            </h2>
        </section>


    <section class="separator-white" id="consultation">
        <a>Консультация</a>
    </section>


    <section class="consultation">
        <h1>Если у вас остались какие-либо вопросы, можете заполнить поля ниже <br>
            и мы постараемся на них ответить
        </h1>

        <form action="connect.php" method="POST">
            <div class="cons-panel" onload="disableSubmit()">
                <label for="name">ФИО:</label>
                <input id="name" name="user_name">

                <label for="email">Электронная почта:</label>
                <input type="email" id="email" name="user_email">

                <label for="phonenum">Номер телефона:</label>
                <input type="tel" id="phonenum" name="user_phonenumber">

                <label for="appeal">Причина обращения:</label>
                <input class="big-input" id="appeal" name="user_text">
            </div>
                <button type="submit" name="submit" class="hero-btn">Отправить данные</button>
        </form>
        
        <label class="check-label" for="check">Согласие на обработку персональных данных</label>
        <input class="check" type="checkbox">
    </section>


    <section class="separator-white" id="contacts">
        <a>Контакты</a>
    </section>


    <section class="contacts">

        <?php
        include("main.php");
        ?>

        <h1>Адрес:</h1>
        <div class="contacts-text">
            <?php
                $sql = "SELECT * FROM info_table";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_array($result)) {
                    $adress = $row['adress'];
                    $phonenumber = $row['phonenumber'];
                    $email = $row['email'];
                echo "<a>$adress</a>
                <a>Рабочий телефон: <br>
                $phonenumber <br>
                Электронная почта <br>
                $email</a>";
                }
            ?>
        </div>   
    </section>

    <section class="footer">
        <a>Чаплин Александр Андреевич <br>
        ИС-4-2 <br>
        2024 <br>
        Все права защищены</a>
    </section>

</body>
</html>