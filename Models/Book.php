<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Book extends BaseModel
{

    protected function search($search)
    {
        $sql = 'SELECT * FROM `' . $this->table . '`
    WHERE title LIKE :search OR description LIKE :search
    ';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':search' => '%' . $search . '%'
        ]);

        $db_items = $pdo_statement->fetchAll();

        return self::castToModel($db_items);
    }
    public int $id;
    public string $title;
    public string $description;
    public string $author;
    public string $publication_date;
    public string $price;

    public function save()
    {
        $sql = "INSERT INTO `books` (`title`, `description`, `author`, `publication_date`, `price`) VALUES (:title, :description, :author, :publication_date, :price)";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':author' => $this->author,
            ':publication_date' => $this->publication_date,
            ':price' => $this->price
        ]);
        return $succes;
    }

    public function edit()
    {
        $sql = "UPDATE `books` SET `title` = :title, `description` = :description, `author` = :author, `publication_date` = :publication_date, `price` = :price WHERE `id` = :id";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':author' => $this->author,
            ':publication_date' => $this->publication_date,
            ':price' => $this->price,
            ':id' => $this->id
        ]);

        return $succes;
    }

    public static function find($id)
    {
        global $db;
        $sql = "SELECT * FROM `books` WHERE `id` = :id";
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute([':id' => $id]);

        $db_item = $pdo_statement->fetchObject(Book::class);

        if ($db_item) {
            return $db_item;
        }
        return null;
    }

    public function delete()
    {
        $sql = "DELETE FROM `books` WHERE `id` = :id";

        $pdo_statement = $this->db->prepare($sql);
        $success = $pdo_statement->execute([':id' => $this->id]);

        return $success;
    }
}
