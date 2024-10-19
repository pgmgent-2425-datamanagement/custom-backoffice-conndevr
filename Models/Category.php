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


    public function save()
    {
        $sql = "INSERT INTO `categories` (`name`) VALUES (:name)";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':name' => $this->name,
           
        ]);
        return $succes;
    }
    public function edit()
    {
        $sql = "UPDATE `categories` SET `name` = :name WHERE `id` = :id";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':name' => $this->name,
            ':id' => $this->id
        ]);

        return $succes;
    }

    public static function find($id)
    {
        global $db;
        $sql = "SELECT * FROM `categories` WHERE `id` = :id";
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);

        $db_item = $pdo_statement->fetchObject(Category::class);

        if ($db_item) {
            return $db_item;
        }
        return null;
    }

    public function delete()
    {
        $sql = "DELETE FROM `categories` WHERE `id` = :id";

        $pdo_statement = $this->db->prepare($sql);
        $success = $pdo_statement->execute([':id' => $this->id]);

        return $success;
    }
}