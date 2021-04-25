<?php
    class veterinaire {
        private  $id ;
        private  $nom;
        private  $prenom;
        private  $adresse;

        public function __construct($id ,$nom, $prenom, $adresse){
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
        }

        public function getid () {
            return $this->id;
        }

        public function getnom (){
            return $this->nom ;
        }

        public function getprenom (){
            return $this->prenom ;
        }

        public function getadresse (){
            return $this->adresse ;
        }

        public function setnom ($nom){
            $this->nom = $nom;
        }

        public function setprenom ($prenom){
            $this->prenom = $prenom;
        }

        public function setadresse ($adresse){
            $this->adresse = $adresse;
        }
    }