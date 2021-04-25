<?php
    require_once '../config.php';
    require_once "../Entities/Avis.php";
    class AvisC {
        public function afficherAvis() {
            $sql="select *  from avis ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

       function recupereravis($id){
            $sql="SELECT * from avis where id=$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }	
    
        public function ajouteravis($avis) {
            $sql=" INSERT INTO avis (message,nom,prenom,note) 
            VALUES (:message, :nom,:prenom,:note)";
            $db = config::getConnexion();
    try{
    
            $req=$db->prepare($sql);
            $message=$avis->getmessage();
            $nom=$avis->getnom();
            $prenom=$avis->getprenom();
            $note=$avis->getnote();
            $req->bindValue(':message',$message);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':note',$note);
           
           
            
            
                $s=$req->execute();}
            
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
            }
                   
                
        }


        public function Modifieravis($avis,$id) {
            $sql="UPDATE  avis SET message=:message, nom=:nom, prenom=:prenom,  note=:note WHERE id=:id";
            $db = config::getConnexion();
    try{
    
            $req=$db->prepare($sql);
            $message=$avis->getmessage();
            $nom=$avis->getnom();
            $prenom=$avis->getprenom();
            $note=$avis->getnote();
            $req->bindValue(':id',$id);
            $req->bindValue(':message',$message);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':prenom',$prenom);
            $req->bindValue(':note',$note);
           
           
            
            
                $s=$req->execute();}
            
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
            }
            
        }

        public function deleteavis($id) {
            $sql="DELETE FROM avis   where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
        function recupererid($id){
            $sql="SELECT * from avis  where id=$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function rechercherprenom($prenom){
            $sql="SELECT * From avis WHERE prenom = '$prenom' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        function recherchernom($nom){
            $sql="SELECT * From avis WHERE nom= '$nom' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
     
        
    }