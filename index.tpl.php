<?php session_start(); ?>
<!-- 
1.	Excercise: Realize the web site with at least 5 pages with the Front Controller design pattern.
Solution:
Index.php file is loaded in each case.
We load always the same file (index.php=>index.tpl.php). The contents of the other pages are included into the main part of this file.
The menu elements (and other common parts, e.g. $error_site, $welcome) set in a config.inc.php, independently from the other files of the application.



Excercise: Use the HTML5 elements extensively.

Solution: HTML5 elements on this webpage:
<article> e.g.: introduction.tpl.php
<section> e.g.: gallery.tpl.php, welcome.tpl.php
<header> and <footer> and <nav> on index.tpl.php
<video>	on welcome.tpl.php

Excercise: lace a hyperlink on your front page to the selected organization webpage.
Solution: The hyperlink to the selected organization webpage can be found at the footercontent.php. Just click to the logo at the bottom of the site.



-->

<!DOCTYPE html>
<html lang=en>
    <head>        
        <title>MewTopia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mewtopia.css"/>
        <meta charset="utf-8">

        <script type="text/javascript">

            window.onload = function(){
                var send = document.getElementById('send');
                if (send)
                {send.disabled=true;}   
            }
            
            
            //Client side validate on Contact page

            addEvent(document.getElementById('send'), 'submit', check);           
            function check() 
            {
                var itsok = true;
                var focus = null;
                var name = document.getElementById("name");        
                if (name) {                
                    if (name.value.length<5) {
                        itsok = false; name.style.background = '#f99'; focus = name;
                    } else
                        name.style.background = '#9f9'; 
                }        
                var email = document.getElementById("e-mail");
                if (email) {
                    var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    if (!checkPattern.test(email.value)){
                        itsok = false; email.style.background = '#f99'; focus = email;
                    } else
                        email.style.background = '#9f9'; 
                }
                var subject = document.getElementById("subject");
                if (subject) {                
                    if (subject.value.length<5) {
                        itsok = false; subject.style.background = '#f99'; focus = subject;
                    } else
                        subject.style.background = '#9f9'; 
                }
                var message = document.getElementById("message");
                if (message) {                
                    if (message.value.length < 10) {
                        itsok = false; message.style.background = '#f99'; focus = message;
                    } else
                        message.style.background = '#9f9'; 
                }
                if (focus){
                    focus.focus(); 
                }
     
                var send = document.getElementById("send");
                if (send){
                    send.disabled = !itsok;
                }
                return  ;
            }
        </script> 
    </head>

<body>
<!--Menu-->
<header>
    <nav>   
        <div id="menu">
            <ul class="menu">
            <a href="/"><img id="logoup" src="images/logo.png" alt="logo"></a>
            <?php foreach ($pages as $url => $page) { ?>
                <li id="menu" <?=(($page==$find) ? ' class="active"' :'')?>>
                <a href="<?=($url =='/') ? '.' : ('?page=' . $url) ?>">
                <?= $page['text'] ?>
                </a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </nav>
</header>

<!--Content-->   
<div id="content">
    <?php include("submenu/{$find['file']}.tpl.php"); ?>
</div>

<!--Bottom of the page-->
<footer>
    <?php include("footercontent.php"); ?> 
</footer>         
</body>
</html>