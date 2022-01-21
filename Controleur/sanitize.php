<?php
function sanitizeHTML($query){
    return htmlentities($query, ENT_QUOTES, 'UTF-8');
}
function sanitizeEmail($email){
    $email = 'myname@gmail.com';
    $emailSanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
    return $emailSanitized;
}
##Obsolete avec php 8.... PDO fonctionne
function sanitizeSQL($query)
{
   ## $sanitzed = mysql_escape_string(string $query);
}

