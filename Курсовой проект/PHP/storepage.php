<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Держи Волну. Ассортимент</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.php">
    <link rel="icon" href="img/logo.png" type="image/png">
    <script src="script.js"></script>
</head>
<body>

    <?php
        include("main.php");
    ?>

    <section class="header">
        <nav class="navbar">
            <a href="index.php">Главная</a>
            <a href="index.php #description">О нас</a>
            <a href="index.php #production">Производство</a>
            <a href="index.php #why-us">Гарантия качества</a>
            <a href="index.php #consultation">Консультация</a>
            <a href="index.php #contacts">Контакты</a>
        </nav>
    </section>

    <section class="store-main">
        <h1>Держи Волну</h1>
        <p>Особые предложения</p>
    </section>


    <section class="separator-store" id="catalog">
    </section>


    <section class="search-store" id="search">
        <input type="text" id="searchbar" name="searchbar" placeholder="Поиск" onkeyup="search()">
        <select id="filter">
            <option value="" disabled selected>Фильтр</option>
            <option value="aviable">Есть в наличии</option>
            <option value="not-aviable">Нет в наличии</option>       
        </select>
    </section>


    <section class="catalog-store" id="blur">
        <div class="catalog-row">
            <!-- Товар №1 -->
            <div class="catalog-item">
                <!-- Изображение -->
                <div class="catalog-item-img">
                    <?php
                        $sql = "SELECT * FROM item_image WHERE id='1'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $image = $row['image'];
                        echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image">';
                        }
                    ?>
                </div>
                <!-- Название и описание -->
                <?php
                    $sql = "SELECT * FROM item_info WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    echo "<h1>$name</h1>
                    <a>$description</a>";
                    }
                ?>
                <!-- Цена и наличие -->
                <?php
                    $sql = "SELECT * FROM item_status WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $status = $row['status'];
                        $price = $row['price'];
                    echo "<button class='store-btn' onclick='toggle()'>$price<br>$status</button>";
                    }
                ?>  
            </div>

            <!-- Товар №2 -->
            <div class="catalog-item">
                <!-- Изображение -->
                <div class="catalog-item-img">
                    <?php
                        $sql = "SELECT * FROM item_image WHERE id='2'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $image = $row['image'];
                        echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image">';
                        }
                    ?>
                </div>
                <!-- Название и описание -->
                <?php
                    $sql = "SELECT * FROM item_info WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    echo "<h1>$name</h1>
                    <a>$description</a>";
                    }
                ?>
                <!-- Цена и наличие -->
                <?php
                    $sql = "SELECT * FROM item_status WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $status = $row['status'];
                        $price = $row['price'];
                    echo "<button class='store-btn' onclick='toggle()'>$price<br>$status</button>";
                    }
                ?>  
            </div>

            <!-- Товар №3 -->
            <div class="catalog-item">
                <!-- Изображение -->
                <div class="catalog-item-img">
                    <?php
                        $sql = "SELECT * FROM item_image WHERE id='3'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $image = $row['image'];
                        echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image">';
                        }
                    ?>
                </div>
                <!-- Название и описание -->
                <?php
                    $sql = "SELECT * FROM item_info WHERE id='3'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    echo "<h1>$name</h1>
                    <a>$description</a>";
                    }
                ?>
                <!-- Цена и наличие -->
                <?php
                    $sql = "SELECT * FROM item_status WHERE id='3'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $status = $row['status'];
                        $price = $row['price'];
                    echo "<button class='store-btn' onclick='toggle()'>$price<br>$status</button>";
                    }
                ?>  
            </div>

            <!-- Товар №4 -->
            <div class="catalog-item">
                <!-- Изображение -->
                <div class="catalog-item-img">
                    <?php
                        $sql = "SELECT * FROM item_image WHERE id='4'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $image = $row['image'];
                        echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image">';
                        }
                    ?>
                </div>
                <!-- Название и описание -->
                <?php
                    $sql = "SELECT * FROM item_info WHERE id='4'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    echo "<h1>$name</h1>
                    <a>$description</a>";
                    }
                ?>
                <!-- Цена и наличие -->
                <?php
                    $sql = "SELECT * FROM item_status WHERE id='4'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $status = $row['status'];
                        $price = $row['price'];
                    echo "<button class='store-btn' onclick='toggle()'>$price<br>$status</button>";
                    }
                ?>  
            </div>

            <!-- Товар №5 -->
            <div class="catalog-item">
                <!-- Изображение -->
                <div class="catalog-item-img">
                    <?php
                        $sql = "SELECT * FROM item_image WHERE id='5'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $image = $row['image'];
                        echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image">';
                        }
                    ?>
                </div>
                <!-- Название и описание -->
                <?php
                    $sql = "SELECT * FROM item_info WHERE id='5'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    echo "<h1>$name</h1>
                    <a>$description</a>";
                    }
                ?>
                <!-- Цена и наличие -->
                <?php
                    $sql = "SELECT * FROM item_status WHERE id='5'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $status = $row['status'];
                        $price = $row['price'];
                    echo "<button class='store-btn' onclick='toggle()'>$price<br>$status</button>";
                    }
                ?>  
            </div>

            <!-- Товар №6 -->
            <div class="catalog-item">
                <!-- Изображение -->
                <div class="catalog-item-img">
                    <?php
                        $sql = "SELECT * FROM item_image WHERE id='6'";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {
                            $id = $row['id'];
                            $image = $row['image'];
                        echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image">';
                        }
                    ?>
                </div>
                <!-- Название и описание -->
                <?php
                    $sql = "SELECT * FROM item_info WHERE id='6'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    echo "<h1>$name</h1>
                    <a>$description</a>";
                    }
                ?>
                <!-- Цена и наличие -->
                <?php
                    $sql = "SELECT * FROM item_status WHERE id='6'";
                    $result = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $status = $row['status'];
                        $price = $row['price'];
                    echo "<button class='store-btn-deny' onclick='toggle()'>$price<br>$status</button>";
                    }
                ?>  
            </div>
        </div>
    </section>


    <div id="popup">
    
        <?php
            $sql = "SELECT * FROM info_table";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result)) {
                $adress = $row['adress'];
                $phonenumber = $row['phonenumber'];
                $email = $row['email'];
            echo "<h2>Заказ доски</h2>
            <p>Для заказа данной доски и получения дополнительной информации о товаре звоните по номеру: <br>
            <br>
            $phonenumber <br>
            Звонки принимаются с 08:00 по 22:00. <br>
            <br>
            Также можете заказать консультацию в самом низу главной страницы.
            </p>";
            }
        ?>

        <button href="#" onclick="toggle()">Продолжить смотреть ассортимент</button>
        <form action="index.php #consultation">
            <button>Заказать консультацию</button>
        </form>
    </div>


    <section class="footer">
        <a>Чаплин Александр Андреевич <br>
        ИС-4-2 <br>
        2024 <br>
        Все права защищены</a>
    </section>
    
</body>
</html>