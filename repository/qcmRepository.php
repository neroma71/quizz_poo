<?php

    class QcmRepository
    {
        private PDO $db;

        public function __construct(PDO $db)
        {
            $this->setDb($db);
            
        }

        /**
         * Get the value of db
         */ 
        public function getDb()
        {
                return $this->db;
        }

        /**
         * Set the value of db
         *
         * @return  self
         */ 
        public function setDb($db)
        {
                $this->db = $db;

                return $this;
        }


        public function selectQcm($idQcm)
        {
            $query = 'SELECT * FROM qcm WHERE idQcm = :idQcm';
            $result = $this->db->prepare($query);
            $result->execute([
                ':idQcm' => $idQcm
            ]);
            $qcmData = $result->fetch();
        
           
            return new Qcm($qcmData, $this->getDb());
        }
        
    }