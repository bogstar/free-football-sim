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
    
    <body>
        
        <?php
        session_start();
        
        // Sesija lokacija se koristi samo da se zna na kojoj je lokaciji korisnik tako da lokacija bude osvijetljena.
        $_SESSION['location'] = 'about';
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        include_once 'resources/library/login_library.php';
        
        // Učitavanje nav bara.
        include_once 'resources/includes/nav_bar.php';
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
                    
                    <h1 class="about">
                        Made by Team UMRiteh.
                    </h1>

                </div>
                
            </div>
            
            <footer>
                <p>&copy; by Team UMRIteh</p>
            </footer>
            
        </div>
        
    </body>
    
</html>