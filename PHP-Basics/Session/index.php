<a href="my.php">Link to my.php</a>

<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 10-Mar-17
 * Time: 8:28 PM
 */

// Когато направим заявка към сървъра , заявката се изпълнява и след това тя ще бъде изтрита

session_start();
$_SESSION['username'] = 'VanessaShopping';
$_SESSION['count']++;
echo $_SESSION['count'];

session_destroy();

// По отношение на сигурност и  по отношение на функционалност сесиите биват прехвърляни в БД
// В по големи проекти не ползваме session_start()


// Session HiJacking - чрез JS code можем да откраднем/ копираме бизвитката на някой потребител и да я използваме за да
// се представим за него.