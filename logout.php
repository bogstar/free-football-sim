<?php
session_start();

// Pozivanjem ove stranice, odlogirava se korisnika tako da se unsetaju username i rights.
unset($_SESSION['username']);
unset($_SESSION['rights']);

// Provjerava se odakle se ova stranica pozvala.
$referer = filter_input(INPUT_SERVER, 'HTTP_REFERER');

// Ako je pronađen izvor, vraća se na tu stranicu.
if($referer) {
    header('Location: ' . $referer); 
} else {
    header('Location: ./'); 
}