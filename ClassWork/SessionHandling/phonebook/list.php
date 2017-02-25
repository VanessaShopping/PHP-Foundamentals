<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 25-Feb-17
 * Time: 2:10 PM
 */
session_start();
?>

<table border="1" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Group</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['user'] as $user): ?>
        <tr>
            <td><?= $user['name']; ?></td>
            <td><?= $user['phone']; ?></td>
            <td><?= $_SESSION['group'][$user['group']]; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
