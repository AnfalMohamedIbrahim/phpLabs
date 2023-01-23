<?php


class counter{

    private $counter =0;
    private $file;
    

    private function addUniqueVisit(){
        $this->counter ++;
        return $this->counter;
    }
    public function uniqueVisitsCounter (){
        

        if($_SESSION["visited"]!="true"){
            
             $this->addUniqueVisit();
            }
            
            
        
       return $this->addUniqueVisit();
   }
   public function saveVisits(){
    $this->file=fopen("log.txt","a+");
    print_r($_SESSION["user"]);

    if($_SESSION["user"]&& $_SESSION["visited"]!="true"){

       fwrite($this->file,$this->uniqueVisitsCounter ().implode("||",$_SESSION["user"]).PHP_EOL);
       $_SESSION["visited"]="true";
    }
   
  }

}