<?php
/**
 * @link: http://www.Awcore.com/dev
 */
 
    $db = @mysql_connect('localhost', 'root', 'root') or die(mysql_error());
    @mysql_select_db('tweets', $db) or die(mysql_error());
 
?>
