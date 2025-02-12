<!DOCTYPE html>
<html lang="ru">

<?php
$title_name = 'Хамидуллин Михаил Константинович - Группа 231-361 - Лабораторная работа №3';
$list_items = ['Элемент 1', 'Элемент 2', 'Элемент 3'];
$menu_items = [
    ['url' => 'index.php', 'title' => 'Главная'],
    ['url' => 'about.php', 'title' => 'О нас'],
    ['url' => 'contact.php', 'title' => 'Контакты']
];
function get_active_class($url)
{
    return ($url == basename($_SERVER['PHP_SELF'])) ? 'active' : '';
}

function generate_menu_item($url, $title)
{
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
        <h1>Главная страница</h1>
        <p>В одном из уютных офисов, утопающем в мониторах и мигающих лампочках, жили два котика-айтишника, Мило и Топи.
            Они не были обычными пушистиками: оба обладали выдающимися навыками в программировании и устройстве
            компьютеров.
            Мило, с его умным взглядом и шевелящимися усами, предпочитал писать код для сложных алгоритмов,
            а Топи, всегда с игрушечным мышонком в лапах, специализировался на тестировании новых приложений.
            Каждое утро они устраивали соревнования по быстрому решению задач, а потом устраивались на подоконнике,
            наблюдая за прохожими.</p>

        <p>Но однажды к ним в офис пришла загадочная ошибка в системе.
            Компьютеры зашумели, а коды запутались в лихорадочном хаосе.
            Укрывшись за большим экраном, Мило и Топи стали работать над устранением проблемы.
            Игрушечный мышонок теперь был не просто игрой, а символом их дружбы и совместных усилий.
            Совершив невероятное, они не только исправили баг, но и создали приложение, которое покорило весь IT-мир,
            став легендами среди котиков.</p>

        <h2>Динамический список</h2>
        <ul>
            <?php
            foreach ($list_items as $item) {
                echo '<li>' . $item . '</li>';
            }
            ?>
        </ul>

        <h2>Фотографии</h2>
        <?php
        $time = time();
        if ($time % 2 == 0) {
            echo '<img src="even_image.jpg" alt="Четная картинка" width="200">';
            echo '<img src="odd_image.jpg" alt="Нечетная картинка" width="200">';
        } else {
            echo '<img src="odd_image.jpg" alt="Нечетная картинка" width="200">';
            echo '<img src="even_image.jpg" alt="Четная картинка" width="200">';
        }
        ?>
    </main>

    <footer>
        <p>Сформировано <?php
        date_default_timezone_set('Europe/Moscow');
        echo date('d.m.Y в H:i:s'); ?></p>
    </footer>
</body>

</html>