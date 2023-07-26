<?php
    class Question
    {
        private string $questions;
        private array $answer = [];
        private string $explanation;

        public function __construct(string $questions)
        {
            $this->questions = $questions;
        }

        /**
         * Get the value of questions
         */ 
        public function getQuestions()
        {
                return $this->questions;
        }

        /**
         * Set the value of questions
         *
         * @return  self
         */ 
        public function setQuestions($questions)
        {
                $this->questions = $questions;

                return $this;
        }

        /**
         * Get the value of answer
         */ 
        public function getAnswer()
        {
                return $this->answer;
        }

        /**
         * Set the value of answer
         *
         * @return  self
         */ 
        public function setAnswer($answer)
        {
                $this->answer = $answer;

                return $this;
        }

        /**
         * Get the value of explanation
         */ 
        public function getExplanation()
        {
                return $this->explanation;
        }

        /**
         * Set the value of explanation
         *
         * @return  self
         */ 
        public function setExplanation($explanation)
        {
                $this->explanation = $explanation;

                return $this;
        }

        public function addAnswer(answer $answer)
        {
            $this->answer[] = $answer;
        }

    }