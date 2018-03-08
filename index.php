<!DOCTYPE html>

<html>
    
    <?php
    // Head include.
    $pageTitle = 'Free Football Simulator';
    $iconPath = 'public_html/design_resources/img/football.ico';
    $JSPath = 'public_html/js/igra.js';
    $CSSPath = 'public_html/css/subpages/home.css';
    include './resources/includes/head_html.php';
    ?>
    
    <body>
        
        <?php
        session_start();
        
        // Sesija lokacija se koristi samo da se zna na kojoj je lokaciji korisnik tako da meni bude osvijetljen.
        $_SESSION['location'] = 'news';
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        require_once 'resources/library/login_library.php';
        require_once 'resources/library/news_library.php';
        
        // Učitavanje nav bara.
        include 'resources/includes/nav_bar.php';
        ?>
        
        <div class="wrapper">
            
            <header>
                
                <div class="logo">
                    <img src="public_html/design_resources/img/logo.png" />
                </div>
                
            </header>
            
            <div class="central-element">
                
                <aside>
                    <?php include 'resources/includes/aside_bar.php'; ?>
                </aside>
                
                <div class="main-content">
                    
                    <div class="page-title">
                        <h1>News</h1>
                    </div>
                    
                    <?php
                    // Dohvaćanje news članaka.
                    getNewsFromDB();
                    ?>
                    
                </div>
                
            </div>
            
            <footer>
                <p>&copy; by Team UMRIteh</p>
            </footer>
            
        </div>
        
    </body>
    
</html>
