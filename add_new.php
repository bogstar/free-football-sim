<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = '';
    $CSSPath = 'public_html/css/subpages/addnew.css';
    include 'resources/includes/head_html.php';
    ?>
    
    <body>    
                
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
                </aside>
                
                <div class="main-content">
                    
                    <div class="page-title">
                        <h1>Timovi</h1>
                    </div>
                    
                    <?php                   
                    
                    //showNewTeamInputForm();
                    
                    $teamName["error"] = '';
                    $teamFullName["error"] = '';
                    $teamName["value"] = '';
                    $teamFullName["value"] = '';
                    
                    if(isset($_POST["teamName"]) && $_POST["teamName"] == '') {
                        $teamName["error"] = 'Polje ne smije biti prazno.';
                    } else {
                        $teamName["value"] = getFromPOST("teamName");
                    }
                    
                    if(isset($_POST["teamFullName"]) && $_POST["teamFullName"] == '') {
                        $teamFullName["error"] = 'Polje ne smije biti prazno.';
                    } else {
                        $teamFullName["value"] = getFromPOST("teamFullName");
                    }
                    
                    ?>
                    <article>
                        <form action="./add_new.php" method="POST">
                            <div>Naziv tima:
                            <input type="text" name="teamName" maxlength="64" value="<?php echo $teamName["value"] ?>" /> <span><?php echo $teamName["error"] ?></span></div>
                            <div>Puni naziv tima:
                            <input type="text" name="teamFullName" maxlength="128" value="<?php echo $teamFullName["value"] ?>" /> <span><?php echo $teamFullName["error"] ?></span></div>
                            <div>Godina osnivanja:
                            <input type="text" name="teamYear" maxlength="4" /> <span>ERROR</span></div>
                            <div>Stadion:
                            <input type="text" name="teamStadium" maxlength="64" /> <span>ERROR</span></div>
                            <div>Predsjednik:
                            <input type="text" name="teamPresident" maxlength="64" /> <span>ERROR</span></div>
                            <div>Menadžer:
                            <input type="text" name="teamManager" maxlength="64" /> <span>ERROR</span></div>
                            <div>Liga:
                            <input type="text" name="teamLeague" maxlength="64" /> <span>ERROR</span></div>
                            <div>Website:
                            <input type="text" name="teamWebsite" maxlength="128" /> <span>ERROR</span></div>
                            <div>Logo:
                            <input type="file" name="teamLogo" accept="image/*" /> <span>ERROR</span></div>
                            <div><input type="submit"></div>
                        </form>
                    </article>
                    <?php
                    
                    ?>
                    
                </div>
                
            </div>
            
            <footer>
                <p>&copy; by Team UMRIteh</p>
            </footer>
        
    </body>
    
</html>