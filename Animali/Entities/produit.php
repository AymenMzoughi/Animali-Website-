<?php
    class produit {
        private $prix;
        private $ref;
        private $nomprod;
        private $descprod;
        private $idcat;

        public function __construct($ref, $prix, $nomprod, $descprod,$idcat){
            
            $this->ref = $ref;
            $this->prix = $prix;
            $this->nomprod = $nomprod;
            $this->descprod = $descprod;
            $this->idcat = $idcat;
        }


        public function getref (){
            return $this->ref ;
        }

        public function getprix () {
            return $this->prix;
        }

        public function getnomprod (){
            return $this->nomprod ;
        }

        public function getdescprod (){
            return $this->descprod ;
        }
        public function getidcat (){
            return $this->idcat ;
        }

        

        public function setref ($ref){
            $this->ref = $ref;
        }
        
        public function setprix ($prix){
            $this->prix = $prix;
        }

        public function setnomprod ($nomprod){
            $this->nomprod = $nomprod;
        }
        public function setdescprod ($descprod){
            $this->descprod = $descprod;
        }
        public function setidcat ($idcat){
            $this->idcat = $idcat;
        }
    }
?>