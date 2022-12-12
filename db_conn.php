<?php

function setup( array $login_data = ["localhost", "root", "mysql", "pet-project"]) //$host, $user, $password, $db_name)
{
    return mysqli_connect( ...$login_data );// $host, $user, $password, $db_name);
}

?>