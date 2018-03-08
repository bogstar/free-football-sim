<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/igra.js';
    $CSSPath = 'public_html/css/subpages/nonhome.css';
    include 'resources/includes/head_html.php';
    ?>
    
    <body onload="igraPravila.playclip()">
        
        <div class="igra-container">
            <img class="pentagram" src="public_html/design_resources/img/pentagramž.png" /><br>
            <p class="upute">
                U ovoj je igri cilj dovesti svom tim do osvajanja turnira pomoću treninga svoga tima prije svake utakmice na način da
                poništite jake strane protivničkog tima.<br>
                <br>
                Ovaj pentagram predstavlja naš algoritam koji će Vam pomoći pri povećavanju vaših šansi za osvajanje našeg turnira.<br>
                Dobro ga proučite.
                <br>
                <br>
            </p>
             
            <h1 class="putactadin about-putac"><a href="igra_dodaj_tim.php" onmouseover="mouseOverIgraj.playclip()">IGRAJ</a></h1>
        </div>
        
    </body>
    
</html>