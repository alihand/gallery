<?php
//header dosyasını bagladık ve countClass'ını ekleyerek kac tane fotograf oldugu sayısını aldık.
include_once './counting/countClass.php';
//Bu gelen fotograflardan kac tane oldugunu ogrenmek icin countClass'ından countClass nesnesini olusturduk ve showCount methodunu kullanarak bu sayının kac oldugunu ogrendik
$countClass = new countClass();
$No = $countClass -> showtheCount();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Galeri Bilgisi</title>   
  </head>
  <style>
* {
  box-sizing: border-box;
  }
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
ul{
  list-style-type:none;
  margin:0;
  padding:0;
  overflow:hidden;
  background-color:#333;
  text-align:center;
}
li{
  padding:0;
  float:left;
}
ul li {
  display:inline-block;
  display:inline;
}
li a{
  display:block;
  color:white;
  text-align:center;
  padding:14px 16px;
  text-decoration:none;
}
li : hover{
  background-color:#111;
}
.active{
  background-color:red;
}
  </style>
  <body>
        <h3>Galeri Bilgisi</h3>
            <ul>
              <li>
                  <a class="active" href = "dashboard.php">Anasayfa </a>
              </li>
              <li>
                  <a href = "addGallery.php">Fotoğraf Ekle</a>
              </li>
               <li>
                  <a href = "listGallery.php">Galeri Listesi</a>
              </li>
              <li>
                  <a href = "logout.php">Çıkış Yap</a>
              </li>
            </ul> 
          <h2>Fotoğraf Yüklendi</h2>
          <h1><?php echo $No; ?></h1>
  </body>
</html>
