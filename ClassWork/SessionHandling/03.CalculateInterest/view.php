<?php
/**
 * Created by PhpStorm.
 * User: VanessaShopping
 * Date: 28-Feb-17
 * Time: 9:25 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate Interest</title>
</head>
<body>
<?php if (isset($compoundInterest, $currency)): ; ?>
    <?= "{$currency} {$compoundInterest}" ?>
<?php endif; ?>
<hr>
<form action="">
    <div>
        <label for="amount">Enter Amount </label>
        <input type="number" step="1" min="0" name="amount" id="amount" required>
    </div>
    <div>
        <input type="radio" name="currency" id="usd" value="usd" checked>
        <label for="usd">USD</label>
        <input type="radio" name="currency" id="eur" value="eur">
        <label for="eur">EUR</label>
        <input type="radio" name="currency" id="bgn" value="bgn">
        <label for="bgn">BGN</label>
    </div>
    <div>
        <label for="interest">Compound Interest Amount </label>
        <input type="number" step="1" min="0" name="interest" id="interest" required>
    </div>
    <div>
        <select name="duration" id="duration">
            <option value="6">6 Months</option>
            <option value="12">1 Year</option>
            <option value="24">2 Years</option>
            <option value="60">5 Years</option>
        </select>

        <input type="submit" value="Calculate" name="submit">
    </div>
</form>
</body>
</html>
