<?php
// DAO.php

class DAO {
    private $conn;

    
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=The_district", "admin", "Afpa1234");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    
    public function getCategories() {
        $sql = "SELECT cat.id, cat.libelle AS categorie, cat.image AS categorie_image, SUM(c.quantite) AS quantite_vendue
                FROM categorie cat
                INNER JOIN plat p ON cat.id = p.id_categorie
                INNER JOIN commande c ON p.id = c.id_plat
                GROUP BY cat.id, cat.libelle, cat.image
                ORDER BY quantite_vendue DESC
                LIMIT 6";
    
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
    
   
    public function getTopSellers() {
        $sql = "SELECT p.libelle AS plat, p.image, SUM(c.quantite) AS quantite_vendue
        FROM plat p
        INNER JOIN commande c ON p.id = c.id_plat
        GROUP BY p.libelle
        ORDER BY quantite_vendue DESC 
        LIMIT 6";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    
        $topSellers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $topSellers;
    }


    
    public function closeConnection() {
        $this->conn = null; 
    }
}
