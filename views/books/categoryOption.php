<option value="<?=$item->id?>" <?php
if($book->category_id == $item->id) {
   echo "selected";
} 
?>><?= $item->name ?></option>