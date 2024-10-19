<div class="card max-w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div class="p-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800"><?= $item->title ?></h3> <!-- Titel -->
    </div>
    <div class="p-4 border-b border-gray-200 flex items-center justify-between">
        <div class="flex flex-col">
            <p class="text-sm text-gray-600">Beschrijving: <?= $item->description ?></p> <!-- Beschrijving -->
            <p class="text-sm text-gray-600">Auteur: <?= $item->author ?></p> <!-- Auteur -->
            <p class="text-sm text-gray-600">Publicatiedatum: <?= $item->publication_date ?></p> <!-- Publicatiedatum -->
            <p class="text-sm text-gray-600">Prijs: €<?= $item->price ?></p> <!-- Prijs -->
        </div>
        <div class="flex items-center">
            <a href="/edit/<?= $item->id ?>" class="text-blue-500 hover:underline">Edit</a>
            <form action="/delete/<?= $item->id ?>" method="POST" style="display:inline;">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="text-red-500 hover:text-red-700 ml-4" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
            </form>
        </div>
    </div>
</div>
