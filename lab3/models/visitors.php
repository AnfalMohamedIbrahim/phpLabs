<?php

class visit{

  private $fvisits;
  private $visitsCounter=0;

  public function saveVisits(){
    $this->fvisits=fopen("log.txt","a+");
    print_r($_SESSION["user"]);
    $this->visitsCounter++;

    if($_SESSION["user"]&& $_SESSION["visited"]=="true"){

       fwrite($this->fvisits,$this->visitsCounter.implode("||",$_SESSION["user"]).PHP_EOL);
       $_SESSION["visited"]=="false";
    }
    return $this->fvisits;
  }

  public function closeFile(){
    fclose($this->fvisits);
  }

    


}





?>