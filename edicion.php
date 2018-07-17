<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edición</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/css/footer.css">
    <link rel="stylesheet" href="styles/css/button.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php 
        echo '<p>'.$_GET["url"].'</p>';
        $url = $_GET["url"];
        $fh = fopen("ediciones/$url/info.txt","r");
        $line = fgets($fh);
    ?>
    
    <?php $option=3; include("templates/navbartop.php"); ?>

    <div class="container" style="margin-top:70px">
    
        <?php include("templates/leeredicion.php");?>
    
        
    </div>

    <div class="btn-group">
        <a href='<?php echo "ediciones/$url/portada.pdf";?>' class="btn-fab main-btn" id="">
          <img src="../styles/img/doc.png" style="width: 5em; height: 5em; " alt="">
        </a>
    </div>

    <div class="footer">
        <div class="container" style="text-align:center;">
            <p class="text-muted">Copyright © 2018. Revista Iberoamericana de Ciencias.<br>
            <a href="mailto:editor@reibci.org">editor@reibci.org</a> | Privacy Policy</p>
        </div>
    </div>
</body>
</html>