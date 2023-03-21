<?php

//para informar qual é a raiz do sistema e assim linkar imgs e styles : 
    
$BASE_URL = "http://" . $_SERVER['SERVER_NAME']  . dirname($_SERVER['REQUEST_URI'] . '?') . '/'; 