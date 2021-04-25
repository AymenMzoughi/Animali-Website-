<?php

    require_once '../config.php';
    class veterinaireC {
         function afficherVeterinaire() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM veterinaire'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        function recuperervet($id)
        {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare 
                (
                    ' SELECT * FROM veterinaire where id = $id '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }	
        }


        public function getvetoById($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM veterinaire WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       

        public function addVeterinaire($veterinaire) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO veterinaire (id , nom, prenom,adresse) 
                VALUES ( :id, :nom, :prenom, :adresse)'
                );
                $query->execute([
                    'id' => $veterinaire->getid(),
                    'nom' => $veterinaire->getnom(),
                    'prenom' => $veterinaire->getprenom(),
                    'adresse' => $veterinaire->getadresse()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       


        public function updateveterinaire($veterinaire, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE veterinaire SET  nom = :nom, prenom = :prenom, adresse = :adresse WHERE id = :id'
                );
                $query->execute([
                    'id' => $veterinaire->getid(),
                    'nom' => $veterinaire->getnom(),
                    'prenom' => $veterinaire->getprenom(),
                    'adresse' => $veterinaire->getadresse()
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteveterinaire($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM veterinaire WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    
        
    }