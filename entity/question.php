<?php

class Question
{
    private int $idQuestion;
    private string $question; 
    private string $explanation;

    private array $answers = [];

    private AnswerRepository $answerRepo;

    public function __construct(array $datas, PDO $db)
    {
        $this->hydrate($datas);

        $this->setAnswerRepo($db);
        $this->setAnswers($this->answerRepo->selectAnswers($this->getIdQuestion()));
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
    public function setExplanation(string $explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }

     /**
     * Get the value of answerRepo
     */ 
    public function getAnswerRepo()
    {
        return $this->answerRepo;
    }

    /**
     * Set the value of answerRepo
     *
     * @return  self
     */ 
    public function setAnswerRepo(PDO $db)
    {
        $this->answerRepo = new AnswerRepository($db);

        return $this;
    }

    /**
     * Get the value of idQuestion
     */ 
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set the value of idQuestion
     *
     * @return  self
     */ 
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
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

    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

     /**
     * Set the value of answers
     *
     * @return  self
     */ 
    public function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Get the value of answers
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Add an answer to the question
     */ 
    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }
    
    public function hydrate(array $datas)
    {
        if(isset($datas["id"])) {
            $this->setIdQuestion($datas["id"]);
          }
      if(isset($datas["question"])) {
        $this->setQuestion($datas["question"]);
      }

      if(isset($datas["explanation"])) {
        $this->setExplanation($datas["explanation"]);
      }
    }

}