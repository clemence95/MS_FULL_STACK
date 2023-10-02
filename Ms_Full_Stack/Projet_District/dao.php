<?php
// DAO.php

class DAO {
    private $conn;

    // Constructor to establish the database connection //Construit et établit une connexion à la bdd
    public function __construct() {
        $this->conn = new mysqli("localhost", "admin", "Afpa1234", "The_district");

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    // Function to get a list of categories //Fonction pour récupérè la liste des catégories  les plus populaires limit à 6
    public function getCategories() {
        $sql = "SELECT cat.id, cat.libelle AS categorie, cat.image AS categorie_image, SUM(c.quantite) AS quantite_vendue
                FROM categorie cat
                INNER JOIN plat p ON cat.id = p.id_categorie
                INNER JOIN commande c ON p.id = c.id_plat
                GROUP BY cat.id, cat.libelle, cat.image
                ORDER BY quantite_vendue DESC
                LIMIT 6";
    
        $result = $this->conn->query($sql);
    
        if ($result->num_rows > 0) {
            $categories = array();
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
            return $categories;
        } else {
            return array(); // Return an empty array if no categories are found
        }
    }
    

    // Function to get a list of top-selling dishes //Fonction pour recupérè les plats les plus vendus de la bdd
    public function getTopSellers() {
        $sql = "SELECT p.libelle AS plat, SUM(c.quantite) AS quantite_vendue
        FROM plat p
            INNER JOIN commande c ON p.id = c.id_plat
        GROUP BY p.libelle
        ORDER BY quantite_vendue DESC 
        LIMIT 6";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $topSellers = array();
            while ($row = $result->fetch_assoc()) {
                $topSellers[] = $row;
            }
            return $topSellers;
        } else {
            return array(); // Return an empty array if no top sellers are found
        }
    }

    // Close the database connection // Ferme la coonexion à la bdd
    public function closeConnection() {
        $this->conn->close();
    }
}
?>