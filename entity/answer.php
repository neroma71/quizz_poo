<?php

    class Answer
    {
        private string $answer;
        private bool $goodAnswer;

        public function __construct(string $answer, bool $goodAnswer)
        {
            $this->answer = $answer;
            $this->setGoodAnswer($goodAnswer);
        }

        /**
         * Get the value of goodAnswer
         */ 
        public function getGoodAnswer()
        {
                return $this->goodAnswer;
        }

        /**
         * Set the value of goodAnswer
         *
         * @return  self
         */ 
        public function setGoodAnswer($goodAnswer)
        {
                $this->goodAnswer = $goodAnswer;

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
    }