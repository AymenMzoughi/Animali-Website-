<?php
    class Lignecommande {
        private $idcommande ;
        private  $prix ;
        private  $quantite ;
        private $tauxTVA  ;
        private $etat;
        private  $id_produit ;
        private  $idcmd ;
        private  $id_client ;


        public function __construct($prix,$quantite,$tauxTVA, $etat,$id_produit,$idcmd,$id_client){
            $this->prix=$prix;
            $this->quantite=$quantite;
            $this->tauxTVA=$tauxTVA;
            $this->etat = $etat;
            $this->id_produit=$id_produit;
            $this->idcmd=$idcmd;
            
            $this->id_client=$id_client;
  
        }

       

        public function getidcommande (){
            return $this->idcommande ;
        }

        
        public function getid_client (){
            return $this->id_client ;
        }

        public function getidcmd (){
            return $this->idcmd ;
        }

        public function getprix (){
            return $this->prix ;
        }


        public function getquantite(){
            return $this->quantite ;
        }

        public function gettauxTVA(){
            return $this->tauxTVA ;
        }

        public function getetat(){
            return $this->etat ;
        }

        public function getid_produit(){
            return $this->id_produit ;
        }

        public function setidcommande ($idcommande){
            $this->idcommande = $idcommande;
        }

        public function setprix ($prix){
            $this->prix = $prix;
        }

        public function setquantite ($quantite){
            $this->quantite = $quantite;
        }

        public function settauxTVA ($tauxTVA){
            $this->tauxTVA = $tauxTVA;
        }

        public function setetat ($etat){
            $this->etat = $etat;
        }

        public function setid_produit ($id_produit){
            $this->id_produit = $id_produit;
        }
    }