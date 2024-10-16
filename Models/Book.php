<?php
namespace App\Models;
use App\Models\BaseModel;

class Book extends BaseModel {

 protected function search($search) {
    $sql = 'SELECT * FROM `' . $this->table . '`
    WHERE title LIKE :search OR description LIKE :search
    ';
    $pdo_statement = $this->db->prepare($sql);
    $pdo_statement->execute([
        ':search' => '%' .$search . '%'
    ]);

    $db_items = $pdo_statement->fetchAll(); 
    
    return self::castToModel($db_items);
 }
    public int $id;
    public string $title;
    public string $description;

public function save() {
$sql = "INSERT INTO `books` (`title`, `description`) VALUES (:name, :description)";

$pdo_statement = this->db->prepare($sql);
$succes = $pdo_statement->execute( [
    ':title' => $this->title,
    ':description' => $this->description,
]);
return $succes;
}

}

