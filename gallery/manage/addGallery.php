<?php
//header dosyasını ekler

//Fotograf ekle buttonundan gelen deger var mı diye bakar eger boyle bir deger var ise dosya yolunun ismine Image ve hedef adrese name degerlerine ata
if(isset($_POST["submit"])){
    $getImage = basename($_FILES["Image"]["name"]);
    //Eger bos bir deger gelirse lütfen secim yapınız yazsın.
    if($getImage == ""){
        echo "Lütfen seçim yapınız";
    }//Degilse dosya konumuna bakarak bu fotograf varsa o degeri target degiskenine atasın ve o dosyadaki resimleri getirsin ve imageName degiskenine atasın
    else
    {
        $target = "../galleryImage/";
        $target = $target.$getImage;
        $imageName = $getImage;
        //Eger dosya yolunun ismi Image ve hedef adresi type ise yani jpeg jpg olan fotograflari yüklesin
        if($_FILES["Image"]["type"] == "image/jpg" || $_FILES["Image"]["type"] == "image/jpeg"){
          //Bu dosyaları move_uploaded_file methodunu kullanarak tasısın
            move_uploaded_file($_FILES["Image"]["tmp_name"],$target);
            //Eger bu dosyalar yuklendi ise asagıdaki islemleri yapsın
            if(move_uploaded_file){
                //dosya konumu vererek galleryClass'ı varmı diye bakar eger varsa galleryClass'ından galleryClass nesnesini olustursun ve bu nesne icin uploadGallery methodunu kullanarak resim yuklesin
                include_once './gallery/galleryClass.php';
                $galleryClass = new GalleryClass();
                $galleryClass -> uploadGallery($imageName);
            }//Degilse dosya yüklenemedi mesajını versin
            else
            {
                echo "Dosya yüklenemedi!";
            }
        }//Basarılı bir sekilde islem yaparsa Lütfen resim seçiniz mesajını versin
        else
        {
            echo "Lütfen resim seçiniz!";
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fotoğraf Ekle</title>
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
.Image {
  border-radius:12px;
  width:165px;
  height:20px;
  margin-right:100%;
  background-color:white;
  margin-bottom:20px;
}
  </style>
  <body>
        <h3>Fotoğraf Ekle</h3>
           <ul>
           <li>
               <a href = "dashboard.php">Anasayfa </a>
            </li>
            <li>
               <a class="active" href = "addGallery.php">Fotoğraf Ekle</a>
            </li>
            <li>
              <a href = "listGallery.php">Galeri Listesi</a>
            </li>
            <li>
               <a href = "logout.php">Çıkış Yap</a>
            </li>
            </ul>
          <form method = "post" action = "<?php echo $_SERVER["PHP_SELF"]; ?>" enctype = "multipart/form-data">
                  <h2>Fotoğraf Seçiniz</h2>
                  <input class = "Image"type = "file" name = "Image" value = "" >           
              <button name = "submit" type = "Submit" >Fotoğrafı Yükle</button>         
          </form>
  </body>
</html>