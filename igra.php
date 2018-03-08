<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/igra.js';
    $CSSPath = 'public_html/css/subpages/igra.css';
    include 'resources/includes/head_html.php';
    ?>
    
    <body onload="javascript:init();">
        
        <?php
        session_start();
        ?>
        
        <div style="display: none;">
            <?php 
        
            // Učitavanje dependencija i librarija.
            require_once 'resources/library/dependencies.php';
            $dbHandler = dbConnect('localhost', 'futbol', 'root', '');

            if($dbHandler) {

                $queryString = 'SELECT * FROM player';

                $query = $dbHandler->prepare($queryString);

                $query->execute();

                $result = $query->fetch();

                $brojMideva = $brojAttova = $brojDefova = 0;
                
                do {
                    
                    
                    if($result['player_playing_pos'] == 'Goalkeeper') {
                        $pos = 'gk';
                    }
                    if($result['player_playing_pos'] == 'Defender') {
                        $pos = 'def';
                        $brojDefova++;
                        $posBroj = $brojDefova;
                        if($brojDefova >= 4) {
                            $brojDefova = 0;
                        }
                    }
                    if($result['player_playing_pos'] == 'Forward') {
                        $pos = 'att';
                        $brojAttova++;
                        $posBroj = $brojAttova;
                        if($brojAttova >= 2) {
                            $brojAttova = 0;
                        }
                    }
                    if($result['player_playing_pos'] == 'Midfielder') {
                        $pos = 'mid';
                        $brojMideva++;
                        $posBroj = $brojMideva;
                        if($brojMideva >= 4) {
                            $brojMideva = 0;
                        }
                    }
                    switch($result['id_team']) {
                        case 1:
                            $team = 'rij';
                            break;
                        case 2:
                            $team = 'haj';
                            break;
                        case 3:
                            $team = 'din';
                            break;
                        case 4:
                            $team = 'rmd';
                            break;
                        case 5:
                            $team = 'bar';
                            break;
                        case 6:
                            $team = 'byr';
                            break;
                        case 7:
                            $team = 'psg';
                            break;
                    }

                    $ime = $result['player_name'];

                    echo '
                            <span id="team_' . $team . '_' . $pos . '_' . $posBroj . '">' . $ime . '</span>
                        ';
                    
                    $result = $query->fetch();
                } while($result);

                unset($dbHandler);

            }

                
            $igraci = [];

            array_push($igraci, $_SESSION["mid1"]);
            array_push($igraci, $_SESSION["mid2"]);
            array_push($igraci, $_SESSION["mid3"]);
            array_push($igraci, $_SESSION["mid4"]);
            array_push($igraci, $_SESSION["att1"]);
            array_push($igraci, $_SESSION["att2"]);

            for($i = 0; $i < 6; $i++) {
                if($i < 4) {
                    $pos = 'mid';
                    $posBroj = $i + 1;
                } else {
                    $pos = 'att';
                    $posBroj = $i % 4 + 1;
                }
                $ime = $igraci[$i];
                
                echo '
                    <span id="team_mojtim_' . $pos . '_' . $posBroj . '">' . $ime . '</span>
                ';
            }
            
            echo '
                    <span id="tim_name">' . $_SESSION["naziv"] . '</span>
                    <span id="tim_manager">' . $_SESSION["manager"] . '</span>
                    <span id="tim_liga">' . $_SESSION["liga"] . '</span>
                    <span id="tim_logo">' . $_SESSION["logo"] . '</span>
                    <span id="tezina">' . getFromPOST("tezina") . '</span>
                ';
            
            
            ?>
            
        </div>
            
        <div class="bracket">
            <div id="trening">
                <table>
                    <th><td>Team A <input type="button" value="Default" onclick="javascript:defaultSliders();" style="margin-left: 20px;" /></td></th>
                    <tr><td>Pool:</td><td id="Apool" style="font-size: 30px; text-align: center;">25</td></tr>
                    <tr><td style="width: 50px;">Att:</td><td><input type="range" value="0" min="60" max="100" id="Aattslider" oninput="javascript:refresh();" style="width: 400px;" /></td><td id="Aattnum">5</td></tr>
                    <tr><td style="width: 50px;">Def:</td><td><input type="range" value="0" min="60" max="100" id="Adefslider" oninput="javascript:refresh();" style="width: 400px;" /></td><td id="Adefnum">5</td></tr>
                    <tr><td style="width: 50px;">Spd:</td><td><input type="range" value="0" min="60" max="100" id="Aspdslider" oninput="javascript:refresh();" style="width: 400px;" /></td><td id="Aspdnum">5</td></tr>
                    <tr><td style="width: 50px;">Tec:</td><td><input type="range" value="0" min="60" max="100" id="Atecslider" oninput="javascript:refresh();" style="width: 400px;" /></td><td id="Atecnum">5</td></tr>
                    <tr><td style="width: 50px;">Sta:</td><td><input type="range" value="0" min="60" max="100" id="Astaslider" oninput="javascript:refresh();" style="width: 400px;" /></td><td id="Astanum">5</td></tr>
                </table>
                <input type="button" value="DALJE!" onclick="javascript:pokreniIduciKrug()" id="dalje" />
                Broj tikova: <input type="text" id="brojtikova" />
                <div id="protivnik">
                    att: 78<br>
                    def: 78<br>
                    spd: 78<br>
                    tec: 78<br>
                    sta: 78<br>
                </div>
            </div>
            <div id="bracket" >
                <canvas id="bracket-canvas" width="489" height="378">
                    
                </canvas>
            </div>
        </div>

        <div class="livefeed" id="livefeed" style="overflow: auto;">
            livefeed
        </div>
        
        
    </body>
    
</html>