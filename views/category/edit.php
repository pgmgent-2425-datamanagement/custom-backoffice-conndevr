<h1 class="text-2xl font-bold text-center mb-6">Edit Categorie</h1>
<form action="/category/update/<?= $category->id ?>" method="post" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <div class="mb-4">
        <label for="name" class="block text-sm font-semibold text-gray-700">Naam</label>
        <input type="text" name="name" id="title" value="<?= $category->name ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-300" required>
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Update Boek</button>
</form>
