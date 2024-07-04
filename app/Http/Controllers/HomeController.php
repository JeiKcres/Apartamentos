<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function calcular_V_A( $area, $piso=null){
        $precio = $area * 1500;
        if($piso == null||$piso == 1){
            echo'El valor del apartamento es: $'.$precio;

        }elseif($piso == 2){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.001) ;

        }elseif($piso == 3){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.002) ;

        }elseif($piso == 4){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.003) ;

        }elseif($piso == 5){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.004) ;

        }elseif($piso == 6){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.005) ;

        }elseif($piso == 7){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.006) ;
            
        }elseif($piso == 8){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.007) ;

        }elseif($piso == 9){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.008) ;

        }elseif($piso == 10){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.009) ;

        }elseif($piso == 11){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.01) ;

        }elseif($piso == 12){
            echo'El valor del apartamento es: $'.$precio + ($precio*0.011) ;
            
        }else{
            echo'Nuestro hotel solo consta de 12 pisos';
        }
    }
}
