<?php

    require_once '../config.php';
    class conseilC {
         function afficherconseil() {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM conseils'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        function recupererconseil($idc)
        {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare 
                (
                    ' SELECT * FROM conseils where idc = $idc '
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }	
        }


        public function getconseilById($idc) {
            try {
                $pdo =config:: getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM conseils WHERE idc = :idc'
                );
                $query->execute([
                    'idc' => $idc
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       

        public function addconseil($conseil) {
            try {
                $pdo =config:: getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO conseils (idc , idv, description) 
                VALUES ( :idc, :idv, :description)'
                );
                $query->execute([
                    'idc' => $conseil->getidc(),
                    'idv' => $conseil->getidv(),
                    'description' => $conseil->getdescription()
                
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       


        public function updateconseil($conseil, $idc) {
            
            $sql="UPDATE  conseils SET idv=:idv, description=:description WHERE idc=:idc";
            $db = config::getConnexion();
    try{
    
            $req=$db->prepare($sql);
            $idv=$conseil->getidv ();
            $idc=$conseil->getidc();
            $description=$conseil->getdescription();
           
           
            $req->bindValue(':idc',$idc);
            $req->bindValue(':idv',$idv);
            $req->bindValue(':description',$description);
           
            
           
            
            
                $s=$req->execute();}
            
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
            }
        }

        public function deleteconseil($idc) {
            try {
                $pdo = config:: getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM conseils WHERE idc = :idc'
                );
                $query->execute([
                    'idc' => $idc
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    
        
    }