<?php

require './config.php';

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

mysql_select_db(DB_NAME, $link);

$result = mysql_query('SELECT id, title FROM post', $link);

$posts = array();
while ($row = mysql_fetch_assoc($result)) {
    $posts[] = $row;
}

mysql_close($link);
// include the HTML presentation code
require 'templates/list.php';