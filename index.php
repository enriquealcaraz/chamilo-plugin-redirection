<?php
/**
 * @package chamilo.plugin.redireccion
 */

require_once __DIR__.'/config.php';
$redirecciones = Redireccion::get();

echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-condensed'>";

    echo "<tr>";
    echo "<th>Usuario</th>";
    echo "<th>Url</th>";
    echo "<th></th>";
    echo "</tr>";
    
    foreach($redirecciones as $redi) {
        echo "<tr>";
        echo "<td>".$redi["user_id"]."</td>";
        echo "<td>".$redi["url"]."</td>";
        echo "<td><a href='#'>Borrar</a></td>";
        echo "</tr>";
    }

echo "</table>";
echo "</div>";
