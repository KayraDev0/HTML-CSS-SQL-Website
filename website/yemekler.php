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
             </nav>
     </section>
<section id="yemekler">
    <div class="kutu">
        <h3>Yemek Çeşitlerimiz</h3>
        <div>
            <div class="kart" >
                <img src="resim/atie-nabat-Uiro__CkZMs-unsplash.jpg" alt="" class="img-fluid" width="228">
                <h5 class="kartbaslik">Spaghetti </h5>
                <p class="pkart">Tatlım, taze pişmiş spagettinin muhteşem dokusuyla çıtır çıtır makarnaları, sımsıcak ve nefis domates sosu ile buluşuyor! İtalya'nın en özel baharatları ve özenle seçilmiş malzemelerle hazırlanan bu lezzet şöleni, sofranızda aileniz ve sevdiklerinizle paylaşmak için ideal. Haydi, spagetti sofrasında bir araya gelin ve damaklarda unutulmaz bir lezzet yolculuğuna çıkın!</p>

            </div>
            <div class="kart">
                <img src="resim/pizza-four-cheese-table_140725-5391.jpg" alt="" class="img-fluid">
                <h5 class="kartbaslik">Pizza</h5>
                <p class="pkart">Leziz bir pizza keyfi mi istiyorsunuz? Taze çıtır hamur, yoğun domates sosu ve zengin bir peynir karışımıyla dolu nefis bir pizza sizi bekliyor! Özel malzemelerimiz ve ustaca seçilmiş baharatlarla hazırlanan bu eşsiz lezzet, damaklarınızda bir şölen yaşatacak. Her dilimde mutluluğu keşfedin, çünkü bu pizza sadece bir yemek değil, bir lezzet yolculuğu!</p>

            </div>
            <div class="kart">
                <img src="resim/derek-duran-Jz4QMhLvGgw-unsplash.jpg" alt="" class="img-fluid" width="205">
                <h5 class="kartbaslik">Sushi</h5>
                <p class="pkart">Kendinizi bir Japon lezzet şölenine davet ediyoruz! Taze ve nefis deniz ürünleri, leziz sebzeler ve baharatlı pirinçle bir araya gelerek muazzam bir sushi deneyimi sunuyoruz. Sağlıklı ve nefis bir alternatif arıyorsanız, sushi tam size göre! Hemen bir tabak sushi seçin, dostlarınızla paylaşın ve lezzet dolu bir anın keyfini çıkarın!</p>

            </div>
            <div class="kart" >
                <img src="resim/pexels-jang-‘s-🍂-2664216.jpg" alt="" class="img-fluid" width="270px">
                <h5 class="kartbaslik">Ramen</h5>
                <p class="pkart">Leziz bir yolculuğa hazır olun! Şehirdeki en nefis ramen deneyimi sizi bekliyor. Tadını doyasıya çıkarabileceğiniz taze noodle'lar, aromatik çorba ve özenle seçilmiş malzemelerle hazırlanan bu nefis ramen, size doyumsuz bir lezzet şöleni sunacak. Usta şeflerimiz, size en taze ve en lezzetli malzemelerle hazırlanmış ramen sunmak için çalışıyor. Hemen gelin, bu lezzetli yolculuğa katılın ve unutulmaz bir ramen deneyimi yaşayın!</p>

            </div>
            <div class="kart" >
                <img src="resim/schnitzel-961131_1280.jpg" alt="" class="img-fluid">
                <h5 class="kartbaslik">Şinitzel</h5>
                <p class="pkart">Enerjinizi ve iştahınızı anında canlandırmak için şinitzel tam aradığınız lezzet! Yumuşacık dana eti, çıtır çıtır kızartılmış pane harcı ile buluşuyor, mükemmel bir lezzet deneyimi sunuyoruz. Her lokmada hissedeceğiniz o eşsiz lezzet, gününüzü özel kılacak. Hemen gelin, mis kokulu şinitzelimizi deneyin ve her lokmada keyfin tadını çıkarın. Şinitzel, sadece bir yemek değil, tam bir lezzet şöleni!</p>

            </div>
            <div class="kart" >
                <img src="resim/pexels-polina-tankilevitch-6419692.jpg" alt="" class="img-fluid" width="180px">
                <h5 class="kartbaslik">Kebap</h5>
                <p class="pkart">Enerji dolu bir kebap macerasına hazır mısınız? Sizlere, nefis etin eşsiz lezzetiyle buluşan bir kebap şöleni sunuyoruz! Özenle seçilmiş baharatlar ve taze malzemelerle hazırlanan bu lezzet, her lokmada bir tat festivali sunuyor. Izgara ateşiyle buluşan etin mükemmel pişmişliği, sizi adeta bir gastronomi rüyasına davet ediyor!</p>

            </div>
        </div>
    </div>

</section>

</body>
</html>