<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 31-Jan-17
 * Time: 4:51 PM
 */

$nums = array_map('trim', explode(' ', fgets(STDIN)));
$com = array_map('trim', explode(' ', fgets(STDIN)));
while ($com[0] != "print") {
    if ($com[0] == "addMany") {
        $index = $com[1];
        $count = count($com);
        $counter = 0;
        for ($i = 2; $i < $count; $i++) {
            array_splice($nums, $index + $counter, 0, $com[$i]);
            $counter++;
        }
    } else if ($com[0] == "add") {
        $index = $com[1];
        $num = $com[2];
        array_splice($nums, $index, 0, $num);
    } else if ($com[0] == "remove") {
        $index = $com[1];
        array_splice($nums, $index, 1);
    } else if ($com[0] == "shift") {
        $index = $com[1];
        $count = count($nums);
        for ($i = 0; $i < $index; $i++) {
            $last = $nums[0];
            for ($j = 0; $j < $count - 1; $j++) {
                $nums[$j] = $nums[$j + 1];
            }
            $nums[$count - 1] = $last;
        }
    } else if ($com[0] == "sumPairs") {
        $count = count($nums);
        if ($count == 1) {
            continue;
        } else if ($count == 2) {
            $nums[0] += $nums[1];
            array_splice($nums, 1, 1);
        } else if ($count > 2) {
            if ($count % 2 == 0) {
                if (count($nums) == 2) {
                    continue;
                }
                for ($i = 0; $i < ($count / 2); $i++) {
                    if ((int)($count % 2) != 0 && $i == $count / 2) {
                        break;
                    }
                    $nums[$i] = $nums[$i] + $nums[$i + 1];
                    array_splice($nums, ($i + 1), 1);
                }
            } else {
                for ($i = 0; $i < ($count / 2 - 1); $i++) {
                    if (count($nums) == 1) {
                        break;
                    }
                    if ((int)($count % 2) != 0 && $i == $count / 2) {
                        break;
                    }
                    $nums[$i] = $nums[$i] + $nums[$i + 1];
                    array_splice($nums, ($i + 1), 1);
                }
            }
        }
    } else if ($com[0] == "contains") {
        $element = $com[1];
        if (in_array($element, $nums)) {
            echo 0 . "\n";
        } else {
            echo -1 . "\n";
        }
    }
    $com = array_map('trim', explode(' ', fgets(STDIN)));
}
echo '[';
echo implode(', ', $nums);
echo ']';