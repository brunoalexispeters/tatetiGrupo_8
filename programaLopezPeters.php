<?php
include_once("tateti.php");
 
/*
La librería tateti posee la definición de constantes y funciones necesarias
para jugar al tateti.
Puede ser utilizada por cualquier programador para incluir en sus programas.
*/
 
/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/
 
// Luis Lopez**  Legajo FAI 3027 - mail: lucho38812@gmail.com - usuario github: lucholopez02
//Bruno Peters** Legajo FAI 3600 - mail: brunoalexis95@gmail.com - usuario github: brunoalexispeters


 
/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
/** 
*FUNCION 1
* inicializa una estructura de datos con ejemplos de juegos y que retorne la colección de juegos
* @return array $juegosTotal
*/
 
function cargarJuegos (){
    $coleccionJuegos[0] = ["jugadorCruz" => "JUAN", "jugadorCirculo" => "PEPE", "puntosCruz" => 1, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz"=> "JUAN" , "jugadorCirculo" => "LUCHO", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[2] = ["jugadorCruz"=> "LUCHO" , "jugadorCirculo" => "BRUNO", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[3] = ["jugadorCruz"=> "LUCHO" , "jugadorCirculo" => "JUAN", "puntosCruz"=> 14, "puntosCirculo" => 5];
    $coleccionJuegos[4] = ["jugadorCruz"=> "BRUNO" , "jugadorCirculo" => "JUAN", "puntosCruz"=> 0, "puntosCirculo" => 5];
    $coleccionJuegos[5] = ["jugadorCruz"=> "JUAN" , "jugadorCirculo" => "PEDRO", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[6] = ["jugadorCruz"=> "PEDRO" , "jugadorCirculo" => "JUAN", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[7] = ["jugadorCruz"=> "LUCHO" , "jugadorCirculo" => "MIGUEL", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[8] = ["jugadorCruz"=> "LUCHO" , "jugadorCirculo" => "JUAN", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[9] = ["jugadorCruz"=> "PEDRO" , "jugadorCirculo" => "BRUNO", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[10] = ["jugadorCruz"=> "MIGUEL" , "jugadorCirculo" => "LUCHO", "puntosCruz"=> 0, "puntosCirculo" => 5];
    $coleccionJuegos[11] = ["jugadorCruz"=> "JUAN" , "jugadorCirculo" => "MIGUEL", "puntosCruz"=> 1, "puntosCirculo" => 1];

    $coleccionJuegos = [];

$jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
$jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
$jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
$jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
$jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
$jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
$jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
$jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

array_push($coleccionJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);

        return $coleccionJuegos;
}
 
/**
* FUNCION N° 2
* menu de opciones que repite mientras la opcion no sea salir, y retorna la opcion 
* @return int $opcion
*/
function seleccionarOpcion(){
    $opcion = 0;
    echo"Elija una opcion valida: \n";
    while($opcion != 7){
        echo"1) Jugar al tateti \n";
        echo"2) Mostrar un juego \n";
        echo"3) Mostrar el primer juego ganador \n";
   	    echo"4) Mostrar porcentajes de juegos ganados \n";
   	    echo"5) Mostrar resumen de jugador \n";
   	    echo"6) Mostrar listado de juego ordenado por jugador O \n";
        echo"7) Salir \n"; 
          //se invoca a la funcion  solicitarNumeroEntre  de tateti que cumple con esta tarea
   	    $opcion = solicitarNumeroEntre(1,7);
	    if($opcion!= 7){
            break;
        }      
    }
    return $opcion;
}
 
 /**
 * FUNCION N°4
 * Mostrar datos de un juego dado con formato
 * @param array $juegosTotal
 * @param int $num
 */
function datosDelJuego($juegosTotal,$num){
    //string $nombreX, $nombreO,$resultado 
    //int  $puntosX,$puntosO
    $nombreX = strtoupper($juegosTotal[$num]["jugadorCruz"]);
    $nombreO = strtoupper($juegosTotal[$num]["jugadorCirculo"]);
    $puntosX = $juegosTotal[$num]["puntosCruz"];
    $puntosO = $juegosTotal[$num]["puntosCirculo"];
 
    // empate
    if ($puntosX == $puntosO) {
        $resultado = "(empate)";
    //gana x
    }elseif ($puntosX > $puntosO) {
        $resultado = "(ganó X)";
    //gana o
    }else {
        $resultado = "(ganó O)";
    }
    // imprimo el resultado del juego
    echo "****************************\n";
    echo "Juego TATETI: " . $num . " " . $resultado . "\n";
    echo "Jugador X: " . $nombreX . " obtuvo " . $puntosX . " puntos " . "\n";
    echo "Jugador O: " . $nombreO . " obtuvo " . $puntosO . " puntos " ."\n";
    echo "****************************\n";
}
 
/**
 * 5
 * funcion ppara agregar juego a la coleccion de juegos
 * @param array $juegosTotal
 * @param array $juego
 * @return array
 */
function agregarJuego ($juegosTotal,$juego){
    //int $contador
    $contador=count($juegosTotal);
    $juegosTotal[$contador]=$juego;
    return $juegosTotal;
}
 


/** 
 *funcion 6 
 * Funcion que retorna el indice del primer juego ganado por un jugador 
 * @param array $juegosTotal
 * @param string $nombreJugador
 * @return int
 */
function indicePrimerGanador($juegosTotal, $nombreJugador){
    //int $indice $noGano, $i  
    //boolean $flag
   $i=0;
   $flag = true;
   do{
    if($juegosTotal[$i]["jugadorCruz"] == $nombreJugador){
          if($juegosTotal[$i]["puntosCruz"]>$juegosTotal[$i]["puntosCirculo"]){
              $indice = $i;
              $flag = false;
          }
       }elseif($juegosTotal[$i]["jugadorCirculo"] == $nombreJugador){
           if($juegosTotal[$i]["puntosCruz"]<$juegosTotal[$i]["puntosCirculo"]){
              $indice = $i;
              $flag = false;
          }
       }
       if($i >= count($juegosTotal)-1 ){
          $flag = false;
          $indice = -1; //en caso de que no haya ganado ninguna
       }
       $i++;
      }while($flag);
      
      return $indice;
   }    

 
/**
 * FUNCION 7
 * dada la colección de juegos y el nombre de un jugador Retorna el resumen del jugador
 * @param array $juegosTotal
 * @param string $nombreJugador
 * @return array
 */
function detalleJugador($juegosTotal, $nombreJugador){
    // int $i, $cantidadIndices, $ganados, $perdidos, $empatados, $puntos,$puntosCruz,$puntosCirculo
    //string $jugadorCruz,$jugadorCirculo
    // array $resumenJugador
    $i = 0;
    $cantidadIndices = count($juegosTotal);
    $resumenJugador = [
        "nombre" => $nombreJugador,
        "juegosGanados" => 0,
        "juegosPerdidos" => 0,
        "juegosEmpatados" => 0,
        "puntosAcumulados" => 0];
 
    for ($i=0; $i < $cantidadIndices; $i++) {
        // string $jugadorCruz, $jugadorCirculo
        // int $puntosCruz, $puntosCirculo
        $jugadorCruz = $juegosTotal[$i]["jugadorCruz"];
        $jugadorCirculo = $juegosTotal[$i]["jugadorCirculo"];
        $puntosCruz = $juegosTotal[$i]["puntosCruz"];
        $puntosCirculo = $juegosTotal[$i]["puntosCirculo"];
       
        // verifico si el jugador jugó esta partida
        if ($jugadorCruz === $nombreJugador || $jugadorCirculo === $nombreJugador) {
           
            // empate
            if ($puntosCruz === $puntosCirculo) {
 
                // sumo empatados y acumulo puntos
                $resumenJugador["juegosEmpatados"]++;
                $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCruz;
               
            // verifico si es jugadorCruz
            }elseif ($jugadorCruz === $nombreJugador) {
               
                // verifico si jugadorCruz ganó
                if ($puntosCruz > $puntosCirculo) {
                   
                    // sumo 1 a ganados y acumulo puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCruz;
                   
                // entonces perdió jugadorCruz
                }else{
 
                    // sumo 1 a perdidos
                    $resumenJugador["juegosPerdidos"]++;
 
                }
            // jugador es jugadorCirculo
            }else{
               
                // verifico si jugadorCirculo ganó
                if($puntosCirculo > $puntosCruz){
                   
                    // sumo 1 a ganados y acumulo puntos
                    $resumenJugador["juegosGanados"]++;
                    $resumenJugador["puntosAcumulados"] = $resumenJugador["puntosAcumulados"] + $puntosCirculo;
 
                // entonces perdió jugadorCirculo
                }else {
 
                    // sumo 1 a perdidos
                    $resumenJugador["juegosPerdidos"]++;
 
                }
            }
               
        }
    }
    return $resumenJugador;

}
/**
 * auxiliar
 * FUNCION PORCENTAJE GANADO
 * Este modulo solicita al usuario como dato un simbolo y muestra por pantalla
 * El porcentaje de los juegos ganados de dicho simbolo.
 * @param array $juegosTotal
 */
function mostrarPorcentajeGanados($juegosTotal){
    //int $totalJuegosGanados, $acumJuegosGanadosO, $acumJuegosGanadosX
    //float $porcentaje
    //String $simbolo 

    $simbolo = obtenerSimbolo();

    if($simbolo == "X"){
        $porcentaje = cantGanados($juegosTotal, $simbolo) * 100 / totalGanadas($juegosTotal);
       echo  "El porcentaje de los juegos ganados por ". $simbolo. " es: ". $porcentaje . "% \n";

    }else{
        $porcentaje = cantGanados($juegosTotal, $simbolo) * 100 / totalGanadas($juegosTotal);
        echo "El porcentaje de los juegos ganados por". $simbolo. " es: ". $porcentaje . "% \n";
    } 
}
 
/**
 * FUNCION N°8
 * Funcion que pide y verifica que se ingrese un simbolo X o O
 * y retorna el símbolo elegido. valida los datos ingresados por el usuario
 * @return string
 */

function obtenerSimbolo(){
    //String $simbolo

    echo "Ingrese un simbolo: cruz (X) o Circulo(O): ";
    //convierte a mayusculas lo ingresado por teclado
    $simbolo= strtoupper(trim(fgets(STDIN)));

    //Validación del simbolo 
    while(!($simbolo== "X" || $simbolo== "O") ){
        echo("Simbolo incorrecto, Ingrese cruz (X) o Circulo(O): ");
        $simbolo= strtoupper(trim(fgets(STDIN)));
    }
    return $simbolo;
}
 
/**
 *FUNCION N°9
 * Funcion que dada una colección de juegos retorna la cantidad de juegos ganados (sin empates)
 * @param array $juegosTotal
 * @return int
 */

function totalGanadas($juegosTotal){
    //int $i, totalJuegosGanados
    $totalJuegosGanados = 0;
    for($i=0; $i < count($juegosTotal); $i++){
        if($juegosTotal[$i]["puntosCruz"] != $juegosTotal[$i]["puntosCirculo"]){
            $totalJuegosGanados++;
        }
    }
    return $totalJuegosGanados;
}

/** 
 * 10
 * Modulo que Retorna la cantidad de juegos ganados por un símbolo dado
 * @param array $juegosTotal
 * @param string $simbolo
 * @return int 
 */
function cantGanados($juegosTotal, $simbolo)
{
    // int $juegosGanados, $puntos, $puntosOpuesto
    // string $simbolo, $simboloOpuesto

        //int $ganadosCruz, $ganadosCirculo, $ganados
        $ganadosCruz = 0;
        $ganadosCirculo = 0;
        for($i=0; $i < count($juegosTotal); $i++){
            if($juegosTotal[$i]["puntosCruz"] > $juegosTotal[$i]["puntosCirculo"] ){
                $ganadosCruz++;
            }elseif($juegosTotal[$i]["puntosCruz"] < $juegosTotal[$i]["puntosCirculo"]){
                $ganadosCirculo++;
            }
        }
        if ($simbolo == "X") {
            $ganados = $ganadosCruz;
        }else{
            $ganados = $ganadosCirculo;
        }
    return $ganados;
    }
 
/**
 * FUNCION N°10 - funcion de comparación
 * Compara de a 2 claves para determinar cual es mayor
 * @param array $a
 * @param array $b
 * @return int
 */
function comparar($a, $b) {
    //int $order
    if ($a["jugadorCirculo"] == $b["jugadorCirculo"]) {
        $orden = 0;
    }
    elseif (($a["jugadorCirculo"] < $b["jugadorCirculo"])) {
        $orden =-1;
    } else {
        $orden =1;
    }
    return $orden;
}
 
/**
 * FUNCION N°11
 * Muestra la cantidad de juegos ordenados por nombre jugador O
 * @param array $juegosTotal
 */
function ordenarColeccion($juegosTotal)
{
 
    // usando una función de comparación definida por el usuario.
    uasort($juegosTotal, 'comparar');
    //  muestra información sobre una variable en una forma que es legible por humanos
    print_r($juegosTotal);
}
 
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/
 
/** Declaración de variables: */
//DECLARAR VARIABLES

//array $juegoTotal,$juego,$resumen
//string $separador, $nombre
//int $elegir,$indice,$numero



/** Inicialización de variables: */
$juegosTotal = [];
$juego = [];
 
/** Proceso: */
 
 
//print_r($juego);
//imprimirResultado($juego);
 
 
/**Switch para la botonera o menu selector */
//Inicialización de variables:
//le asigno toda la biblioteca de juego precargada
$juegosTotal = cargarJuegos();
$separador = "\n\n+++++++++++++++++++++++++++++++++\n";
 
do {
 
    echo $separador;
    $elegir = seleccionarOpcion();
   
   //estructura  selecctiva 
    switch ($elegir) {
        case 1:
            // 1) Jugar:
            $juego = jugar();
            $juegosTotal = agregarJuego($juegosTotal, $juego);
            $indice = count($juegosTotal)-1 ;
            datosDelJuego($juegosTotal, $indice);
            // print_r($indice);
            break;
        case 2:
            // 2) Mostrar un juego:
            echo "Ingresar el número de juego entre 0 y ".(count($juegosTotal)-1)."\n";
            $numero = solicitarNumeroEntre(0, count($juegosTotal)-1);
            datosDelJuego($juegosTotal, $numero);
            break;
        case 3:
             //Mostrar el primer Juego Ganador
            echo "ingrese el nombre de un jugador: ";
            $nombreIngresado=strtoupper(trim(fgets(STDIN)));//pide el nombre de un jugador y verifica que exista en la colección
            $indice = indicePrimerGanador($juegosTotal, $nombreIngresado); //almacena indice del primer juego ganado por el jugador dado
            if($indice != -1){
                datosDelJuego($juegosTotal, $indice);
            }else{
                echo"El jugador no ganó ningún juego.\n";
            }
            echo " \n ";         
            break;
        case 4:
            //Mostrar Porcentaje de juegos Ganados
            mostrarPorcentajeGanados($juegosTotal); 
            echo " \n ";
            break;
        case 5:
            // 5) Mostrar resumen de Jugador:
            echo "Ingrese el nombre del Jugador: ";
            $nombreJugador = strtoupper(trim(fgets(STDIN)));
            $resumen = detalleJugador($juegosTotal, $nombreJugador);
            if ($resumen["juegosPerdidos"] === 0 && $resumen["puntosAcumulados"] === 0) {
                echo "No hay registro del jugador. ". $nombreJugador ."\n";

            }elseif ($resumen["juegosGanados"]===0) {
                echo "el jugador"." ".$nombreJugador." "."no gano ningun juego.";
            }else {
                echo "*************************************\n";
                echo "Jugador: " . $resumen["nombre"] . "\n";
                echo "Ganó: " . $resumen["juegosGanados"] . " juegos\n";
                echo "Perdió: " . $resumen["juegosPerdidos"] . " juegos\n";
                echo "Empató " . $resumen["juegosEmpatados"] . " juegos\n";
                echo "Total de puntos acumulados: " . $resumen["puntosAcumulados"] . " puntos\n";
                echo "*************************************\n";
            }
            break;
        case 6:
                // 6) Mostrar listado de juegos Ordenado por jugador O:
                ordenarColeccion($juegosTotal);
            break;
        case 7:
            // 7) Finalizar programa:
            echo "Programa finalizado... vuelve pronto :)";
            break;
    }
} while ($elegir != 7);