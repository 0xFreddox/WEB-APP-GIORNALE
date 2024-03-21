<?php
    function check_user_logged_in(){
        if(isset($_SESSION['Id_utente']) > 0 ){
            return true;
        }
        return false;
    }
?>