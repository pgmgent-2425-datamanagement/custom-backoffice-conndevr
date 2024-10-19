<?php ?>
<div class="card max-w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div class="p-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800"><?= $item->name ?></h3> <!-- Titel -->
    </div>
    <div class="p-4 border-b border-gray-200 flex items-center justify-between">
       
        <div class="flex items-center">
            <a href="/category/edit/<?= $item->id ?>" class="text-blue-500 hover:underline">Edit</a>
            <form action="/category/delete/<?= $item->id ?>" method="POST" style="display:inline;">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="text-red-500 hover:text-red-700 ml-4" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
            </form>
        </div>
    </div>
</div>