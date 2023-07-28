<?php

class Qcm
{
    private int $idQcm;
    private string $theme;
    
    private array $questions = [];

    private QuestionRepository $questionRepo;


    public function __construct(array $qcmData, PDO $db)
    {
        $this->hydrate($qcmData);

        $this->setQuestionRepo($db);
        $this->setQuestions($this->questionRepo->selectQuestion($this->getIdQcm(), $db));
       
    }

    /**
     * Get the value of idQcm
     */ 
    public function getIdQcm()
    {
        return $this->idQcm;
    }

    /**
     * Set the value of idQcm
     *
     * @return  self
     */ 
    public function setIdQcm($idQcm)
    {
        $this->idQcm = $idQcm;

        return $this;
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
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }
    /**
     * Add a question to the quiz
     */ 
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }
      /**
     * Get the value of questionRepo
     */ 
    public function getQuestionRepo()
    {
        return $this->questionRepo;
    }

    /**
     * Set the value of questionRepo
     *
     * @return  self
     */ 
    public function setQuestionRepo(PDO $db)
    {
        $this->questionRepo = new QuestionRepository($db);

        return $this;
    }
    /**
     * Generate the view of the quiz
     */
    public function generate()
    {
        foreach($this->getQuestions() as $question){
            echo "<h4>".$question->getQuestion().'</h4>';

            foreach($question->getAnswers() as $answer){
                echo"<p>".$answer->getAnswer() . '</p>';
            }

            echo '<br><br>';
        }
    }
  
    public function hydrate(array $datas)
    {
      if(isset($datas["idQcm"])) {
        $this->setIdQcm($datas["idQcm"]);
      }
      if(isset($datas["theme"])) {
        $this->setTheme($datas["theme"]);
      }

    }
}