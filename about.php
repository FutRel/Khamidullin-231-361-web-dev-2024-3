<!DOCTYPE html>
<html lang="ru">

<?php
$title_name = 'Хамидуллин Михаил Константинович - Группа 231-361 - Лабораторная работа №3';
$team_members = ['Иван Иванов', 'Петр Петров', 'Сергей Сидоров'];
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
        <h1>О нас</h1>
        <h2>Кто мы?</h2>
        <p>На этой странице рассказывается о проекте, его целях и разработчиках. Мы делаем лабораторную работу по
            созданию статического и динамического сайта.</p>

        <h2>Наша команда</h2>
        <ul>
            <?php
            foreach ($team_members as $member) {
                echo '<li>' . $member . '</li>';
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