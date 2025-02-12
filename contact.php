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

function get_active_class($url) {
    return ($url == basename($_SERVER['PHP_SELF'])) ? 'active' : '';
}

function generate_menu_item($url, $title) {
    $active_class = get_active_class($url);
    return '<li><a href="' . $url . '" class="' . $active_class . '">' . $title . '</a></li>';
}
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
                    echo generate_menu_item($item['url'], $item['title']);
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
            foreach ($contacts as $contact) {
                echo '<li>' . $contact . '</li>';
            }
            ?>
        </ul>
    </main>

    <footer>
        <p>Сформировано <?php
        date_default_timezone_set('Europe/Moscow');
        echo date('d.m.Y в H:i:s'); ?></p>
    </footer>
</body>

</html>