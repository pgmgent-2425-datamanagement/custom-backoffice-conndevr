<h2>Categorieën en Aantal Boeken</h2>
<ul>
<?php

$bookCounts = [];
foreach ($books as $book) {
    $categoryId = $book->category_id; 
    if (!isset($bookCounts[$categoryId])) {
        $bookCounts[$categoryId] = 0;
    }
    $bookCounts[$categoryId]++;
}

foreach ($categories as $category) :
    $categoryId = $category->id;
    $categoryName = htmlspecialchars($category->category_name ?? 'Onbekende categorie');
    $bookCount = $bookCounts[$categoryId] ?? 0; 
?>
    <li>
        <?= $categoryName ?> - Aantal boeken: <?= $bookCount ?>
    </li>
<?php endforeach; ?>
</ul>
