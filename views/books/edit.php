<h1>Edit Book</h1>
<form action="/update/<?= $book->id ?>" method="post">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?= $book->title ?>">

    <label for="description">Description</label>
    <textarea name="description" id="description"><?= $book->description ?></textarea>

    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="<?= $book->author ?>">

    <label for="publication_date">Publication Date</label>
    <input type="date" name="publication_date" id="publication_date" value="<?= $book->publication_date ?>">

    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="<?= $book->price ?>">

    <button type="submit">Update Book</button>
</form>
