<?php
$valorInicial= 15000;

function saldo(){
    
    $valorAcumulado="";


}
    

function juegoRuleta(){
        $tiro = mt_rand(1,3);
    
        if($tiro==1){
            echo 'Verde 🟢';
        }
        else if($tiro==2){
            echo'Rojo 🔴';
        }
        else{
            echo'Negro ⚫';
        }
    }

    juegoRuleta();

    /*function juegoJugador(){
  

    if($tiro==1){
        echo 'Verde';
    }
    else if($tiro==2){
        echo'Rojo';
    }
    else{
        echo'Negro';
    }
}

juegoJugador();*/

   













?>