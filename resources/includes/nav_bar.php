<div class="outer-nav">
    <div class="nav">

        <ul>
            <?php
            /* Ovaj include mijenja izgled logout widgeta na svakoj stranici.
             * Provjera na kojoj se stranici nalazimo i highlight-anje tog linka.
             */
            ?>
            <li <?php if($_SESSION['location'] == 'news') {echo 'class="active-link"';} ?>><a href="./" onmouseover="mouseOverMenu.playclip()">Novosti</a></li><li <?php if($_SESSION['location'] == 'players') {echo 'class="active-link"';} ?>>
            <a href="roster.php" onmouseover="mouseOverMenu.playclip()">Roster</a></li><li <?php if($_SESSION['location'] == 'about') {echo 'class="active-link"';} ?>>
            <a href="about.php" onmouseover="mouseOverMenu.playclip()">About</a></li>
                
            <?php
            
            // Provjera je li session namješten te prikazivanje pojedinog widgeta.
            if(isset($_SESSION['username'])) {
                include_once 'resources/includes/logout_widget.php';
            } else {
                include_once 'resources/includes/login_widget.php';
            } ?>
        </ul>
        
    </div>
</div>
