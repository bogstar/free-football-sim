<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/igra.js';
    $CSSPath = 'public_html/css/subpages/nonhome.css';
    include './resources/includes/head_html.php';
    ?>
    
    <body class="gameover" onload="pozoviPovratakTadin();">
        <h1 class="gameoverfont">Game Over</h1>
        <h1 id="putactadin" class="putactadin gameovertadin" style="display: none;"><a href="./" onmouseover="mouseOverIgraj.playclip()">POVRATAK</a></h1>
    </body>
    
</html>