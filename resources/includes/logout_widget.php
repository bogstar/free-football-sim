<?php
/* Ovaj include mijenja izgled logout widgeta na svakoj stranici.
 * Provjera na kojoj se stranici nalazimo i highlight-anje tog linka.
 */
?>
<li class="logout-button <?php if($_SESSION['location'] == 'acc_settings') {echo 'active-link';} ?>"><a href="#" onmouseover="mouseOverMenu.playclip()">Korisnički račun</a>
    <div class="logout-widget">
        <p><a href="account_settings.php" onmouseover="mouseOverMenu.playclip()">Promijeni postavke računa</a></p>
        <p><a href="logout.php" onmouseover="mouseOverMenu.playclip()">Log Out</a></p>
    </div>
</li>