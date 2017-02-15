<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 13-Feb-17
 * Time: 8:54 PM
 */
declare(strict_types=1);


require_once 'Player.php';
require_once 'Battle.php';

?>
    <form>
        Player one name <input type="text" name="player_one_name" /><br/>
        Player two name <input type="text" name="player_two_name" /><br/>
        <input type="submit" name="start" value="Start Battle"/>
    </form>
<?php
if (isset($_GET{'start'})) {
    $player1 = new Player($_GET['player_one_name'], 30);
    $player2 = new Player($_GET['player_two_name'], 30);
    $battle = new Battle($player1, $player2);
    $battle->start();

    if ($battle->getResult() === null) {
        echo "draw battle";
    } else {
        echo "Winner is: " . $battle->getResult()->getName();
    }
}