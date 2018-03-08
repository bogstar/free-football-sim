<?php

require_once './resources/library/dependencies.php';

function getNewsFromDB() {
    
    // Povezivanje na bazu da se dohvate članci News-a.
    $dbHandler = dbConnect ('localhost', 'futbol', 'root', '');

    if($dbHandler) {

        $queryString = 'SELECT * FROM news';

        $query = $dbHandler->prepare($queryString);

        $query->execute();
        
        $result = $query->fetch();

        // Ispisivanje članaka.
        do {
            echo '<article><h1 class="title">' . $result['article_title'] . '</h1>';
            echo '<div class="article-content"><p>' . $result['article_content'] . '</p></div>';
            echo '<footer>' . $result['article_author'] . '</footer></article>';
            $result = $query->fetch();
        } while($result);

        unset($dbHandler);
    }
}
