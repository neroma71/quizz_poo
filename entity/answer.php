<?php

class Answer
{
    private string $answer;
    private bool $isCorrect;

    public function __construct(array $answersData)
    {
        $this->answer = $answersData['answers'];
        $this->isCorrect = $answersData['isCorrect'];
    }

    /**
     * Set the value of isCorrect
     *
     * @return  self
     */ 
    public function setIsCorrect(bool $isCorrect)
    {
        $this->isCorrect = $isCorrect;

        return $this;
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
     * Get the value of answer
     */ 
    public function getAnswer()
    {
        return $this->answer;
    }

    public function hydrate(array $datas)
    {
      if(isset($datas["answer"])) {
        $this->setAnswer($datas["answer"]);
      }

      if(isset($datas["isCorrect"])) {
        $this->setIsCorrect($datas["isCorrect"]);
      }
    }
}