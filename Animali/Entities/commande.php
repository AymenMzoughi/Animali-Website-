<?php
    class Commande {
        private $idcommande ;
        private $date_commande;
        private $produits;
        private $prix ;
        private $id_client ;

        public function __construct($date_commande, $produits,$prix,$id_client){

            $this->date_commande = $date_commande;
            $this->produits = $produits;
            $this->prix=$prix;
            $this->id_client=$id_client;
  
        }

       

        public function getidcommande (){
            return $this->idcommande ;
        }

        public function getdate_commande (){
            return $this->date_commande ;
        }


        public function getproduits(){
            return $this->produits ;
        }

        public function getprix(){
            return $this->prix ;
        }

        public function getid_client(){
            return $this->id_client ;
        }

        public function setidcommande ($idcommande){
            $this->idcommande = $idcommande;
        }

        public function setdate_commande ($date_commande){
            $this->date_commande = $date_commande;
        }

        public function setproduits ($produits){
            $this->produits = $produits;
        }

        public function setid_client ($id_client){
            $this->id_client = $id_client;
        }
    }