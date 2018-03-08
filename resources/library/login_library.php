<?php

require_once './resources/library/dependencies.php';

$usernameSet = false;
$passwordSet = false;

// Spoji se na tablicu korisnika.
$dbHandler = dbConnect('localhost', 'futbol', 'root', '');

// Učitaj user i pass iz posta.
if(getFromPOST('username') != null) {
    $username = getFromPOST('username');
    $usernameSet = true;
}

if(getFromPOST('password') != null) {
    $password = getFromPOST('password');
    $passwordSet = true;
}

// Ako su namješteni, querijaj bazu za tim usernameom i passom.
if($dbHandler && $usernameSet && $passwordSet) {
    
    $queryString = 'SELECT * FROM user WHERE user_username = :username LIMIT 1';
    
    $query = $dbHandler->prepare($queryString);
        
    $preparedDelims = array(
        'username' => $username
    );
            
    $query->execute($preparedDelims);
    
    $result = $query->fetch();
    
    // Ako je validacija uspješna, namjesti session username na unešeni username.
    if($result['user_password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['rights'] = $result['user_rights'];
    } else {
        echo 'access denied';
    }
    
    unset($dbHandler);
}