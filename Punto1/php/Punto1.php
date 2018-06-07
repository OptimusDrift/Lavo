<?php
    switch ($_GET['pais']) {
        echo"asd";
        case 'arg':
            echo "<select> <option value=\"cr\">Comodoro Rivadavia </option><option value\"bsas\">Buenos Aires</option><option value\"tw\">Trelew</option></select>";
            break;
        case 'fr':
        echo "<select><option value\"ps\">Paris</option><option value\"ly\">Lyon</option><option value\"mr\">Marcella</option></select>";
            break;
        case 'ch':
        echo "<select><option value\"sg\">Santiago</option><option value\"pm\">Puerto Montt</option><option value\"os\">Osorno</option></select>";
            break;
        default:
        echo "error";
            break;
    }
?>