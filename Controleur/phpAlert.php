<?php
function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    require "../Vue/boutonPrecedent_vue.php";
}
