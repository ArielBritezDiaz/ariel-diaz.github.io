<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Fuente del Footer-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <!---->
    
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Imagenes/logo.png">
    <title>Piedra, papel o tijera</title>
</head>
<body>
<?php

if(!isset($_GET['opcion'])) {
    $bot_cont=0;
    $user=0;
} else {
    $bot_cont = $_GET['bot_cont'];
    $user = $_GET['user'];
}

    if(isset($_GET['enviar'])){
        if(isset($_GET['opcion'])){
            $opcion = $_GET['opcion'];
            $bot = rand(1,3);
    
            if($bot == 1){
                echo '<p class="texto">La computadora ha seleccionado piedra </p>';
    
                if ($opcion == "piedra"){
                    echo '<img src="Imagenes/empate.png" class="foto">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Hay empate<span class="exclamacion">!</span></p>';
                } else if ($opcion == "papel"){
                    echo '<img src="Imagenes/primero.png" class="foto_primero">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Ganaste<span class="exclamacion">!</span></p>';
                    $user++;
                } else if ($opcion == "tijera"){
                    echo '<img src="Imagenes/segundo.png" class="foto_segundo">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Perdiste, gana la computadora<span class="exclamacion">!</span></p>';
                    $bot_cont++; 
                }
            }
    
            if($bot == 2){
                echo '<p class="texto">La computadora ha seleccionado papel </p>';
    
                if ($opcion == "piedra"){
                    echo '<img src="Imagenes/segundo.png" class="foto_segundo">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Perdiste, gana la computadora<span class="exclamacion">!</span></p>';
                    $bot_cont++;
                } else if ($opcion == "papel"){
                    echo '<img src="Imagenes/empate.png" class="foto">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Hay empate<span class="exclamacion">!</span></p>';
                } else if ($opcion == "tijera"){
                    echo '<img src="Imagenes/primero.png" class="foto_primero">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Ganaste<span class="exclamacion">!</span></p>';
                    $user++;
                }
            }
        
            if($bot == 3){
                echo '<p class="texto">La computadora ha seleccionado tijera </p>';
    
                if ($opcion == "piedra"){
                    echo '<img src="Imagenes/primero.png" class="foto_primero">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Ganaste<span class="exclamacion">!</span></p>';
                    $user++;   
                } else if ($opcion == "papel"){
                    echo '<img src="Imagenes/segundo.png" class="foto_segundo">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Perdiste, gana la computadora<span class="exclamacion">!</span></p>';
                    $bot_cont++;  
                } else if ($opcion == "tijera"){
                    echo '<img src="Imagenes/empate.png" class="foto">';
                    echo '<p class="texto_ganador"><span class="exclamacion">¡</span>Hay empate<span class="exclamacion">!</span></p>';
                }
            }
        } else {
            echo '<div class="div_error"><span class="mensaje_error">Por favor, ingrese una opción válida</span><div>';
        }
    }
?>
    <form action="" method="get">
    
        <legend><h1><span class="cyan">S</span><span class="pink">eleccione piedra, papel o tijera</span></h1></legend>
    
        <input type="radio" name="opcion" value="piedra" style="visibility:hidden" id="1">
        <label class="opcion" for="1"><img src="Imagenes/piedra.png" title="Piedra" width="200px" height=auto class="manos"></label>
        
        <input type="radio" name="opcion" value="papel" style="visibility:hidden" id="2">
        <label class="opcion" for="2"><img src="Imagenes/papel.png" title="Papel" width="200px" height=auto class="manos"></label>
        
        <input type="radio" name="opcion" value="tijera" style="visibility:hidden" id="3">
        <label class="opcion" for="3"><img src="Imagenes/tijera.png" title="Tijera" width="200px" height=auto class="manos"></label>

        <input type="hidden" name="bot_cont" value="<?php echo $bot_cont; ?>">
        <input type="hidden" name="user" value="<?php echo $user; ?>">

        <input type="submit" value="Jugar" name="enviar" class="envio">

    </form>
    
<?php
    echo '<div class="user">';
    echo 'Puntaje del usuario: '.$user;
    echo '</div>';
    echo '<div class="bot" >';
    echo 'Puntaje de la computadora: '.$bot_cont;
    echo '</div>';
?>

<footer>
    <cite>© 2022 Díaz Ariel-Mariano Aguiar. Todos los derechos reservados 2022</cite>
</footer>

</body> 
</html>