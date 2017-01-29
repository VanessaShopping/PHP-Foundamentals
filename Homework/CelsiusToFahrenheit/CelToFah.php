<DOCTYPE html>
    <html>
    <head><title>Converter</title></head>
    <body>

    <?php
    function celToFah(float $celValueFromForm) : float
    {
        return $celValueFromForm * 1.8 + 32;
    }

    function fahToCel(float $fahValueFromForm) : float
    {
        return ($fahValueFromForm - 32) / 1.8;
    }

    if (isset($_GET['celName'])) {
        $celValueFromForm = floatval($_GET['celName']);
        $fahValue = celToFah($celValueFromForm);
        $fahMsg = "$celValueFromForm &deg;C = $fahValue &deg;F";
    }
    if (isset($_GET['fahName'])) {
        $fahValueFromForm = floatval($_GET['fahName']);
        $celValue = fahToCel($fahValueFromForm);
        $celMsg = "$fahValueFromForm &deg;F = $celValue &deg;C";
    }

    ?>

    <form>
        Celsius: <input type="number" name="celName" />
        <input type="submit" value="Convert">

        <?php
        if (isset($fahMsg)) echo $fahMsg
        ?>
    </form>

    <form>
        Fahrenheit: <input type="number" name="fahName" />
        <input type="submit" value="Convert">

        <?=
        $celMsg
        ?>
    </form>


    </body>
    </html>


