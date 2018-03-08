<?php

// Funkcija za spajanje s bazom.
function dbConnect($host, $dbname, $username, $password) {
    
    // Varijabla $dsn namještena da se baza spaja na $host, $dbname i koristi UTF-8.
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
    
    // Varijabla $opt namještena da errormode daje SQL exception, i da fetcha asocijativna polja.
    $opt = array(
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC
    );
    
    // Varijabla $dbHandler postaje handler povezane baze, a ako ne radi, vraća SQL error.
    try {
        $dbHandler = new PDO($dsn, $username, $password, $opt);
        return $dbHandler;
    } catch (PDOException $e) {
        unset($e);
        print('Nemoguće pronaći bazu.');
    }
    
    return NULL;
}

// Funkcija za dohvaćanje referera.
function getReferer() {
    return filter_input(INPUT_SERVER, 'HTTP_REFERER');
}

// Funckija za dohvaćanje iz posta.
function getFromPOST($element) {
    if(filter_input(INPUT_POST, $element) != null) {
        return filter_input(INPUT_POST, $element);
    }
    return null;
}

// Funckija za dohvaćanje iz geta.
function getFromGET($element) {
    if(filter_input(INPUT_GET, $element) != null) {
        return filter_input(INPUT_GET, $element);
    }
    return null;
}

// Funkcija za dohvaćanje linka slike tima.
function getTeamLogoLink($element) {
    
    $file = 'public_html/design_resources/img/teams/' . $element . '.png';
    
    if(file_exists($file)) {
        return $file;
    } else {
        return 'public_html/design_resources/img/nopic.png';
    }
}