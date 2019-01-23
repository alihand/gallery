<?php
//header.php ve galleryClass dosyalarını ekleme

include_once './gallery/galleryClass.php';
//Eger varsa galleryClass'ından galleryClass nesnesini olustur bu nesne icin ListGallery methodunu cagır ve bu methodan gelen degerleri listAlbum degiskenine ata
$galleryClass = new galleryClass();
$listAlbum = $galleryClass -> listGallery();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Galeri Listesi</title>
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
}
li{
  float:left;
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
        <h3>Galeri Listesi</h3>
           <ul>
           <li>
              <a href = "dashboard.php">Anasayfa </a>
           </li>
           <li>
              <a href = "addGallery.php">Fotoğraf Ekle</a>
            </li>
            <li>
              <a class="active" href = "listGallery.php">Galeri Listesi</a>
            </li>
            <li>
               <a href = "logout.php">Çıkış Yap</a>
            </li>
            </ul>
          <table>
              <thead>
                  <tr><th>Fotoğraflar</th><th>Id</th></tr>
              </thead>
              <tbody>
                  <?php
                  //Database'den gallery tablosu icin sorgu sonucu gelen arraye bakarak foreach dongusu ile fotografları ve id numaralarını yazar
                    if(count($listAlbum)){
                        foreach ($listAlbum as $values) {
                            echo "<tr><td><img src='../galleryImage/$values[ImageName]' width='50px' height='50px'></td><td>$values[ID]</td></tr>";
                        }
                    }
                  ?>
              </tbody>
          </table> 
  </body>
</html>