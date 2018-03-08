<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="Content-type" content="text/html" charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="public_html/css/subpages/nonhome.css" />
        <link rel="icon" href="public_html/design_resources/img/football.ico" />
        <script type="text/javascript">
        </script>
        <title>Free Football Simulator</title>
    </head>
    
    <body>
        
        <?php
        session_start();
        
        // Sesija lokacija se koristi samo da se zna na kojoj je lokaciji korisnik tako da lokacija bude osvijetljena.
        $_SESSION['location'] = 'acc_settings';
        
        // Učitavanje dependencija i librarija.
        require_once 'resources/library/dependencies.php';
        include_once 'resources/library/login_library.php';
        
        // Ukoliko se korisnik nađe na ovoj stranici, a nije logiran u sustav, preusmjeri ga na index.php.
        if(!$_SESSION['username']) { 
            header('Location: index.php');
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
                        <h1>Mijenjanje postavki računa</h1>
                    </div>
                    
                    <article>
                        <h1 class="title">Promjena lozinke</h1>
                        <div class="article-content">
                            <form action="account_settings.php" method="post">
                                <p>Stara lozinka:</p>
                                <p><input type="password" /></p>
                                <p>Nova lozinka:</p>
                                <p><input type="password" /></p>
                                <p>Potvrda nove lozinke:</p>
                                <p><input type="password" /></p>
                                <p><input type="submit" value="Kreni" /></p>
                            </form>
                        </div>
                    </article>

                </div>
                
            </div>
            
        </div>
        
    </body>
    
</html>