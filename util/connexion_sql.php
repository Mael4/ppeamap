<?php
// Connexion bdd
try
{$bdd = new PDO('mysql:host=localhost;dbname=bdberrue', 'root');}
catch(Exception $e)
{die('Erreur : '.$e->getMessage());}