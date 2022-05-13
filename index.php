<?php
include('config.inc.php');
    
    $find = current ($welcome);

        if (isset($_GET['page'])) {
            if (isset ($pages[$_GET['page']]) && file_exists("submenu/{$pages[$_GET['page']]['file']}.tpl.php"))
        {
            $find = $pages[$_GET['page']];
        } else {
                    $find = $error_site;
                    header("HTTP/1.0 404 Not Found");
                }
        }
        $images = array();
        $reader = opendir($FOLDER);
        while (($file = readdir($reader)) !== false) {
                if (is_file($FOLDER.$file)) { 
            $end = strtolower(substr($file, strlen($file)-4));

            if (in_array($end, $TYPES)) { 
                $images[$file] = filemtime($FOLDER.$file);
                }
                }
            }
                closedir($reader);
         


include('index.tpl.php');
?>