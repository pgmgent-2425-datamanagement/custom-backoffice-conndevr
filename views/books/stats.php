<div class="max-w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden mb-6 flex">
    <div class="flex-1 p-4 border-r border-gray-200">
        <h2 class="text-xl font-bold text-gray-800">Aantal boeken</h2>
        <p class="text-lg text-gray-600">Het aantal boeken is: <span class="font-semibold"><?= count($books) ?></span></p>
    </div>
    <div class="flex-1 p-4">
        <h2 class="text-xl font-bold text-gray-800">Aantal Categorieën</h2>
        <p class="text-lg text-gray-600">Het aantal categorieën is: <span class="font-semibold"><?= count($categories) ?></span></p>
    </div>
</div>


<h2 class="text-xl font-bold text-gray-800 mb-4">Categorieën en Aantal Boeken</h2>
<ul class="max-w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
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
    <li class="p-4 border-b border-gray-200 flex justify-between items-center">
        <span class="text-gray-800"><?= $categoryName ?></span>
        <span class="text-gray-600">Aantal boeken: <?= $bookCount ?></span>
    </li>
<?php endforeach; ?>
</ul>
