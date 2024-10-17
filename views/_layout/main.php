

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Simple App' ?></title>
    <link rel="stylesheet" href="/css/main.css?v=<?php if ($_ENV['DEV_MODE'] == "true") { echo time(); } ?>">
</head>
<body>
    <div class="brand">BookiBook</div>

    <nav>
        <a href="/">Books</a>
        <a href="/categories">Categories</a>
    </nav>
    <div>
        <form action="">

        <input type="text" name="search" placeholder="Zoeken" value="<?= $search ?>">
        <input type="submit" value="zoeken">
        </form>
    </div>

    <main>
        <?= $content ?? 'Geen inhoud beschikbaar.'; ?>
    </main>
    
    <footer>
        &copy; <?= date('Y'); ?> - BookiBook
    </footer>
</body>
</html>
