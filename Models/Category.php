<?php
namespace App\Models;
use App\Models\BaseModel;

class Category extends BaseModel {

    protected function search($search) {
        $sql = 'SELECT * FROM `' . $this->table . '`
        WHERE name LIKE :search
        ';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':search' => '%' .$search . '%'
        ]);
    
        $db_items = $pdo_statement->fetchAll(); 
        
        return self::castToModel($db_items);
     }
    public int $id;
    public string $name;
}