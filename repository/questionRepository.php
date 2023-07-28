<?php

    class QuestionRepository
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

        public function selectQuestion(int $id_qcm, PDO $db): array
        {
            $query = 'SELECT * FROM `question` INNER JOIN qcm_question ON qcm_question.id = question.id WHERE qcm_question.idQcm = :idQcm';
            $result = $this->db->prepare($query);
            $result->execute([
                ':idQcm' => $id_qcm
            ]);
            $questionsData = $result->fetchAll();
        
            $questions = [];

            foreach ($questionsData as  $questionData) {
               $questions[] = new Question($questionData, $db);
            }
    
            return $questions;
        }
    }