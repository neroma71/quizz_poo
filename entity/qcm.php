<?php
    class Qcm
    {
        private int $id;
        private string $question;
       

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of question
         */ 
        public function getQuestion()
        {
                return $this->question;
        }

        /**
         * Set the value of question
         *
         * @return  self
         */ 
        public function setQuestion($question)
        {
                $this->question = $question;

                return $this;
        }
    }