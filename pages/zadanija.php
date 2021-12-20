<?php 
    $title = 'zadanija.php';
    $css = 'zadanija.css';
    $js='zadanija.js';
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');?>

    <article>  
        <div class="mgn"></div>
        <div class="zadanija">
            <a href="/pages/zadanija/cookie.php" class="zadanije">cookie</a>
            <a href="/pages/zadanija/localstorage.php" class="zadanije">local storage</a>
            <a href="/pages/zadanija/slider.php" class="zadanije">слайдер</a>
            <a href="/pages/contacts.php" class="zadanije">форма</a>
            <a href="/pages/zadanija/thems.php" class="zadanije">темы для страницы</a>
            <a href="/pages/zadanija/canvas.php" class="zadanije">канвас и корзина</a>
            <a href="/pages/zadanija/ad.php" class="zadanije">объявления</a>
        </div>
        <div class="grid-container">
            <div id="grid1" class="grid post-1">1</div>
            <div id="grid2" class="grid post-2">2</div>
            <div id="grid3" class="grid post-3">3</div>
            <div id="grid4" class="grid post-4">4</div>
            <div id="grid5" class="grid post-5">5</div>
            <div id="grid7" class="grid post-6">6</div>
            <div id="grid6" class="grid post-7">7</div>
            <div id="grid7" class="grid post-8">8</div>
            <div id="grid8" class="grid post-9">9</div>
        </div>
    </article>
</body>
</html>