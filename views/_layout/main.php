<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Simple App' ?></title>
    <link rel="stylesheet" href="/css/main.css?v=<?php if ($_ENV['DEV_MODE'] == "true") { echo time(); } ?>">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow mb-4">
        <div class="container mx-auto p-4">
            <div class="brand text-3xl font-bold text-center">BookiBook</div>
            <nav class="mt-4">
                <ul class="flex justify-center space-x-4">
                    <li><a href="/" class="text-blue-500 hover:underline">Books</a></li>
                    <li><a href="/categories" class="text-blue-500 hover:underline">Categories</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4 bg-white rounded-lg shadow">
        <?= $content ?? 'Geen inhoud beschikbaar.'; ?>
    </main>
    
    <footer class="bg-white shadow mt-4">
        <div class="container mx-auto p-4 text-center">
            &copy; <?= date('Y'); ?> - BookiBook
        </div>
    </footer>

</body>
</html>
