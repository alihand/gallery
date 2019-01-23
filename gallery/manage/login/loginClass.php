<?php
//session baslatma
session_start();
//dosya konumu vererek connectionClass var mı diye bakar 
require_once (dirname(__FILE__).'/../functions/connectionClass.php');
//loginClass'ı olusturup connectionClass'ından kalıtım alıyor
class loginClass extends connectionClass{
    //Database'de checkLogin methodu kullanılarak kullanıcı adı ve sifre kontrolu yapar 
    public function checkLogin($username , $password){
        $select = "Select * from login Where Username = '$username' && Password = Md5('$password')";
        $result = $this -> query($select) or die($this -> error);
        $count = $result -> num_rows;
        //Eger sorudan gelen sutun sayısı 1'den az ise hatalı giris mesajını versin
        if($count < 1){
            return "Hatalı Giriş!";
        }
        //Degilse username icin session degerlerini atasın
        else
        {
            $_SESSION["username"] = $username;
            $_SESSION["pass"] = md5($password);
            //Eger username veya pass bos ise login.php ekranında kalsın
            if($_SESSION["username"] == "" || $_SESSION["pass"] == ""){
                //header yonlendirmesini kulllanark login.php sayfasına gonderim yapar
                header("location:login.php");
            }
            //Degilse basarılı bir seklinde islem yapmıs olur ve dashboard.php sayfasına yonlendirir
            else
            {
                header("location:manage/dashboard.php");
            }
        }
    }
   
}
?>