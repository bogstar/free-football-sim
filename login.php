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
        
        // Sesija lokacija se koristi samo da se zna na kojoj je lokaciji korisnik tako da meni bude osvijetljen.
        $_SESSION['location'] = 'login';
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        require_once 'resources/library/login_library.php';
        
        $referer = getReferer();
        /* Ukoliko korisnik uđe na ovu stranicu, a ulogiran je, provjeri odakle je referer, te ga tamo vrati.
         * Ukoliko nema referera, provjerava vraća ga na index.php.
         * Ukoliko korisnik nije ulogiran, dopušta pristup.
         */
        if($referer && isset($_SESSION['username'])) {
            header('Location: ' . $referer); 
        } else if (isset($_SESSION['username'])) {
            header('Location: ./'); 
        }
        
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
                    
                    <div class="page-title">
                        <h1>Login</h1>
                    </div>
                    
                    <div class="login-widget">
                        <form action="login.php" method="post">
                            <h2>Login</h2>
                            <p>Username:</p>
                            <p><input type="text" name="username" placeholder="Username" value="<?php if(filter_input(INPUT_POST, 'username') != null) { echo filter_input(INPUT_POST, 'username'); } ?>"/></p>
                            <p>Password:</p>
                            <p><input type="password" name="password" placeholder="Password" value="<?php if(filter_input(INPUT_POST, 'username') != null) { echo filter_input(INPUT_POST, 'password'); } ?>" /></p>
                            <p><input type="submit" value="Log in"/></p>
                        </form>
                    </div>

                </div>
                
            </div>
            
        </div>
        
    </body>
    
</html>
