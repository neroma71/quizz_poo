<?php

    class AnswerRepository
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

        public function selectAnswers(int $id_question)
        {
            $query = 'SELECT * FROM answers WHERE id_question = :id_question';
            $result = $this->db->prepare($query);
            $result->execute([
                ':id_question' => $id_question
            ]);
            $answersData= $result->fetchAll();
        
            $answers = [];
    
            foreach ($answersData as $answerData) {
                $answers[] = new Answer($answerData);
            }
    
            return $answers;
        }
    }