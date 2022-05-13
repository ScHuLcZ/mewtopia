<?php

$welcome = array('welcome' => array ('file' => 'welcome'));

$pages = array(
    'imgupload'       => array('file' => 'imgupload', 'text' => 'Upload a Photo'),
	'contact'         => array('file' => 'contact', 'text' => 'Contact'),
    'gallery'         => array('file' => 'gallery','text' =>'Gallery'),
    'helpus'          => array('file' => 'helpus','text' =>'Help Us'),
	'introduction'    => array('file' => 'introduction', 'text' => 'Introduction')

);

$error_site = array ('file' => '404', 'text' => 'Page not found');


$FOLDER = './images/gallery/';
$TYPES = array ('.jpg', '.png');
$VIDTYPES = array ('.wmv', '.avi');
$MEDIATYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "m/d/Y H:i";
$MAXSIZE = 500*1024;

?>