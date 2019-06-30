<?php

include_once("Database.php");
include_once(ROOT."Models/Domaine/Category.php");

/**
 *
 */
class CategoryService extends Database
{

  public function createCategory(Category $category)
  {
    $query = $this->_pdo->prepare('INSERT INTO category (nom) VALUES (:nom)');
    return $query->execute(array(
      'nom' => $category->getNom()
    ));
  }

  public function getAllCategory()
  {
    $query = $this->_pdo->query('SELECT * FROM category');
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getCategoryById($id){
    $query = $this->_pdo->prepare('SELECT * FROM category WHERE id =:id');
    $query->execute(array(
      'id' => $id
    ));
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

}
