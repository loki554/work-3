<?php
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
    $user_phonenumber = $_POST['user_phonenumber'];
    $user_text = $_POST['user_text'];

	// Database connection
	$conn = new mysqli('localhost','root','','surf_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into consultation_table(user_name, user_email, user_phonenumber, user_text) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $user_name, $user_email, $user_phonenumber, $user_text);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
	}
?>

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
            <h1>Заявка отправлена</h1>
            <p>Мы ответим вам как можно скорее</p>
            <form action="index.php">
                <button class="hero-btn">Вернуться на главную</button>
            </form>
        </section>