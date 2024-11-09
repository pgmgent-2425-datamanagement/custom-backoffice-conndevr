<form method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-center mb-6">Book Information</h1>

    <div class="mb-4">
        <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
        <input type="text" name="title" placeholder="Enter book title" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
        <textarea name="description" rows="6" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required placeholder="Enter book description"></textarea>
    </div>

    <select name="category_id" id="" >
    <?php
    foreach ($categories as $item) {
        include __DIR__ . '/addCategoryOption.php';
    }
    ?>
    </select>

    <div class="mb-4">
        <label for="image_path" class="block text-sm font-semibold text-gray-700">Upload Book Image</label>
        <input type="file" name="image_path" accept="image/*" class="mt-1 block w-full text-sm text-gray-600 border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300">
    </div>

    <div class="mb-4">
        <label for="author" class="block text-sm font-semibold text-gray-700">Author</label>
        <input type="text" name="author" placeholder="Enter author's name" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="publication_date" class="block text-sm font-semibold text-gray-700">Publication Date</label>
        <input type="date" name="publication_date" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="price" class="block text-sm font-semibold text-gray-700">Price</label>
        <input type="text" name="price" placeholder="Enter book price" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Opslaan</button>
</form>