<?php
//dosya konumu vererek connectionClass'ı bagladık
require_once (dirname(__FILE__). '/../functions/connectionClass.php' );
//galleryClass connectionClass'tan kalıtım alınması saglandı
class galleryClass extends connectionClass{
    //Bu method gelen image parametresini alarak database fotograf eklenmesi saglanıyor.
    public function uploadGallery($image){
        $insert = "Insert into gallery (ImageName) values ('$image')";
        $result = $this -> query($insert);
        if($result){
            echo "Dosya yüklendi";
        }
        else
        {
            echo "Dosya yüklenemedi";
        }
    }
    //Bu method gallery tablosuna giderek sutunlardaki fotografları fetch_array kullanarak dizi seklinde deger donmesini saglıyor
    public function listGallery(){
        $select = "select * from gallery";
        $result = $this -> query($select);
        $count = $result -> num_rows;
        if($count < 1){    
        }
        else
        {
            //fetch_array(MYSQLI_ASSOC) iliskisel array dondurur
            while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        }
    }
    //Bu method gelen iki parametre ile db'ye username ve password icin kayıt işlemi yapıyor
    public function registrationLogin($username,$password){
        $query = "Insert into login (Username, Password)
        VALUES ('$username', '".md5($password)."')";
        $result = $this -> query($query);
        if($result){
            return "Başarılı işlem";
        }  
        else{
            return "Başarısız işlem";
        }  
    }
}
?>