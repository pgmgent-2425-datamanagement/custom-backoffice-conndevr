<?php

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class Book extends BaseModel
{
    public int $id;
    public int $category_id;
    public string $title;
    public string $description;
    public string $author;
    public string $publication_date;
    public string $price;
    public string $image_path;

    protected function search($search)
    {
        $sql = 'SELECT books.*, categories.name AS category FROM db.books
        INNER JOIN categories ON books.category_id = categories.id
        
            WHERE title LIKE :search OR description LIKE :search
        ';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':search' => '%' . $search . '%'
        ]);

        $db_items = $pdo_statement->fetchAll();

        return self::castToModel($db_items);
    }

    public function save()
    {
        $sql = "INSERT INTO `books` (`title`, `description`, `author`, `publication_date`, `price`, `image_path`, `category_id`) 
                VALUES (:title, :description, :author, :publication_date, :price, :image_path, :category_id)";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':category_id' => $this->category_id,
            ':author' => $this->author,
            ':publication_date' => $this->publication_date,
            ':price' => $this->price,
            ':image_path' => $this->image_path, // Voeg image_path toe aan de waarden
        ]);
        return $succes;
    }

    public function edit()
    {
        $sql = "UPDATE `books` SET 
                    `title` = :title, 
                    `description` = :description, 
                    `category_id` = :category_id, 
                    `author` = :author, 
                    `publication_date` = :publication_date, 
                    `price` = :price, 
                    `image_path` = :image_path 
                WHERE `id` = :id";

        $pdo_statement = $this->db->prepare($sql);
        $succes = $pdo_statement->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':category_id' => $this->category_id,
            ':author' => $this->author,
            ':publication_date' => $this->publication_date,
            ':price' => $this->price,
            ':image_path' => $this->image_path,
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

    public function getBooksPerCategory()
    {
        // Haal categorieën en het aantal boeken per categorie op
        $sql = 'SELECT categories.id, categories.name AS category_name, COUNT(books.id) AS book_count 
                FROM categories 
                LEFT JOIN books ON categories.id = books.category_id 
                GROUP BY categories.id'; // Groeperen op categorie ID
    
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    
        // Haal de resultaten op als objecten
        $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
    
        return $categories;
    }
    
    
    
}
