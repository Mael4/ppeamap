<?php
// Connexion bdd
try
{$bdd = new PDO('mysql:host=localhost;dbname=bdberrue', 'bdberrue', 'bdberrue');}
catch(Exception $e)
{die('Erreur : '.$e->getMessage());}