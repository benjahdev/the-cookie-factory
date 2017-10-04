<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 04/10/17
 * Time: 20:30
 */

/**
 * If username is present or not ($condition) redirect to the $location.php
 * @param string $location
 * @param bool $condition
 */
function redirectToCondition(string $location, bool $condition)
{
    if ($condition === empty($_SESSION['username'])) {
        header('Location: ' . $location . '.php');
        exit;
    }
}
