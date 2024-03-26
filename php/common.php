<?php
    function check_user_logged_in(){
        if(isset($_SESSION['Id_utente']) > 0 )return true;
        return false;
    }

    function check_user_is_admin(){
        if(isset($_SESSION['isAdmin']) == 1)return true;
        return false;
    }
?>