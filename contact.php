<!DOCTYPE html>
<html lang="ru">

<?php
$title_name = 'Хамидуллин Михаил Константинович - Группа 231-361 - Лабораторная работа №3';
$contacts = ['Email: info@example.com', 'Телефон: +7 (123) 456-78-90'];
$menu_items = [
    ['url' => 'index.php', 'title' => 'Главная'],
    ['url' => 'about.php', 'title' => 'О нас'],
    ['url' => 'contact.php', 'title' => 'Контакты']
];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_name ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                foreach ($menu_items as $item) {
                    $active_class = ($item['url'] == basename($_SERVER['PHP_SELF'])) ? 'active' : '';
                    echo '<li><a href="' . $item['url'] . '" class="' . $active_class . '">' . $item['title'] . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Контакты</h1>
        <h2>Свяжитесь с нами</h2>
        <p>Для получения дополнительной информации вы можете связаться с нами через электронную почту или по телефону.
        </p>

        <h2>Наши контакты</h2>
        <ul>
            <?php
            $contacts = ['Email: info@example.com', 'Телефон: +7 (123) 456-78-90'];
            foreach ($contacts as $contact) {
                echo '<li>' . $contact . '</li>';
            }
            ?>
        </ul>
    </main>

    <footer>
        <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
    </footer>
</body>

</html>