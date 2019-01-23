<?php
//connectionClass mysqli adında ozel bir classdan kalıtım alır 
class connectionClass extends mysqli{ 
    private $host = "localhost" , $password = "" , $username = "root" , $dbName='mydb';
    public $con;
    //bu method con ozelligi icin mysqli class'ı ile birlikte gelen connect ozelligi ile database'i bagladık
    function __construct() {
        $this -> con = $this -> connect($this -> host , $this -> username , $this -> password , $this -> dbName);
    }
}
?>