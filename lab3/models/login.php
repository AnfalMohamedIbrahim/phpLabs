<?php


class login{
    private $userName;
    private $password;
    static $userData;

    public function constructor($_userName,$_password)
    {
        $this->userName = $_userName;
        $this->password =$_password;
    }


    public function checkUser(){
        if($_POST["userName"] == correctUserName && $_POST["password"] == correctPassword){
            login::$userData  = ["dateOfLog" => date("j, n, Y"), "userName" => $this->userName ,"typeOfUser" => "admin"];
            $_SESSION["user"] =login::$userData;
            $_SESSION["visited"]="true";
           
        }else{
            login::$userData   = ["dateOfLog" => date("j, n, Y"), "userName" => $this->userName ,"typeOfUser" => "user"];
            $_SESSION["user"] = login::$userData;
            $_SESSION["visited"]="true";
        }
        
    }
    // ------------for mohamed to check if the day of login for the user is the same for today 
  
  public function saveUser(){
    if($_POST["userName"]){
        $_SESSION["signedToday"]=date("j, n, Y");
  }
  }
  
//   we can also check on the name by comparing the name we saved in the session with the post name ////
    public function saveUserOnlyOneTimePerDay(){
            if($_SESSION["signedToday"]!=date("j, n, Y")){
                echo "new login";
            }
    }

// -----------------------------------------------------------------------------------------


    // public function redirectToHome(){

    //     header("location:".home);
    //     exit();

    // }

    
}