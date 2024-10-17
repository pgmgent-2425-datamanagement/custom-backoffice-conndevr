
<div class="card">
    <h3><?= $item->title ?></h3>
    <a href="/edit/<?= $item->id ?>">Edit</a>
    <form action="/delete/<?= $item->id ?>" method="POST" style="display:inline;">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
    </form></div>
