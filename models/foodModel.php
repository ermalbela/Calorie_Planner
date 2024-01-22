<?php
  require_once('../db/pdo.php');

  class Food extends dbConnect {
    private $id;
    private $title;
    private $serving;
    private $protein;
    private $calorie;
    private $fat;
    private $carbs;
    private $image;

    protected $dbconn;

    public function __construct($id = '', $title = '', $serving = '', $protein = '', $calorie = '', $fat = '', $carbs = '', $image = ''){
      $this->id = $id;
      $this->title = $title;
      $this->serving = $serving;
      $this->protein = $protein;
      $this->calorie = $calorie;
      $this->fat = $fat;
      $this->carbs = $carbs;
      $this->image = $image;

      $this->dbconn = $this->connectDB();
    }

    public function setId($id){
      $this->id=$id;
    }
    public function getId(){
      return $this->id;
    }
    public function setTitle($title){
      $this->title=$title;
    }
    public function getTitle(){
      return $this->title;
    }
    public function setServing($serving){
      $this->serving=$serving;
    }
    public function getServing(){
      $this->serving;
    }
    public function setProtein($protein){
      $this->protein=$protein;
    }
    public function getProtein(){
      return $this->protein;
    }
    public function setCalories($calorie){
      $this->calorie = $calorie;
    }
    public function getCalories(){
      return $this->calorie;
    }
    public function setFat($fat){
      $this->fat = $fat;
    }
    public function getFat(){
      return $this->fat;
    }
    public function setCarbs($carbs){
      $this->carbs = $carbs;
    }
    public function getCarbs(){
      return $this->carbs;
    }
    public function setImage($image){
      $this->image = $image;
    }
    public function getImage(){
      return $this->image;
    }
   
    
    public function addGainWeight(){
      $sql="INSERT INTO gainweight (title,serving,protein,calorie,fat,carbs,image)
      VALUES (?,?,?,?,?,?,?)";
      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->title,$this->serving,$this->protein,$this->calorie,$this->fat,$this->carbs,$this->image]);
      echo "
        <h3>Sukses</h3>";
    }

    public function getGainWeight(){
      $sql='SELECT * FROM gainweight';
      $stm=$this->dbconn->prepare($sql);
      $stm->execute();
      $result =$stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
  }
?>