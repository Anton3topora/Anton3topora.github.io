<?php 
    $server='localhost';
    $path='root';
    $password='';
    $project_name='project_1_';
    $link = mysqli_connect($server, $path, $password, $project_name);
    mysqli_set_charset($link, 'utf8');
    
?>