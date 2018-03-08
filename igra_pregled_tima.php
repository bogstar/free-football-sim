<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/add_new_stats.js';
    $CSSPath = 'public_html/css/subpages/igra.css';
    include 'resources/includes/head_html.php';
    ?>
    
    <body onload="javascript:init();">
        
        <?php
        session_start();
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        require_once 'resources/library/login_library.php';
        require_once 'resources/library/players_library.php';
        
        $_SESSION["gk"] = getFromPOST("golman");
        $_SESSION["def1"] = getFromPOST("def1");
        $_SESSION["def2"] = getFromPOST("def2");
        $_SESSION["def3"] = getFromPOST("def3");
        $_SESSION["def4"] = getFromPOST("def4");
        $_SESSION["mid1"] = getFromPOST("mid1");
        $_SESSION["mid2"] = getFromPOST("mid2");
        $_SESSION["mid3"] = getFromPOST("mid3");
        $_SESSION["mid4"] = getFromPOST("mid4");
        $_SESSION["att1"] = getFromPOST("att1");
        $_SESSION["att2"] = getFromPOST("att2");
                  
        ?>
        
        <div class="wrapper">
            
            <div style="display: none;">
                <span id="att1"><?php echo $_SESSION["att1"]; ?></span>
                <span id="att2"><?php echo $_SESSION["att2"]; ?></span>
                <span id="mid1"><?php echo $_SESSION["mid1"]; ?></span>
                <span id="mid2"><?php echo $_SESSION["mid2"]; ?></span>
                <span id="mid3"><?php echo $_SESSION["mid3"]; ?></span>
                <span id="mid4"><?php echo $_SESSION["mid4"]; ?></span>
                <span id="def1"><?php echo $_SESSION["def1"]; ?></span>
                <span id="def2"><?php echo $_SESSION["def2"]; ?></span>
                <span id="def3"><?php echo $_SESSION["def3"]; ?></span>
                <span id="def4"><?php echo $_SESSION["def4"]; ?></span>
                <span id="gk"><?php echo $_SESSION["gk"]; ?></span>
            </div>
            
            <div class="igra-container" style="height: 900px;">
            
                <div class="central-element">
                    <aside>
                        <div class="team-logo"><a href="public_html/design_resources/img/teams/<?php echo $_SESSION["naziv"].".png"; ?>"><img src="public_html/design_resources/img/teams/<?php echo $_SESSION["naziv"].".png"; ?>"/></a></div>

                        <table style="width: 200px; font-size: 22px;">
                            <tr><td colspan="2"><div class="team-name"><h1><?php echo $_SESSION["naziv"] ?></h1></td></tr>
                            <tr><td style="width: 110px;" class="table-key">Menadžer:</td><td class="table-value"><?php echo $_SESSION["manager"] ?></td></tr>
                            <tr><td class="table-key">Liga:</td><td class="table-value"><?php echo $_SESSION["liga"] ?></td></tr>
                        </table>

                        <div>
                            <br>
                            <form action="igra.php" method="POST">
                                <p>Odaberi težinu:</p>
                                <select name="tezina" class="tezina">
                                    <option value="demos">Demos</option>
                                    <option value="easy">Easy</option>
                                    <option value="medium">Medium</option>
                                    <option value="hard">Hard</option>
                                </select>
                                <h1 class="putactadin"><input type="submit" onmouseover="mouseOverIgraj.playclip()" value="KRENI" /></h1>
                            </form>
                        </div>
                    </aside>

                    <div class="main-content">

                        <article>

                            <div class="field">
                                <canvas width="493" height="800" id="footbal-field"></canvas>
                            </div>

                        </article>

                    </div>

                </div>
            
            </div>    
        
    </body>
    
</html>