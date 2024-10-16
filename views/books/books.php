

<a href="/add">Add a book</a>

<ul>
    <?php
    foreach( $books as $item ){
        //echo "<li>$item</li>" . PHP_EOL;
        include __DIR__ . '/book.php';
    }
    ?>
</ul>

