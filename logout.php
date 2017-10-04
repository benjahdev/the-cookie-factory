<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 04/10/17
 * Time: 14:55
 */

// Always call session_start before to use it
session_start();
// Permit to clear user session
session_destroy();

// Redirect to the login page
header('Location: login.php');
