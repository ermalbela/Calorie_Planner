<?php
  require_once('../db/pdo.php');

  class Mix extends dbConnect {
    private $id;
    private $title;
    private $ingredients;
    private $description;
    private $stars;
    private $dateAdded;
    private $image;

    protected $dbconn;

    public function __construct($id = '', $title = '', $ingredients = '', $description = '', $stars = '', $dateAdded = '', $image = ''){
      $this->id = $id;
      $this->title = $title;
      $this->ingredients = $ingredients;
      $this->description = $description;
      $this->stars = $stars;
      $this->dateAdded = $dateAdded;
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
    public function setIngredients($ingredients){
      $this->ingredients=$ingredients;
    }
    public function getIngredients(){
      $this->ingredients;
    }
    public function setDescription($description){
      $this->description=$description;
    }
    public function getDescription(){
      return $this->description;
    }
    public function setStars($stars){
      $this->stars = $stars;
    }
    public function getStars(){
      return $this->stars;
    }
    public function setDateAdded($dateAdded){
      $this->dateAdded = $dateAdded;
    }
    public function getDateAdded(){
      return $this->dateAdded;
    }
    public function setImage($image){
      $this->image = $image;
    }
    public function getImage(){
      return $this->image;
    }
   
    
    public function addMix(){
      $sql="INSERT INTO mixes (Title,Ingredients,Description,Stars,Image,DateAdded)
      VALUES (?,?,?,?,?,?)";
      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->title,$this->ingredients,$this->description,$this->stars,$this->image,$this->dateAdded]);
    }

    public function getMixes(){
      $sql='SELECT * FROM mixes';
      $stm=$this->dbconn->prepare($sql);
      $stm->execute();
      $result =$stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
  }
?>