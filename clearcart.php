<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 05/10/17
 * Time: 00:31
 */

require 'articles.php';

foreach ($articles as $id => $article) {
    $cookie_value = $_COOKIE['article_' . $id];
    if (!empty($cookie_value)) {
        setcookie('article_' . $id, 0, time() + 360, null, null, false, true);
    }
}

header('Location: index.php');
