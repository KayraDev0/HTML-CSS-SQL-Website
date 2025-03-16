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
    background-image: url(/resim/platter-2009590_1280.jpg);
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
    background: url(/resim/pexels-simon-berger-1323550.jpg);
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
     </section>
<section id="yemekler">
    <div class="kutu">
        <h3>İçecek Çeşitlerimiz</h3>
        <div>
            <div class="kart" >
                <img src="resim/nathan-dumlao-dvuHNTJxIsg-unsplash.jpg" alt="" class="img-fluid" width="228px">
                <h5 class="kartbaslik">Espresso </h5>
                <p class="pkart">Espresso, kahvenin kısa, yoğun ve güçlü bir formudur. İnce öğütülmüş kahve çekirdekleri, kısa sürede yüksek basınç altında demlenir, bu da içeceğin yoğunluğunu ve lezzetini artırır. Biz burada, her siparişte taze öğütülmüş en kaliteli çekirdekleri kullanarak, size mükemmel bir Espresso sunmanın gururunu yaşıyoruz.</p>
            </div>
            <div class="kart">
                <img src="resim/harris-vo-JpQGEArmG0I-unsplash.jpg" alt="" class="img-fluid" width="230px">
                <h5 class="kartbaslik">Cappucino</h5>
                <p class="pkart">Siz de gününüzü renklendirmek, enerji katmak ve kendinizi ödüllendirmek istiyorsanız, Cappuccino tam size göre. Unutulmaz bir kahve deneyimi ve sıcak bir atmosfer sizi bekliyor. Bir yudum alınca, sizi sarmalayan o hafif acılık ve süt köpüğünün yumuşacık dokusu... Hadi, kahve molasını daha özel kılın. Hayat bir yudum Cappuccino ile daha güzel!</p>

            </div>
            <div class="kart">
                <img src="resim/billy-kwok-vfiA7rRtjWo-unsplash.jpg" alt="" class="img-fluid" width="258px">
                <h5 class="kartbaslik">Latte</h5>
                <p class="pkart">Her bir yudumu, taze çekilmiş kahve çekirdeklerinin sıcak dansı ve pürüzsüz süt köpüğüyle birleşiyor. İşte karşınızda, sadece bir içecek değil, bir anlam, bir huzur kaynağı: Latte! Kahve severlerin vazgeçilmezi Latte ile sıcacık bir atmosferde buluşmaya ne dersiniz? Sizi en iyi kahve deneyimiyle tanıştırmak için buradayız.</p>

            </div>
            <div class="kart" >
                <img src="resim/pexels-photo-5305639.jpg" alt="" class="img-fluid" >
                <h5 class="kartbaslik">Macchiato</h5>
                <p class="pkart">Her bir damlasında sizi saran özenle seçilmiş kahve ve damla damla eklenen süt köpüğü... İşte karşınızda, sadece bir içecek değil, bir sanat eseri: Macchiato! Macchiato, yoğun iş temposunda veya sakin bir kitap okuma anında mükemmel bir eşlikçi. Lezzetin dansını keşfedin ve kahve keyfinizi bir adım öteye taşıyın.</p>

            </div>
            <div class="kart" >
                <img src="resim/pexels-jose-espinal-1006297.jpg" alt="" class="img-fluid" width="180px">
                <h5 class="kartbaslik">Mocha</h5>
                <p class="pkart">Mocha, hayalinizdeki çikolata kahve deneyimini gerçeğe dönüştürüyor. Yoğun iş günlerinizde veya arkadaşlarınızla buluştuğunuzda, Mocha sizinle. Çikolata ve kahvenin mükemmel dansı, Mocha ile gerçek oluyor. Tatlı bir sürpriz, sizi her yudumda bekliyor. Haydi, tatlı bir mola için yerinizi alın. </p>

            </div>
            <div class="kart" >
                <img src="resim/pexels-igra-11379363.jpg" alt="" class="img-fluid" width="180px">
                <h5 class="kartbaslik">Turkish Coffee</h5>
                <p class="pkart">Her bir yudumu, tarihin derinliklerinden gelen bir miras. İnce öğütülmüş kahve çekirdekleri, telveyle buluşuyor ve Türk Kahvesi'nin eşsiz tadını yaratıyor. Türk Kahvesi, sadece bir içecek değil, bir kültürdür. Aile sohbetlerinde, dostlukların pekiştiği anlarda ve kendinize bir zaman ayırmak istediğiniz her anda sizinle.</p>

            </div>
        </div>
    </div>

</section>

</body>
</html>