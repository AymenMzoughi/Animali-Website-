<?php

    require_once '../config.php';
    class veterinaireC {
         function afficherVeterinaire() {
            try {
                $pdo = config::getConnexion();
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
                $pdo =config:: getConnexion();
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
                $pdo =config:: getConnexion();
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
        public function getvetoBynom($nom) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM veterinaire WHERE nom = :nom'
                );
                $query->execute([
                    'nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getvetoByprenom($prenom) {
            try {
                $pdo =config:: getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM veterinaire WHERE prenom = :prenom'
                );
                $query->execute([
                    'prenom' => $prenom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        
     

        public function addVeterinaire($veterinaire) {
            try {
                $pdo =config:: getConnexion();
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
          
           
                $sql="UPDATE  veterinaire SET nom=:nom, prenom=:prenom, adresse=:adresse  WHERE id=:id";
                $db =config:: getConnexion();
        try{
        
                $req=$db->prepare($sql);
                $nom=$veterinaire->getnom();
                $prenom=$veterinaire->getprenom();
                $adresse=$veterinaire->getadresse();
               
                $id=$veterinaire->getid();
                $req->bindValue(':id',$id);
                $req->bindValue(':nom',$nom);
                $req->bindValue(':prenom',$prenom);
                $req->bindValue(':adresse',$adresse);
                
               
                
                
                    $s=$req->execute();}
                
                catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
                }
    
    
    
        }
        function calculeveto(){
            $sql="SELECT * FROM veterinaire  ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            $nombre=$liste->rowCount();
            return $nombre;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        public function deleteveterinaire($id) {
            try {
                $pdo = config::getConnexion();
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