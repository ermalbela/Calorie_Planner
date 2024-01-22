<?php
  require_once('./db/pdo.php');

  class User extends dbConnect {
    private $id;
    private $username;
    private $password;
    private $email;
    private $role;
    protected $dbconn;

    public function __construct($id = '', $username = '', $password = '', $email = '', $role = ''){
      $this->id = $id;
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
      $this->role = $role;

      $this->dbconn = $this->connectDB();
    }

    public function setId($id){
      $this->id=$id;
    }
    public function getId(){
      return $this->id;
    }
    public function setUsername($username){
      $this->username=$username;
    }
    public function getUsername(){
      return $this->username;
    }
    public function setPassword($password){
      $this->password=$password;
    }
    public function getPassword(){
      $this->password;
    }
    public function setEmail($email){
      $this->email=$email;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setRole($role){
      $this->role=$role;
    }
    public function getRole(){
      return $this->role;
    }
   
    
    public function insertToDB(){
      $sql="INSERT INTO Users (username,password,email,role)
      VALUES (?,?,?,?)";
      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->username,$this->password,$this->email,$this->role]);
      echo "
        <h3>Sukses</h3>";
    }

    public function getUsers(){
      $sql='SELECT * FROM Users';
      $stm=$this->dbconn->prepare($sql);
      $stm->execute();
      $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
      return $rezultati;
    }
  }
?>