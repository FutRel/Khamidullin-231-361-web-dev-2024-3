<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Хамидуллин Михаил Константинович - Группа 231-361 - Лабораторная работа №3'; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                $menu_items = [
                    ['url' => 'index.php', 'title' => 'Главная'],
                    ['url' => 'about.php', 'title' => 'О нас'],
                    ['url' => 'contact.php', 'title' => 'Контакты']
                ];
                foreach ($menu_items as $item) {
                    $active_class = ($item['url'] == basename($_SERVER['PHP_SELF'])) ? 'active' : '';
                    echo '<li><a href="'.$item['url'].'" class="'.$active_class.'">'.$item['title'].'</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Главная страница</h1>
        <h2>Заголовок H2 на главной странице</h2>
        <p>Это главная страница сайта. Она содержит информацию о проекте и лабораторной работе.</p>
        
        <h2>Динамический список</h2>
        <ul>
            <?php
            $list_items = ['Элемент 1', 'Элемент 2', 'Элемент 3'];
            foreach ($list_items as $item) {
                echo '<li>'.$item.'</li>';
            }
            ?>
        </ul>
        
        <h2>Фотографии</h2>
        <?php
        $time = time();
        if ($time % 2 == 0) {
            echo '<img src="even_image.jpg" alt="Четная картинка" width="200">';
        } else {
            echo '<img src="odd_image.jpg" alt="Нечетная картинка" width="200">';
        }
        ?>
    </main>
    
    <footer>
        <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
    </footer>
</body>
</html>
