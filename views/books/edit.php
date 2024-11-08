<h1 class="text-2xl font-bold text-center mb-6">Edit Book</h1>
<form action="/update/<?= $book->id ?>" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <div class="mb-4">
        <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
        <input type="text" name="title" id="title" value="<?= $book->title ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
        <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required><?= $book->description ?></textarea>
    </div>

   

    <select name="category_id" id="" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300">
    <?php
        foreach( $categories as $item ){
                  include __DIR__ . '/categoryOption.php';

        }
    ?>
    </select>

    <div class="mb-4">
        <label for="image_path" class="block text-sm font-semibold text-gray-700">Upload Book Image</label>
        <input type="file" name="image_path" accept="image/*" value="<?= $book->image_path ?>" class="mt-1 block w-full text-sm text-gray-600 border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300">
    </div>

    <div class="mb-4">
        <label for="author" class="block text-sm font-semibold text-gray-700">Author</label>
        <input type="text" name="author" id="author" value="<?= $book->author ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="publication_date" class="block text-sm font-semibold text-gray-700">Publication Date</label>
        <input type="date" name="publication_date" id="publication_date" value="<?= $book->publication_date ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <div class="mb-4">
        <label for="price" class="block text-sm font-semibold text-gray-700">Price</label>
        <input type="text" name="price" id="price" value="<?= $book->price ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Update Book</button>
</form>
