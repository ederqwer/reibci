
<?php
    $favisos = fopen("avisos.txt","r");
    $si = true;
    while($line = fgets($favisos)){
        $si=false;
        echo '<div class="panel panel-default">';
        echo '<div style="text-align:center;" class="panel-heading">'.$line.'</div>';
        $line = fgets($favisos);
        echo '<div style="text-align:justify;" class="panel-body">'.$line.'</div>';
        echo '</div>';
    }
    if($si){
        echo '<h1 style="text-align:center; margin-bottom:1em;">No hay avisos.</h1>';
    }
?>