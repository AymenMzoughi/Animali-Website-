<?php
    require_once '../config.php';
    require_once "../Entities/Reclamation.php";
    class ReclamationC {
        public function afficherreclamation() {
            $sql="select * from reclamation ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
     

        function recupererReclamation($id){
            $sql="SELECT * from reclamation where id=$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }	

        function afficheridclient(){
          
            $sql="SELECT * from client  ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function afficherprenomclient(){
          
            $sql="SELECT * from client  ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }	

        function recupererid($id){
            $sql="SELECT * from reclamation where id=$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function recupereridclient($id){
            $sql="SELECT * from reclamation where idclient=$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function rechercheretat($etat){
            $sql="SELECT * From reclamation WHERE etat = '$etat' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
    
        public function ajouterrelcamation($reclamation) {
            $sql=" INSERT INTO  reclamation (probleme,date,etat,sujet,idclient) 
            VALUES (:probleme, :date,:etat,:sujet,:idclient)";
            $db = config::getConnexion();
    try{
    
            $req=$db->prepare($sql);
            $probleme=$reclamation->getProbleme();
            $date=$reclamation->getDate();
            $etat=$reclamation->getEtat();
            $sujet=$reclamation->getsujet();
            $idclient=$reclamation->getidclient();
            $req->bindValue(':probleme',$probleme);
            $req->bindValue(':date',$date);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':sujet',$sujet);
            $req->bindValue(':idclient',$idclient);
           
            
            
                $s=$req->execute();}
            
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
            }
                   
                
        }

        public function Modifierreclamation($reclamation,$id) {
            $sql="UPDATE  reclamation SET probleme=:probleme, date=:date, etat=:etat, sujet=:sujet , idclient=:idclient WHERE id=:id";
            $db = config::getConnexion();
    try{
    
            $req=$db->prepare($sql);
            $probleme=$reclamation->getProbleme();
            $date=$reclamation->getdate();
            $etat=$reclamation->getEtat();
            $sujet=$reclamation->getsujet();
            $idclient=$reclamation->getidclient();
            $req->bindValue(':id',$id);
            $req->bindValue(':probleme',$probleme);
            $req->bindValue(':date',$date);
            $req->bindValue(':etat',$etat);
            $req->bindValue(':sujet',$sujet);
            $req->bindValue(':idclient',$idclient);
           
            
            
                $s=$req->execute();}
            
            catch (Exception $e){
                echo " Erreur ! ".$e->getMessage();
            }
            
        }

        public function deletereclamation($id) {
            $sql="DELETE FROM reclamation  where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}

        function calculerReclamation($sujet){
            $sql="SELECT * FROM reclamation where sujet='$sujet'";
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
        
    
    function calculerid(){
        $sql="SELECT * FROM client ";
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
    
}