<?php
class Connexion
{
    static public function Connect()
    {
        $dsn  = 'mysql:host=localhost;dbname=elearning-system;charset=utf8';
        $user = 'root';
        $pass = '';

        try {
            $Connexion = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {
            echo 'une erreur est survenue !';
        }
        return $Connexion;
    }
}
