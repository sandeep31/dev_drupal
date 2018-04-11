<?php

echo GetMAC();

function GetMAC(){
    ob_start();
    system("ifconfig -a | grep -Po 'HWaddr \K.*$'");
    $Content = ob_get_contents();
    ob_clean();
    return substr($Content, strpos($Content,'\\')-20, 17);
}
