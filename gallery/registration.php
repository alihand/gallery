<?php
//galleryClass var mı diye bakar
include_once 'manage/gallery/galleryClass.php';
//submit'te gelen deger var mı diye bakar eger var ise username ve password degişkenlerine form elemanlarından gelen degerleri ekler ve galleryClass adında bir nesne olusturarak 
//db'ye bu iki parametre gondererek kayıt işlemi yaptırılır bunu sonuc adında bir degikene atadık 
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $galleryClass = new galleryClass();
    $sonuc = $galleryClass -> registrationLogin($username,$password);
    //eger methoddan gelen deger basarılı islem ise login.php sayfasına yonlendirme yapsın  
       if($sonuc == "Başarılı işlem"){
          header("location:login.php");
       }else{//degilse bu oldugumuz sayfada kalsın
        header("location:registration.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kayıt Ol</title>
<style>
html, body {   
   width: 100%;   
   height: 100%;   
   font-family: "Helvetica Neue", Helvetica, sans-serif;   
   color: #444;   
   -webkit-font-smoothing: antialiased;    
   background: #f0f0f0; 
}
.form {
   position: fixed;
   width: 340px;
   height: 280px;
   top: 50%;
   left: 50%;
   margin-top: -140px;
   margin-left: -170px;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 12px;
    outline: none;
}
input[type=text], input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
}
#button {
    width:100px;
    height:50px;
    margin-left:120px;
    margin-top:20px;
    background: #f0f0f0;
}
</style>
</head>
<body>
<div class="form">
<h1>Kayıt Olma</h1>
<form  action="" method="post">
<input type="text" name="username" placeholder="Kullanıcı Adı" required >
<input type="password" name="password" placeholder="Şifre" required >
<input id = "button" name = "submit" type = "submit" value = "Kayıt Ol">
</form>
</div>
</body>
</html>


