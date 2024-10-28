<h1>Filemanager</h1>

<?php foreach($file as $item ) : 
    if($item != "." && $item != "..") 
    : ?>
    <li><?=$item?></li>
    <?php endif; 
endforeach; ?>