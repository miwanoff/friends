<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $oFrend->getName() ?> : Мой друг</title>
</head>

<body>
    <?php
echo 'Имя: ' . $oFrend->getName() . '<br/>';
echo 'Год рождения: ' . $oFrend->getYearOfBirth() . '<br/>';
echo 'Email: ' . $oFrend->getEmail() . '<br/>';
?>
    <a href="index.php">Список</a>
</body>

</html>