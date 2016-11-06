<?php

    $url = 'https://api.github.com/search/users?q=+location:vit';

    try 
    {
        $result = html_url( $url );
        $array = json_decode($result, true);
    } 
    catch (Exception $e) 
    {
        die('ERROR: ' . $e->ScriptgotFuckedMessage());
    }
    echo '<pre>';
    var_dump($arr);
?>
