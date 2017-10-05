<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 04/10/17
 * Time: 22:18
 */

// if the user try to add an article
if (!empty($_POST['add_to_cart'])) {
    // Clean the value (remove white spaces before and after the string)
    $cleanedValue = trim($_POST['add_to_cart']);
    // The value must be a numeric one
    if (!empty($cleanedValue) && is_numeric(($cleanedValue))) {
        // Check if the cookie exist and if its value is numeric
        if (!empty($_COOKIE['article_' . $cleanedValue])
            && is_numeric($_COOKIE['article_' . $cleanedValue])) {
            // add one article to the counter
            $value = intval($_COOKIE['article_' . $cleanedValue]) + 1;
            setcookie('article_' . $cleanedValue, $value, time() + 360, null, null, false, true);
        } else {
            // set the cookie value to default value (1)
            setcookie('article_' . $cleanedValue, 1, time() + 360, null, null, false, true);
        }
    }
}

header('Location: index.php');
exit;
