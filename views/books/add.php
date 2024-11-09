<form method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-center mb-6">Boek informatie</h1>

    <div class="mb-4">
        <label for="title" class="block text-sm font-semibold text-gray-700">Titel</label>
        <input type="text" name="title" placeholder="Schrijf een titel" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-semibold text-gray-700">Beschrijving</label>
        <textarea name="description" rows="6" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required placeholder="Schrijf een Beschrijving"></textarea>
    </div>

    <select name="category_id" id="" >
    <?php
    foreach ($categories as $item) {
        include __DIR__ . '/addCategoryOption.php';
    }
    ?>
    </select>

    <div class="mb-4">
        <label for="image_path" class="block text-sm font-semibold text-gray-700">Upload Boek foto</label>
        <input type="file" name="image_path" accept="image/*" class="mt-1 block w-full text-sm text-gray-600 border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300">
    </div>

    <div class="mb-4">
        <label for="author" class="block text-sm font-semibold text-gray-700">Auteur</label>
        <input type="text" name="author" placeholder="Schrijf een Auteur's naam" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="publication_date" class="block text-sm font-semibold text-gray-700">Publicatie Datum</label>
        <input type="date" name="publication_date" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="price" class="block text-sm font-semibold text-gray-700">Prijs</label>
        <input type="text" name="price" placeholder="Schrijf de prijs van het boek" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Opslaan</button>
</form>