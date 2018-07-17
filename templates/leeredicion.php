<?php
    while ($line = fgets($fh)) {
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">';
        echo '<h3>'.$line.'</h3>';
        echo '</div>';
        echo '<div class="panel-body" style="padding:3em;">';
        while(($titulo = fgets($fh))){
            if(strpos($titulo, '$') !== false){
                break;
            }
            $pdf = fgets($fh);
            $autores = fgets($fh);
            $numero = fgets($fh);
            
            echo '<table class="table table-hover">';
            echo '<thead>';
            echo '<a style="font-size: 1.2em;" href="ediciones/'.$url.'/'.$pdf.'" target="_blank">'.$titulo.'</a>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td style="width: 812px"> <span style="font-size: 0.9em;" class="autor">'.$autores.'</span></td>';
            echo '<td class="text-right">'.$numero.'</td>';
            echo '</tr>
            </tbody>
        </table>';
        }
        echo ' </div>
        </div>';
    }
    fclose($fh);
?>