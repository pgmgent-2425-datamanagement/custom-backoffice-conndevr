<div class="container mx-auto p-4">
    <form action="" class="flex items-center mb-4">
        <input type="text" name="search" placeholder="Zoeken" value="<?= htmlspecialchars($search) ?>" class="border border-gray-300 rounded-l-md p-2 focus:ring focus:ring-blue-300 focus:border-blue-500 w-full max-w-xs">
        <input type="submit" value="Zoeken" class="bg-blue-500 text-white rounded-r-md p-2 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
    </form>
    
    <a href="/categories/add" class="text-blue-500 hover:underline">Voeg een categorie toe</a>
</div>

<ul>
    <?php
    foreach( $categories as $item ){
        include __DIR__ . '/category.php';
    }
    ?>
</ul>

