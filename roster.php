<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/igra.js';
    $CSSPath = 'public_html/css/subpages/roster.css';
    include 'resources/includes/head_html.php';
    ?>
    
    <body>    
        
        <embed style="display: none;" src="public_html/design_resources/sound/menu/plink01.wav" 
       autostart=false 
       width=0 
       height=0 
       id="mySound" 
       enablejavascript="true" />
                
        <?php
        session_start();
        
        // Sesija lokacija se koristi samo da se zna na kojoj je lokaciji korisnik tako da mení bude osvijetljen.
        $_SESSION['location'] = 'players';
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        require_once 'resources/library/login_library.php';
        require_once 'resources/library/players_library.php';
        
        // Učitavanje nav bara.
        include 'resources/includes/nav_bar.php';
        ?>
        
        <div class="wrapper">
            
            <div class="central-element">
                
                <aside>
                    <div class="logo">
                        <a href="./index.php"><img src="public_html/design_resources/img/logo.png" /></a>
                    </div>
                    <?php include 'resources/includes/aside_bar.php'; ?>
                </aside>
                
                <div class="main-content">
                    
                    <?php
                    
                    (getFromGET("team")) != false ? $team = getFromGET("team") : 1;
                    
                    if(isset($team)) {
                        if(!ctype_digit($team)) {
                            header('Location: ./roster.php');
                        }
                        echo '
                            <div class="page-title">
                                <h1>Timovi</h1>
                            </div>
                            ';
                        getTeamFromDB($team);
                    } else if(!isset($dontShowTeams)) {
                        echo '
                            <div class="page-title">
                                <h1>Timovi</h1>
                            </div>
                            ';
                        getTeamFromDB('all');
                    }
                    
                    ?>
                    
                </div>
                
            </div>
            
            <footer>
                <p>&copy; by Team UMRIteh</p>
            </footer>
        
    </body>
    
</html>