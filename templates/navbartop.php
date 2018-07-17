<link rel="stylesheet" href="styles/css/navbar.css">
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-header">
      <a class="navbar-brand" style="font-family:'Times New Roman', Times, serif;" href="/">R e I b C i </a>
    </div>
      <ul class="nav navbar-nav navbar-center">

        <!-- <li>
          <a href="index.html">Revista Iberoamericana de Ciencias ISSN 2334-2501</a>
        </li> -->

        <li>
          <a href="/">Inicio</a>
        </li>

        <li>
          <a href="#">Avisos</a>
        </li>


        <li <?php if(isset($option) && $option==3) echo 'class="active"';?>>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Ediciones <span class="caret"></span></a>
          <ul class="dropdown-menu multi-level">

            <?php
              $dir = 'ediciones/';
              $directories = scandir($dir);
              rsort($directories);
              $si1 = false;
              foreach($directories as $directory){
                if($directory != '.' && $directory != '..' ){
                  if($si1) echo '<li class="divider"></li>';
                  echo '<li class="dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$directory.'</a>';
                  
                  echo '<ul class="dropdown-menu">';
                  // <li><a href="#">Second level</a></li>
                  $subdirectories = scandir($dir.$directory);
                  $si = false;
                  foreach($subdirectories as $subdirectory){
                    if($subdirectory!='.' && $subdirectory!='..'){
                      if($si) echo '<li class="divider"></li>';
                      echo '<li><a href="edicion.php?url='.$directory.'/'.$subdirectory.'">'.substr($subdirectory,2).'</a></li>';
                      $si = true;
                    }
                  }
                  
                  echo '</ul>';
                  echo '</li>';
                  
                  $si1 = true;
                }
              }
            ?>

          </ul>
        </li>


        <li <?php if(isset($option) && $option==4) echo 'class="active"';?>>
          <a href="contacto.php">Contacto</a>
        </li>


        <li <?php if(isset($option) && $option==5) echo 'class="active"';?> class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Autores
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="indices.php">Índices</a></li>
              <li class="divider"></li>
              <li><a href="instrucciones.php">Instrucciones</a></li>
              <li class="divider"></li>
              <li><a href="tipodearticulos.php">Tipo de artículos</a></li>
            </ul>
        </li>


        <li>
          <a href="#">Libre Acceso</a>
        </li>

        
        <li>
          <a href="#">Búsqueda</a>
        </li>
      </ul>

      <div class="navbar-brand navbar-right" style="color:white;margin-right:1em;" ><?php if(isset($line)) echo $line;?></div>
    </nav>