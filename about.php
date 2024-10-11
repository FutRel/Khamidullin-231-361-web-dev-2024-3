<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'О нас - Хамидуллин Михаил Константинович - Лабораторная работа №3'; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
$menu_items = [
    ['url' => 'index.php', 'title' => 'Главная'],
    ['url' => 'about.php', 'title' => 'О нас'],
    ['url' => 'contact.php', 'title' => 'Контакты']
];
?>
<body>
    <header>
        <nav>
            <ul>
                <?php
                foreach ($menu_items as $item) {
                    $active_class = ($item['url'] == basename($_SERVER['PHP_SELF'])) ? 'active' : '';
                    echo '<li><a href="'.$item['url'].'" class="'.$active_class.'">'.$item['title'].'</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>О нас</h1>
        <h2>Кто мы?</h2>
        <p>На этой странице рассказывается о проекте, его целях и разработчиках. Мы делаем лабораторную работу по созданию статического и динамического сайта.</p>
        
        <h2>Наша команда</h2>
        <ul>
            <?php
            $team_members = ['Иван Иванов', 'Петр Петров', 'Сергей Сидоров'];
            foreach ($team_members as $member) {
                echo '<li>'.$member.'</li>';
            }
            ?>
        </ul>
    </main>
    
    <footer>
        <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
    </footer>
</body>
</html>
