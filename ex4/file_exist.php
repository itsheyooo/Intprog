<?php

    $fileName = "Myweb";
    $filePath = "text.txt";
    $myFile = $filePath.$fileName;

    if(file_exists( $fileName))
        {
        echo "$fileName exists.";
        }
    else
        {
        echo "$fileName does not exist.";
        }
    ?>