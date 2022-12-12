<?php
require_once('./db_conn.php');

if (!isset($_COOKIE['auth_token'])) {
    echo "Login please";
    //require_once( not_authentificated.html )
}

// if (isset(token)) { if token is correct  ... }
?>