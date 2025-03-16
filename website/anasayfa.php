<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">


<style>
    *{
    box-sizing: border-box;
}
body{
    font-family: 'Nunito', sans-serif;
    margin: 0;
}
#menu{
    height: 80px;
    padding: 20px;
}
#logo{
    font-size: 30px;
    line-height: 80px;
    color: #124b7c;
    float: left;
    
}
nav{
    float: right;
    line-height: 70px;
}
nav a:link{
    text-decoration: none;
    margin-right: 30px;
    color: #124b7c;
}
nav a:hover{
    border-bottom: 3px solid #124b7c;
}
nav a:visited{
    text-decoration: none;
    margin-right: 30px;
    color: #124b7c;
}
.ikon{
    margin-right: 6px;
    font-size: 15px;
}
#anasayfa{
    background-color: crimson;
    height: 450px;
    background-image: url(resim/platter-2009590_1280.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
#renk{
    height: 450px;
    background-color:black;
    opacity: 0.4;
}
#icerik{
    position: absolute;
    top: 50%;
    left: 40%;
    color: white;
    transform: translate(-50%, -50%);
}
#hakkımızda{
     background-color: azure;
     padding: 50px;
     text-align: center;
     text-transform: capitalize;
     font-weight: 550;
}
h3{
    font-size: 40px;
    color: #124b7c;
    font-weight: 150;
}
.kutu{
    width: 1200px;
    height: auto;
    margin: auto;
    text-shadow: #124b7c;
    font-size: 17px;
}
.img-fluid{
    max-width: 100%;
    height: auto;
    margin-top: 90px;
}
#pson{
    margin-top: 90px;
}
#yemekler{
    background-color:white;
    padding: 50px;
    text-align: center;
    height: 680px;
}
.kart{
    width: 320px;
    height: 350px;
    border: 1px;
    display: inline-block;
    margin-right: 75px;
}
.kartbaslik{
    font-size: 20px;
    color: darkblue;
}
.pkart{
    color: rgb(107, 8, 8);
}
.card:hover{
    border: 2px solid black;
}
#iletisim{
    background: url(resim/pexels-simon-berger-1323550.jpg);
    background-size: cover;
    padding: 50px;
    height: auto;
    text-align: center;
}
#h3iletisim{
    color: white;
}
#iletisimopak{
    margin-bottom: 50px;
    height: 550;
}
#formgrup{
    width: 700px;
    float: left;
    height: 500px;
    text-align: left;
}
#solform{
    width: 50%;
    float: left;
    padding-right: 5px;
}
#sağform{
    width: 50%;
    float: left;
    padding-left: 5px;
}
.formkontrol{
    width: 100%;
    padding: 10px;
    font-size: 16px;
    line-height: 1.6px;
    color:#124b7c ;
    background-color: white;
    border-radius: 4px;
    border: 1px solid grey;
    margin: 10px;
}
input[type="submit"]{
    cursor: pointer;
    background-color:rgb(61, 150, 209);
    font-size: 20px;
    padding: 10px 27px;
    color: rgb(18, 88, 108)e;
    border: 2px solid black;
}
#adresh4{
    font-size: 32px;
    color: white;
}
#socialfooter{
    font-size: 35px;
}

</style>
</head>
<body>
    <section id="menu">
       <b> <div id="logo">Lezzet Düşleri</div></b>
            <nav>
                <a href="anasayfa.php"><i class="fa-solid fa-house"></i>Anasayfa </a>
                <a href="yemekler.php"><i class="fa-solid fa-bowl-food"></i>Yemek Çeşitleri </a>
                <a href="içecekler.php"><i class="fa-solid fa-mug-hot"></i>İçecek Çeşitleri </a>
            </nav>
    </section>
    <section id="anasayfa">
        <div id="renk">
        </div>
        <div id="icerik">
            <h2>Lezzet Düşleri</h2>
            <hr width="300" align="left">
            <p>Hoş geldiniz! Biz, damaklarına özel bir şölen sunmak üzere yola çıkan "Mutfak Sanatları Atölyesi" olarak sizleri ağırlamaktan gurur duyuyoruz. Yemek tutkunları için özenle hazırladığımız menümüzde, dünya mutfağının eşsiz lezzetlerini sizinle buluşturmanın heyecanını yaşıyoruz. Restoranımız, sıcak atmosferi, zarif dekorasyonu ve samimi hizmet anlayışıyla misafirlerine evlerindeymiş gibi hissettirmeyi amaçlar. Yemeklerimizdeki özeni ve özgünlüğü hissetmeniz için her detayı titizlikle düşündük. Sizleri, lezzet dolu bir yolculuğa davet ediyoruz. Deneyimli ekibimiz ve özgün menümüzle sizlere unutulmaz bir mutfak serüveni vaat ediyoruz. İyi yemek, iyi dostluk ve iyi anılarla dolu bir deneyim için bizi tercih ettiğiniz için teşekkür ederiz. Afiyet olsun!</p>

        </div>
    </section>
    <section id="hakkımızda">
        <h3>Lezzet Düşleri Hakkında</h3>
        <div class="kutu">
            <p>Lezzet Düşleri, yemek yapmayı keyifli ve kolay bir deneyim haline getirmek için tasarlanmıştır. Adım adım tarifler, video dersler ve deneyimli şeflerimizin profesyonel ipuçları ile yemek yapma becerilerinizi geliştirebilir, evinizde mutfak sihirinizi yaratabilirsiniz. Lezzet  Düşleri, her damak zevkine uygun geniş bir tarif koleksiyonu sunar. Türk mutfağından dünya mutfaklarına, sağlıklı tariflerden atıştırmalıklara kadar birçok kategoride yüzlerce tarif arasında dolaşabilirsiniz. Ayrıca, sezonun en taze malzemelerini kullanarak yeni lezzetler keşfetmeye teşvik eden seçkilerimizle sizi bekliyoruz.</p>
            <img src="resim/pexels-pixabay-262978.jpg" alt="" class="img-fluid">
            <p id="pson">Bizim için her bir misafirimiz ayrıcalıklıdır. Profesyonel ve güleryüzlü personelimiz, sizlere konuksever bir deneyim sunmak için burada bulunuyor. Sorularınız, talepleriniz veya özel istekleriniz için her zaman yanınızdayız. Lezzet Düşleri, sadece bir yemek yeri değil, bir deneyim sunar. Sizleri hayalinizdeki lezzet yolculuğuna çıkarmak için sabırsızlanıyoruz. Unutulmaz anlar yaşamak ve lezzetin zirvesine çıkmak için bize katılın.
            </p>
        </div>
    </section>
    <section id="iletisim">
        <div class="kutu">
            <h3 id="h3iletisim">İletişim</h3>
            <form action="index.php" method="post">
            <div id="iletisimopak">
                <div id="formgrup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="formkontrol">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="formkontrol">
                    </div>
                    <div id="sağform">
                        <input type="email" name="mail" placeholder="E-Mail Adresi" required class="formkontrol">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="formkontrol">
                    </div>
                    <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Girin" required class="formkontrol"></textarea>
                    <input type="submit" value="Gönder">
                    </div>
                
                <div id="adres">
                    <h4 id="adresh4">Adres:</h4>
                    <p>No: 0551 217 54 39</p>
                    <p>E-Mail: kayravarol07@gmail.com</p>
                </div>
                </div>
                <footer>
                    <div id="socialfooter">
                        <a href="https://www.instagram.com/kayra_burakk/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </form>
                </footer>

            </div>
        
</body>
</html>


<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"])){
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."', '".$telefon."', '".$email."', '".$konu."', '".$mesaj."')";



if($baglan->query($ekle)===TRUE){

    echo"<script>alert('Verileriniz Eklenmiştir.')</script>";
}
}

?>