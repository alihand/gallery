<?php
//galleryClass'ı asagıdaki lokasyonda var mı diye bakar
include_once './manage/gallery/galleryClass.php';
//Eger boyle bir class var ise galleryClass'ından galleryClass nesnesini olusturur
$galleryClass = new galleryClass();
//bu nesne icin listGallery methodunu cagır ve galleryList degiskenine atar
$galleryList = $galleryClass -> listGallery();
?>
    <link rel = "stylesheet" href = "//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "//bootsnipp.com/dist/bootsnipp.min.css">
<style>
   body {
      padding: 30px 0px;
   }
   img{
      height:100%;
      width:100%;
   }
</style>
    <?php
    //listGallery methodundan gelen toplam kac tane resim oldugu sorarak bu degerleri array olarak dondurur ve foreach dongusu ile herbirini ekrana yazdırdık
    if(count($galleryList)){
    foreach ($galleryList as $value) {
        echo '<div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="galleryImage/'.$value["ImageName"].'" alt="...">
        </a>
    </div>';
    }
    }
?>