<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/add_new_stats.js';
    $CSSPath = 'public_html/css/subpages/nonhome.css';
    include 'resources/includes/head_html.php';
    ?>
    
    <body onload="igraDodajIgrace.playclip()">
        
        <?php
        session_start();
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        
        $_SESSION["naziv"] = getFromPOST("teamName");
        $_SESSION["manager"] = getFromPOST("teamManager");
        $_SESSION["liga"] = getFromPOST("teamLeague");
        
        // Dohvati file iz prethodne forme i prebaci ga u uploads direktorij
        $BASEDIR = "public_html/design_resources/img/teams/";
        //move_uploaded_file($_FILES['teamLogo']['tmp_name'], $BASEDIR.$_FILES['teamLogo']['name']);
        move_uploaded_file($_FILES['teamLogo']['tmp_name'], $BASEDIR.$_SESSION["naziv"].".png");
        
        $_SESSION["logo"] = $_FILES['teamLogo']['name'];
                  
        ?>
        
        <div class="igra-container">
                
            <article>

                <form action="igra_pregled_tima.php" method="POST">
                    <div class="selector-container">
                        <div class="selector gk" onclick="javascript:otvoriVratara();">
                            Vratar
                        </div>
                        <div class="drop gk" id="dropGK">
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="golman" maxlength="10" required /> <span></span>
                            </div>
                        </div>
                        <div class="selector def" onclick="javascript:otvoriBranica();">
                            Obrana
                        </div>
                        <div class="drop def" id="dropdef">
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="def1" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="def2" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="def3" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="def4" maxlength="10" required /> <span></span>
                            </div>
                        </div>
                        <div class="selector mid" onclick="javascript:otvoriVeznog();">
                            Vezni red
                        </div>
                        <div class="drop mid" id="dropmid">
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="mid1" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="mid2" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="mid3" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="mid4" maxlength="10" required /> <span></span>
                            </div>
                        </div>
                        <div class="selector att" onclick="javascript:otvorNapad();" on>
                            Napad
                        </div>
                        <div class="drop att" id="dropatt">
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="att1" maxlength="10" required /> <span></span>
                            </div>
                            <div>
                                Naziv igrača:
                            </div>
                            <div>                              
                                <input type="text" name="att2" maxlength="10" required /> <span></span>
                            </div>
                        </div>
                    </div>

                    <div><h1 class="putactadin dodajtimtadin"><input type="submit" onmouseover="mouseOverIgraj.playclip()"></h1></div>
                </form>

            </article>
                
        </div> 
        
    </body>
    
</html>