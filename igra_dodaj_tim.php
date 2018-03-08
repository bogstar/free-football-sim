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
    
    <body onload="igraDodajTim.playclip()">
        
        <div class="igra-container">
                
            <article>

                <form class='unos-tima' action="igra_dodaj_igrace.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr><td>Naziv tima:</td><td><input type="text" name="teamName" maxlength="64" required /></td></tr>
                        <tr><td>Menadžer:</td><td><input type="text" name="teamManager" maxlength="64" required /></td></tr>
                        <tr><td>Liga:</td><td><input type="text" name="teamLeague" maxlength="64" required /></td></tr>
                        <tr><td>Logo:</td><td><input  accept="image/png" type="file" name="teamLogo"  required /></td></tr>
                    </table>
                    <div><h1 class="putactadin dodajtimtadin"><input type="submit" onmouseover="mouseOverIgraj.playclip()"></h1></div>
                </form>

            </article>
                
        </div>  
        
    </body>
    
</html>