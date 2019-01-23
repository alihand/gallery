<?php
//dosya konumu vererek connetipnClass.php'yi bagladık.
require_once (dirname(__FILE__).'/../functions/connectionClass.php');
//countClass connectionClass'tan kaltıtm alır 
class countClass extends connectionClass{
    //Bu method database kac tane fotograf eklendiyse bu eklenen fotografların sayısını gösterir.
    public function showtheCount(){
        $select = "Select * from gallery";
        $result = $this -> query($select);
        $count = $result -> num_rows;
        //Eger database 1'den az deger varsa 0 dunsun
        if($count < 1){
            return 0;
        }//Degilse toplam kac tane deger varsa onu donsun
        else
        {
            return $count;
        }
    }   
}
?>