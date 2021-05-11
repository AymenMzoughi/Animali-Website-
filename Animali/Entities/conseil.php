<?php
    class conseil {
        private  $idc ;
        private  $idv;
        private  $description;
       

        public function __construct($idc ,$idv, $description){
            $this->idc = $idc;
            $this->idv = $idv;
            $this->description = $description;
            
        }

        public function getidc () {
            return $this->idc;
        }

        public function getidv (){
            return $this->idv ;
        }

        public function getdescription (){
            return $this->description ;
        }

        

        public function setidc ($idc){
            $this->nom = $nom;
        }

        public function setidv ($idv){
            $this->idv = $idv;
        }

        public function setdescription ($description){
            $this->description = $description;
        }
    }
    ?>