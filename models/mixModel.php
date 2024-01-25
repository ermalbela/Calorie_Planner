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
    private $addedBy;

    protected $dbconn;

    public function __construct($id = '', $title = '', $ingredients = '', $description = '', $stars = '', $dateAdded = '', $image = '', $addedBy = ''){
      $this->id = $id;
      $this->title = $title;
      $this->ingredients = $ingredients;
      $this->description = $description;
      $this->stars = $stars;
      $this->dateAdded = $dateAdded;
      $this->image = $image;
      $this->addedBy = $addedBy;

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
    public function setAddedBy($addedBy){
      $this->addedBy = $addedBy;
    }
   
    
    public function addMix(){
      $sql="INSERT INTO mixes (Title,Ingredients,Description,Stars,Image,DateAdded, addedBy)
      VALUES (?,?,?,?,?,?,?)";
      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->title, $this->ingredients, $this->description, $this->stars, $this->image, $this->dateAdded, $this->addedBy]);
    }

    public function getMixes(){
      $sql='SELECT * FROM mixes';
      $stm=$this->dbconn->prepare($sql);
      $stm->execute();
      $result =$stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }

    public function getByID($id){
      $sql='SELECT * FROM mixes where id=:id';
      $stm=$this->dbconn->prepare($sql);
      $stm->execute([':id'=>$this->id=$id]);
      $rezultati =$stm->fetch(PDO::FETCH_ASSOC); 
      return $rezultati;
    }

    public function editMix(){
      $sql='UPDATE mixes SET Title=?, Ingredients=?, Description=?, Stars=? where id=?';
      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->title, $this->ingredients, $this->description, $this->stars, $this->id]);
    }
    
    public function deleteMix($id){
      $sql="DELETE FROM mixes WHERE id=:id";
      $stm=$this->dbconn->prepare($sql);
      $stm->bindParam(':id',$id);
      $stm->execute();
      if ($stm==true){
        header('Location:http://localhost/UBTDocs/pages/suggestedMixes.php');
      }
      else {
        return false;
      }
    }
      
      
  }
?>