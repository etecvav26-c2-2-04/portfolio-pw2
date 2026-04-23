<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST['ano'];

    if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0)) {
        echo "O ano $ano <b>é bissexto</b>.";
    } else {
        echo "O ano $ano <b>não é bissexto</b>.";
    }
}
?>