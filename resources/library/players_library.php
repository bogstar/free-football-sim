<?php

require_once './resources/library/dependencies.php';

function getTeamFromDB($arg) {
    
        // Povezivanje na bazu da se dohvate timovi.
        $dbHandler = dbConnect ('localhost', 'futbol', 'root', '');

        if($dbHandler) {
            
            if($arg == 'all') {
                
                $queryString = 'SELECT * FROM team';

                $query = $dbHandler->prepare($queryString);

                $query->execute();

                $result = $query->fetch();
                
                // Ispis svih timova.
                do {
                    echo '
                        <article>
                            <div class="top-div">
                                <div class="team-logo"><a href="' . getTeamLogoLink($result["team_logo"]) . '"><img src="' . getTeamLogoLink($result["team_logo"]) . '"/></a></div>
                                <div class="team-name"><h1><a href="./roster.php?team=' . $result["id_team"] . '">' . $result["team_name"] . '</a></h1></div>
                            </div>
                            <div class="bottom-div">
                                <table>
                                    <tr><td class="table-key">Puni naziv tima:</td><td class="table-value">' . $result["team_full_name"] . '</td></tr>
                                    <tr><td class="table-key">Godina osnivanja:</td><td class="table-value">' . $result["team_year_founded"] . '</td></tr>
                                    <tr><td class="table-key">Stadion:</td><td class="table-value">' . $result["team_stadium"] . '</td></tr>
                                    <tr><td class="table-key">Predsjednik:</td><td class="table-value">' . $result["team_president"] . '</td></tr>
                                    <tr><td class="table-key">Menadžer:</td><td class="table-value">' . $result["team_manager"] . '</td></tr>
                                    <tr><td class="table-key">Liga:</td><td class="table-value">' . $result["team_league"] . '</td></tr>
                                    <tr><td class="table-key">Website:</td><td class="table-value"><a href="' . $result["team_website"] . '">' . $result["team_website"] . '</a></td></tr>
                                    <tr><td class="table-key">Igrači:</td><td class="table-value"><a href="./roster.php?team=' . $result["id_team"] . '">detaljnije</a></td></tr>
                                </table>
                            </div>
                        </article>
                        ';
                    $result = $query->fetch();
                } while($result);
                
            } else {
                
                $queryString = 'SELECT * FROM team WHERE id_team = :teamID';

                $query = $dbHandler->prepare($queryString);
                $query->bindParam(':teamID', $arg);

                $query->execute();
                
                echo '<a href="./roster.php">Natrag.</a>';
                
                if($query->rowCount() > 0) {
                    
                    $result = $query->fetch();
                    
                    echo '
                        <article>
                            <div class="top-div">
                                <div class="team-logo"><a href="public_html/design_resources/img/teams/' . $result["team_logo"] . '.png"><img src="public_html/design_resources/img/teams/' . $result["team_logo"] . '.png"/></a></div>
                                <div class="team-name"><h1>' . $result["team_name"] . '</a></h1></div>
                            </div>
                            <div class="bottom-div">
                                <table>
                                    <tr><td class="table-key">Puni naziv tima:</td><td class="table-value">' . $result["team_full_name"] . '</td></tr>
                                    <tr><td class="table-key">Godina osnivanja:</td><td class="table-value">' . $result["team_year_founded"] . '</td></tr>
                                    <tr><td class="table-key">Stadion:</td><td class="table-value">' . $result["team_stadium"] . '</td></tr>
                                    <tr><td class="table-key">Predsjednik:</td><td class="table-value">' . $result["team_president"] . '</td></tr>
                                    <tr><td class="table-key">Menadžer:</td><td class="table-value">' . $result["team_manager"] . '</td></tr>
                                    <tr><td class="table-key">Liga:</td><td class="table-value">' . $result["team_league"] . '</td></tr>
                                    <tr><td class="table-key">Website:</td><td class="table-value"><a href="' . $result["team_website"] . '">' . $result["team_website"] . '</a></td></tr>
                                </table>
                            </div>
                        </article>
                        ';
                    
                } else {
                    echo '
                        Tim ne postoji.
                        ';
                }

            }

            unset($dbHandler); 
        }
}

function showNewTeamInputForm(){
    echo '
        
        ';
}

function getPlayersFromDB() {

    // Povezivanje na bazu da se dohvate igrači.
    $dbHandler = dbConnect ('localhost', 'futbol', 'root', '');

    if($dbHandler) {

        $queryString = 'SELECT * FROM player JOIN team ON team.id_team = player.id_team';

        $query = $dbHandler->prepare($queryString);

        $query->execute();

        $result = $query->fetch();

        // Ispis igrača i njihovih timova.
        echo '<table><tr><td style="border: 3px solid black; font-weight: bold;">Player Name</td><td style="border: 3px solid black; font-weight: bold;">Date of Birth</td><td style="border: 3px solid black; font-weight: bold;">Place of Birth</td><td style="border: 3px solid black; font-weight: bold;">Height</td><td style="border: 3px solid black; font-weight: bold;">Playing Position</td><td style="border: 3px solid black; font-weight: bold;">Image</td><td style="border: 3px solid black; font-weight: bold;">Team Name</td><td style="border: 3px solid black; font-weight: bold;">Team Logo</td><td style="border: 3px solid black; font-weight: bold;">Stadium</td><td style="border: 3px solid black; font-weight: bold;">Manager</td><td style="border: 3px solid black; font-weight: bold;">League</td></tr>';
        do {
            $pos = strpos($result["player_image"], 'http');
            if($pos === false) {
                echo '<tr><td>' . $result["player_name"] . '</td><td>' . array_reverse(explode('-', $result["player_birthdate"]))[0] . '.' . array_reverse(explode('-', $result["player_birthdate"]))[1] . '.' . array_reverse(explode('-', $result["player_birthdate"]))[2] . '.</td><td>' . $result["player_birthplace"] .'</td><td>' . sprintf("%.2f", $result["player_height"]) . ' m</td><td>' . $result["player_playing_pos"] . '</td><td style="text-align: center;"><a href="public_html/design_resources/img/players/' . $result["player_image"] . '.jpg"><img src="public_html/design_resources/img/players/' . $result["player_image"] . '.jpg" style="height: 175px;" /></a></td><td>' . $result["team_name"] . '</td><td style="text-align: center;"><a href="public_html/design_resources/img/teams/' . $result["team_logo"] . '.png"><img src="public_html/design_resources/img/teams/' . $result["team_logo"] . '.png" style="height: 175px;" /></a></td><td>' . $result["team_stadium"] . '</td><td>' . $result["team_manager"] . '</td><td>' . $result["team_league"] . '</td><td></tr>';
            } else {
                echo '<tr><td>' . $result["player_name"] . '</td><td>' . array_reverse(explode('-', $result["player_birthdate"]))[0] . '.' . array_reverse(explode('-', $result["player_birthdate"]))[1] . '.' . array_reverse(explode('-', $result["player_birthdate"]))[2] . '.</td><td>' . $result["player_birthplace"] .'</td><td>' . sprintf("%.2f", $result["player_height"]) . ' m</td><td>' . $result["player_playing_pos"] . '</td><td style="text-align: center;"><a href="' . $result["player_image"] . '"><img src="' . $result["player_image"] . '" style="height: 175px;" /></a></td><td>' . $result["team_name"] . '</td><td style="text-align: center;"><a href="public_html/design_resources/img/teams/' . $result["team_logo"] . '.png"><img src="public_html/design_resources/img/teams/' . $result["team_logo"] . '.png" style="height: 175px;" /></a></td><td>' . $result["team_stadium"] . '</td><td>' . $result["team_manager"] . '</td><td>' . $result["team_league"] . '</td><td></tr>';
            }
            $result = $query->fetch();
        } while($result);
        
        unset($dbHandler);
    }
}

function showPlayerInputForm($playerNumber, $playerPos) {
    echo '
            <div>Naziv igrača:
                <input type="text" name="igrac' . $playerNumber . '" maxlength="64" required ;" /> <span></span></div>
                <div>Pozicija:
                <select name="igracPoz' . $playerNumber . '">
                    <option value="napad"></option>
                    <option value="napad">Napadač</option>
                    <option value="obrana">Branič</option>
                    <option value="srednji">Vezni</option>
                    <option value="golcovjek">Vratar</option>
                </select>
            </div>
    ';
}