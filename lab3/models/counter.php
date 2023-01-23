<?php


class counter{

    private $counter =0;
    

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
}