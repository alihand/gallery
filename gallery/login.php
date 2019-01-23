<?php
//alert adında bir string değisken tanımladık bu degisken ekrana eger hatalı giriş yaptığında uyarı vericek
$alert = "";
//form elementinden submit icin deger var mı diye kontrol ettik deger var ise username ve passaword degiskenleri icin bu degerleri ata
if(isset($_POST["submit"])){
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    //Eger username veya password bos ise hatalı giriş
    if($username == "" || $password == ""){
        $alert= "Lütfen geçerli bir şifre giriniz!";
    }
    //Degilse loginClass'ına git LoginClass'ından loginClass nesnesini olustur ve bu nesne icin loginClass'ından checkLogin methodunu kullanarak username ve password dogrulaması yap
    else
    {
        include_once './manage/login/loginClass.php';
        $loginClass = new loginClass();
        $loginClass -> checkLogin($username, $password);
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kullanıcı Girişi</title>
    <style>
html, body {   
   width: 100%;   
   height: 100%;   
   font-family: "Helvetica Neue", Helvetica, sans-serif;   
   color: #444;   
   -webkit-font-smoothing: antialiased;    
   background: #f0f0f0; 
}
#container {
   position: fixed;
   width: 340px;
   height: 280px;
   top: 50%;
   left: 50%;
   margin-top: -140px;
   margin-left: -170px;
}
form {
   margin: 0 auto;
   margin-top: 20px;
}
label {
    color: #555;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 14px;
}
p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: 4px;
    margin-right: 20px;
}
p a:hover {
    color: #555;
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
    width:80px;
    height:50px;
    margin-left:120px;
    margin-top:20px;
}
</style>
  </head>
  <body> 
    <div id = "container">
        <form  method = "post" action = "">
        <?php echo $alert; ?>
        <h2 >Lütfen Giriş Yapınız</h2>
        <label>Kullanıcı Adı </label>
        <input type = "text"  name = "Username" placeholder = "Kullanıcı Adını Giriniz" autofocus>
        <label>Şifre </label>
        <input type = "password" name = "Password" placeholder = "Şifrenizi Giriniz">
<button id = "button" name = "submit" type = "submit">Giriş Yap</button>
      </form>
      <p>Daha kaydolmadın mı? <a href='registration.php'>Kayıt Ol</p>
      </div>
  </body>
</html>