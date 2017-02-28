<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:22 AM
 */

if (isset($_GET["submit"])) {
    $tags = array_filter(explode(", ", trim($_GET["tags"])));
}
require_once "view.php";