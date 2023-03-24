<?php

    require_once '../utils/Db.php';

    if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["login"]) && isset($_POST["haslo"])){
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
        if(strlen($login) > 50 || strlen($haslo) > 20 || strlen($imie) > 20 || strlen($nazwisko) > 20 ){
            header("Location:../pages/register.php?mess='Niepoprawane dane'");
        }else{
            if(Db::checkUser($login)){
                Db::addUser($login,$haslo,$imie,$nazwisko);
                header("Location:../pages/register.php?mess='Użytkownik dodany poprawnie'");
            }else{
                header("Location:../pages/register.php?mess='Uzytkownik z takim loginem już istnieje'");
            }
        }
    }else{
        header("Location:../pages/register.php?mess='Nie wszystkie dane zostały wprowadzone'");
    }
?>