<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Мои друзья</title>
</head>

<body>
    <table>
        <tr>
            <th>Имя</th>
            <th>Год рождения</th>
        </tr>
        <?php foreach ($aFrend as $oFrend): ?>
        <tr>
            <td>
                <a href="index.php?key=<?php echo $oFrend->getKey() ?>">
                    <?php echo $oFrend->getName() ?>
                </a>
            </td>
            <td><?php echo $oFrend->getYearOfBirth() ?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>

</html>